<?php
$args = array(
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'post_type' => 'discography-2',
    'showposts' => 4,
);
$query = new WP_Query( $args );
$aPosts = $query->posts;
?>

<div class="container-fluid module-loop-discography scroll_animation scroll_bottom max-1280">
    <div class="module-title-section">
        <p>LAST RELEASES</p>
        <h2>Discography</h2>
    </div>
    <div class="row">
        <?php foreach ($aPosts as $key => $post) {
            $post_id = $post->ID;
            $post_title = $post->post_title;
            $post_date = $post->post_date;
            $post_date = date('d/m/Y');
            $post_thumbnail = get_the_post_thumbnail_url($post_id);
            $link = get_permalink($post_id);
            $link_edit = get_edit_post_link($post_id);

            if ($post_thumbnail == '') {
                $post_thumbnail = 'http://via.placeholder.com/252x252';
            }
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="inner-div">
                    <?php if (is_user_logged_in()) {
                        echo '<a class="edit-link" style="position: absolute; right: 0;font-size: 14px;background: #f1f1f1;" href="'.$link_edit.'">Edit</a>';
                    }
                    ?>
                    <div>
                        <div class="module-loop-discography-img" style="background:url('<?php echo $post_thumbnail;?>') no-repeat center center; background-size: cover;">
                            <a href="<?php echo $link; ?>"></a>
                        </div>
                    </div>
                    <p><?php echo $post_date; ?></p>
                    <h5><?php echo $post_title; ?></h5>
                </div>
            </div>

        <?php } ?>
    </div>
    <div class="module-go-archive">
        <div>
            <a class="link-arrow-common" href="#">Discography</a>
        </div>
    </div>
</div>