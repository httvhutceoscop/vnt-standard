<?php get_header(); ?>

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
                // $post_thumbnail = 'http://via.placeholder.com/924x320';
            }
            ?>

            <div class="thepost scroll_animation scroll_bottom" id="post<?php echo $post_id;?>">

                <div class="format-box format image">
                    <?php if (is_user_logged_in()) {
                        echo '<a class="edit-link" style="position: absolute; right: 0;font-size: 14px;background: #f1f1f1;" href="'.$link_edit.'">Edit</a>';
                    }
                    ?>

                    <?php if ($post_thumbnail != '') { ?>
                    <div class="post-image-box module-height" id="thumb-post-image-<?php echo $post_id;?>">
                        <a class="format-post-link" href="<?php the_permalink(); ?>"></a>
                    </div>
                    <style type="text/css">
                      .post-image-box#thumb-post-image-<?php echo $post_id;?> { background:url('<?php echo $post_thumbnail;?>') no-repeat center center; background-size: cover;}
                    </style>
                    <?php } ?>
                </div>

                <div class="post-content-padding typo-blog">
                    <p class="post-details"><?php echo $post_date; ?> -
                        <b><?php the_category( ', ' ); ?></b>
                    </p>
                    <h4 class="theme-typo-color-primary title-post"><?php the_title(); ?></h4>
                    <div class="post-content">
                    <?php the_content(); ?>
                    </div>
                </div>

                <div class="template-share-container">
                      <h6>Share on</h6>

                      <div class="social-share">
                        <div class="twitter-button-share">
                          <a class="tweet" href="http://www.andreabocelli.com/2016/11/15/the-music-of-silence-the-movie-based-on-the-life-of-andrea-bocelli/" title="“The Music of Silence”, the movie based on the life of Andrea Bocelli"><div>Share</div></a>
                        </div>
                        <div class="facebook-button-share">
                          <a href="#" onclick="window.open('https://www.facebook.com/sharer.php?u=' +encodeURIComponent('http://www.andreabocelli.com/2016/11/15/the-music-of-silence-the-movie-based-on-the-life-of-andrea-bocelli/'), '_blank', 'width=500,height=200')"><div>Share</div></a>
                        </div>
                        <div class="google-button-share">
                          <a href="#" onclick="window.open('https://plus.google.com/share?url=' +encodeURIComponent('http://www.andreabocelli.com/2016/11/15/the-music-of-silence-the-movie-based-on-the-life-of-andrea-bocelli/'), '_blank', 'width=600,height=600,toolbar=no,status=no,menubar=no')"><div>Share</div></a>
                        </div>
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