<?php /* Template Name: Teaching Template */ ?>

<?php get_header(); ?>
<?php
$post_id = $post->ID;
$post_thumbnail = get_the_post_thumbnail_url($post_id);
if ($post_thumbnail == '') {
    $post_thumbnail = 'http://via.placeholder.com/740x493';
}
$thumb = get_template_directory_uri().'/assets/images/biograhpy.jpg';
?>
<div class="container-fluid operas-archive-page max-1280">
    <div class="module-title-section">
        <p>About</p>
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <!-- <h2>Biography</h2> -->
    </div>
</div>
<div class="container-fluid biography-archive-page-content max-1280">
    <div class="row">
        <div class="entry-content">
            <div class="about-content-wrap">
                <p><img class="alignright bio-pic-1 skrollable skrollable-before" src="<?php echo $thumb; ?>" alt="" data--350-top="opacity: 0.4; -webkit-filter: grayscale(100%); filter: grayscale(100%);" data--100-top="opacity: 1; -webkit-filter: grayscale(0%); filter: grayscale(0%);" style="opacity: 1; filter: grayscale(0%);"></p>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php print_r("<pre>");
// print_r($post);
print_r("</pre>"); ?>

<?php get_footer(); ?>