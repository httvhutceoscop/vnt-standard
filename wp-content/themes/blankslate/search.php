<?php get_header(); ?>

<div class="container-fluid search-result-container max-1280">
    <div class="row">
        <div class="col-md-12">

            <div class="module-title-section title-section-search">
                <h6>search results for "<strong class="search-result-string"><?php echo get_search_query(); ?></strong>"</h6>
                <div></div>
            </div>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
            <?php endwhile; ?>
            <?php //get_template_part( 'nav', 'below' ); ?>
            <?php else : ?>
        <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>