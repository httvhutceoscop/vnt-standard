<?php
$args = array(
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'post_type' => 'post',
    'posts_per_page' => 3,
);
$query = new WP_Query( $args );
$aPosts = $query->posts;
?>
<div class="container-fluid module-loop-blogpost scroll_animation scroll_bottom max-1280">
    <div class="module-title-section">
        <p>LAST</p>
        <h2>News</h2>
    </div>
    <div class="row">
        <div class="module-loop-blogpost-sliderbox ">
            <?php foreach ($aPosts as $key => $post) {
                $post_id = $post->ID;
                $post_title = $post->post_title;
                $post_excerpt = $post->post_excerpt;
                $post_content = $post->post_content;
                $post_date = $post->post_date;
                $post_date = date('d-m-Y', strtotime($post_date));
                $link = get_permalink($post_id);
                $link_edit = get_edit_post_link($post_id);

                if (empty($post_excerpt) && !empty($post_content)) {
                    $post_excerpt = wp_trim_words($post_content, 20, '...');
                }

                $postThumb = get_the_post_thumbnail_url($post_id);
                if (empty($postThumb)) {
                    $postThumb = 'http://via.placeholder.com/924x320';
                }
            ?>
                <div class="module-loop-blogpost-slide-single">

                    <div class="col-md-6" id="post<?php echo $post_id;?>">
                        <div class="inner-div">
                            <div class="format-box format image module-height">
                                <div class="post-image-box module-height" id="thumb-post-image-<?php echo $post_id;?>">
                                    <a class="format-post-link" href=""></a>
                                </div>

                                <style type="text/css">
                                    .post-image-box#thumb-post-image-<?php echo $post_id;?> { background:url('<?php echo $postThumb;?>') no-repeat center center; background-size: cover;}
                                </style>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="inner-div module-height">
                            <div class="module-loop-blogpost-text">
                                <div class="module-loop-blogpost-inside">
                                    <h6><?php echo $post_date; ?></h6>
                                    <a href="">
                                        <h4><?php echo $post_title; ?></h4>
                                    </a>
                                    <p></p>
                                    <p><?php echo $post_excerpt; ?></p>
                                </div>
                                <?php if (is_user_logged_in()) {
                                    echo '<a class="edit-link" style="position: absolute; right: 0;font-size: 14px;background: #f1f1f1;" href="'.$link_edit.'">Edit</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
    <div class="module-go-archive-slider">
        <div>
            <a class="link-arrow-common" href="#">More News</a>
        </div>
    </div>
</div>