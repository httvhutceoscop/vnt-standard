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
        $query = new WP_Query( $args );
        $aPosts = $query->posts;

        print_r("<pre>");
        // print_r($aPosts);
        print_r("</pre>");
?>

<div class="discography-container">
    <div class="strip-next-prev-all-ghost hide">
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
        <div discotype="all" class="discography-selector-all active"><p>ALL</p></div>
        <div discotype="trong" class="discography-selector-trong"><p>TRONG</p></div>
        <div discotype="dantranh" class="discography-selector-dantranh"><p>DAN TRANH</p></div>
        <div discotype="danbau" class="discography-selector-danbau"><p>DAN BAU</p></div>
    </div>

    <div class="discography-archive-container">
        <ul>
        <?php
        foreach ($aPosts as $key => $post) {
            $post_id = $post->ID;
            $link = get_permalink($post_id);
            $link_edit = get_edit_post_link($post_id);
            $post_date = $post->post_date;
            $post_date = date('m/d/Y', strtotime($post_date));
            $post_title = $post->post_title;
            $post_thumbnail = get_the_post_thumbnail_url($post_id);
            if ( empty($post_thumbnail) ) {
                $post_thumbnail = 'http://via.placeholder.com/320x320';
            }
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
            echo '<li class="discography_'.$discoType.'">';
            ?>
            <?php if (is_user_logged_in()) {
                echo '<span class="edit-link" style="position: absolute; right: 0;font-size: 14px;background: #f1f1f1;"><a style="position: relative;" href="'.$link_edit.'">Edit</a></span>';
            } ?>
            <?php
            echo    '<a href="'.$link.'">
                    <div class="disco-cover" style="background:url('.$post_thumbnail.') no-repeat center center; background-size: cover;"></div>
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

<script>
    jQuery(document).ready(function($) {
       $('.discography-select > div').on('click', function() {

console.log($(this));
$('.discography-select div').removeClass('active');
$(this).addClass('active');
var disco_type = $(this).attr('discotype');
switch(disco_type) {
    case 'trong':
        $('.discography_trong').css({'display':'inline-block'}).addClass('moveFromBottomFade').removeClass('moveToBottomFade');
        $('.discography_dantranh, .discography_danbau').css({'display':'none'}).addClass('moveToBottomFade').removeClass('moveFromBottomFade');
        break;
    case 'dantranh':
        $('.discography_dantranh').css({'display':'inline-block'}).addClass('moveFromBottomFade').removeClass('moveToBottomFade');
        $('.discography_trong, .discography_danbau').css({'display':'none'}).addClass('moveToBottomFade').removeClass('moveFromBottomFade');
        break;
    case 'danbau':
        $('.discography_danbau').css({'display':'inline-block'}).addClass('moveFromBottomFade').removeClass('moveToBottomFade');
        $('.discography_trong, .discography_dantranh').css({'display':'none'}).addClass('moveToBottomFade').removeClass('moveFromBottomFade');
        break;

    default:
        console.log('all');
        $('.discography-archive-container ul li').css({'display':'inline-block'}).addClass('moveFromBottomFade').removeClass('moveToBottomFade');

        break;
}

       });
    });
</script>

<?php get_footer(); ?>