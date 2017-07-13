<?php
$post_id = $post->ID;
$post_thumbnail = get_the_post_thumbnail_url($post_id);
if (empty($post_thumbnail)) {
    $post_thumbnail = 'http://via.placeholder.com/924x320';
}
?>

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
                        <h6>15-11-2016</h6>
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