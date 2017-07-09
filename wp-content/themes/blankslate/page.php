<?php get_header(); ?>

<style>
    .tourdates-header {
        background: url('<?php echo get_template_directory_uri().'/assets/images/event-header.jpg'?>') no-repeat center center;
        background-size: cover;
    }
</style>

<div class="template-header tourdates-header"></div>
<div class="container-fluid textbox">
    <div class="row">
        <div class="textbox-inside">
            <h6>Vo Van Anh</h6>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <!-- <h1>Contact</h1> -->
        </div>
    </div>
</div>

<div class="container-fluid blog-wrapper max-1280">
    <div class="row">
        <div class="col-md-9">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


            <?php
            $post_id = $post->ID;
            $post_date = get_the_date( 'm-d-Y', $post_id );
            $post_thumbnail = get_the_post_thumbnail_url($post_id);
            $link_edit = get_edit_post_link($post_id);

            if ($post_thumbnail == '') {
                //$post_thumbnail = 'http://via.placeholder.com/924x320';
            }
            ?>

            <div class="contact-content thepost scroll_animation scroll_bottom" id="post<?php echo $post_id;?>">

                <div class="post-content-padding typo-blog">
                    <div class="post-content">
                    <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <?php endwhile; endif; ?>
        </div>
        <div class="blog-sidebar col-md-3 typo-widget scroll_animation scroll_bottom_low_ease col-md-9">
            <div class="blog-sidebar-inside">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>