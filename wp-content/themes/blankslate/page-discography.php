<?php /* Template Name: Discography Template */ ?>

<?php get_header(); ?>

<?php
    $args = array(
                'orderby' => 'date',
                'order' => 'DESC',
                'post_status' => 'publish',
                'post_type' => 'discography-2',
                // 'showposts' => 10
        );
        //query_posts($args);
        $query = new WP_Query( $args );
        $aPosts = $query->posts;
?>

<div class="discography-container">
    <div class="strip-next-prev-all-ghost">
        <div class="strip-next-prev-all-inside">
            <div class="discography-select">
                <div class="discography-selector-all active"><p>ALL</p></div>
                <div class="discography-selector-classic"><p>CLASSICA</p></div>
                <div class="discography-selector-pop"><p>POP</p></div>
                <div class="discography-selector-dvd"><p>DVD</p></div>
            </div>
        </div>
    </div>

    <div class="discography-select">
        <div class="discography-selector-all active"><p>ALL</p></div>
        <div class="discography-selector-classic"><p>CLASSICA</p></div>
        <div class="discography-selector-pop"><p>POP</p></div>
        <div class="discography-selector-dvd"><p>DVD</p></div>
    </div>

    <div class="discography-archive-container">
        <ul>
        <?php
        foreach ($aPosts as $key => $post) {
            $post_id = $post->ID;
            $link = get_permalink($post_id);
            $post_date = $post->post_date;
            $post_date = date('m/d/Y', strtotime($post_date));
            $post_title = $post->post_title;
            $post_thumbnail = get_the_post_thumbnail_url($post_id);
            $discoType = types_field_meta_value('discograpy-types', $post_id);

            switch ($discoType) {
                case 'trong':
                    $discoType = 'trong';
                    break;
                case 'dan-tranh':
                    $discoType = 'dantranh';
                    break;
                case 'dan-bau':
                    $discoType = 'danbau';
                    break;

                default:
                    # code...
                    break;
            }
            echo '<li class="discography_'.$discoType.'">
                <a href="'.$link.'">
                    <img src="'.$post_thumbnail.'" alt="album">
                    <div class="discography-archive-details">
                        <p>'.$post_date.'</p>
                        <h5>'.$post_title.'</h5>
                        <h6>℗ Van Anh Vo</h6>
                    </div>
                </a>
            </li>';
        }
        ?>
        </ul>

    </div>
</div>


<?php get_footer(); ?>