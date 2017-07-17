<?php
$post_id = $post->ID;
$post_date = $post->post_date;
$post_date = date("d-m-Y",strtotime($post_date));
$post_thumbnail = get_the_post_thumbnail_url($post_id);
if (empty($post_thumbnail)) {
    //$post_thumbnail = 'http://via.placeholder.com/924x320';
// print_r("<pre>");
// print_r($post);
// print_r("</pre>");
?>

<div class="container-fluid textbox scroll_animation scroll_bottom max-1280">
    <div class="row">
        <div class="textbox-inside">
            <h6><?php echo $post_date; ?></h6>
            <h1><?php the_title(); ?></h1>
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
</div>

<?php } else { ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('container-fluid search-blog-post'); ?>>
    <div class="row">
        <div class="col-md-6">
            <div class="inner-div">
                <div class="format-box format image module-height">
                    <div class="post-image-box module-height" id="thumb-post-image-<?php the_ID(); ?>">
                        <a class="format-post-link" href="<?php the_permalink(); ?>"></a>
                    </div>
                    <style type="text/css">
                        .post-image-box#thumb-post-image-<?php the_ID(); ?> { background:url('<?php echo $post_thumbnail; ?>') no-repeat center center; background-size: cover;}
                    </style>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="inner-div">
                <div class="search-blog-post-text module-height">
                    <div class="search-blog-post-inside">
                        <h6><?php echo $post_date; ?></h6>
                        <h4>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            <?php edit_post_link(); ?>
                            <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
                        </h4>
                        <p class="theme-typo-color-secondary"></p>
                        <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>