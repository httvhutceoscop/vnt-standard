<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}


add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
/**
 * Enqueue scripts and styles.
 */
function blankslate_load_scripts() {
    wp_enqueue_script( 'jquery' );

    // Theme stylesheet.
    // wp_enqueue_style( 'shinchan-bootstrap-min', get_theme_file_uri( '/assets/css/bootstrap.min.css' ) );
    // wp_enqueue_style( 'shinchan-animate', get_theme_file_uri( '/assets/css/animate.css' ) );
    wp_enqueue_style( 'shinchan-style', get_stylesheet_uri() );
    wp_enqueue_style( 'vav-main-style', get_theme_file_uri( '/assets/css/main-style.css' ) );

    // wp_enqueue_script( 'vav-jquery-2.2.4.min', get_theme_file_uri( '/assets/js/jquery-2.2.4.min.js' ) );
    // wp_enqueue_script( 'shinchan-bootstrap-min', get_theme_file_uri( '/assets/js/bootstrap.min.js' ) );
    wp_enqueue_script( 'vav-owl-carousel', get_theme_file_uri( '/assets/js/owl.carousel.min.js' ) );
    wp_enqueue_script( 'vav-jquery-easing', get_theme_file_uri( '/assets/js/jquery.easing.js' ) );
    wp_enqueue_script( 'vav-momentjs-min', get_theme_file_uri( '/assets/js/momentjs.min.js' ) );
    wp_enqueue_script( 'vav-init-ck', get_theme_file_uri( '/assets/js/init-ck.js' ) );
    wp_enqueue_script( 'vav-main', get_theme_file_uri( '/assets/js/main.js' ) );
}

add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
    register_sidebar( array (
        'name' => __( 'Sidebar Widget Area', 'blankslate' ),
        'id' => 'primary-widget-area',
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div>',
        'after_widget' => "</div></div>",
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
}

function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


function vav_get_events($showPost = 0) {
    $args = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'post_type' => 'event'
    );
    if ($showPost != 0) {
        $args['showposts'] = $showPost;
    }
    $query = new WP_Query( $args );
    $aPosts = $query->posts;

    $aEvents = [];
    $rand = 1;
    foreach ($aPosts as $key => $post) {
        $post_id = $post->ID;
        $date = types_field_meta_value('date', $post_id);
        $venue = types_field_meta_value('venue', $post_id);
        $location = types_field_meta_value('location', $post_id);
        $featuring = types_field_meta_value('featuring', $post_id);
        $post_thumbnail = get_the_post_thumbnail_url($post_id);
        if ($key == 5) $rand = 1;
        if ($post_thumbnail == '') {
            $post_thumbnail = get_template_directory_uri().'/assets/images/event-random-'.$rand.'.jpg';
        }
        $rand++;

        $post->date_event = $date;
        $post->venue = $venue;
        $post->location = $location;
        $post->featuring = $featuring;
        $post->post_thumbnail = $post_thumbnail;

        array_push($aEvents, $post);
    }

    return $aEvents;
}

function vav_get_careers($year = null, $countYear = false) {
    $args = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'post_type' => 'career-2',
    );

    if (!$countYear) {
        $args['meta_query'] = array(
                            'relation' => 'AND',
                            array(
                                'key' => 'wpcf-career-year',
                                'value' => strtotime($year.'-01-01'),
                                'compare' => '>=',
                                'type' => 'NUMERIC'
                            ),
                            array(
                                'key' => 'wpcf-career-year',
                                'value' => strtotime($year.'-12-31'),
                                'compare' => '<=',
                                'type' => 'NUMERIC'
                            )
                    );
    }

    $query = new WP_Query( $args );
    $aPosts = $query->posts;

    $aCareers = [];
    foreach ($aPosts as $key => $post) {
        $post_id = $post->ID;
        $date = types_field_meta_value('career-year', $post_id);
        $location = types_field_meta_value('location-career', $post_id);
        $post_thumbnail = get_the_post_thumbnail_url($post_id);

        if ($post_thumbnail == '') {
            $post_thumbnail = 'http://via.placeholder.com/740x493';
        }

        $post->date_event = $date;
        $post->location = $location;
        $post->post_thumbnail = $post_thumbnail;

        if (!$countYear) {
            array_push($aCareers, $post);
        } else {
            if (isset($date['timestamp'])) {
                $y = date('Y', $date['timestamp']);
                array_push($aCareers, $y);
            }
        }
    }

    return $aCareers;
}

function vav_switch_language() {
    $txt = '';
    $translations = pll_the_languages(array('raw'=>1));
    $current_language = pll_current_language();
    $active_en = 'active';
    $active_vi = '';
    $url_en = $translations['en']['url'];
    $url_vi = $translations['vi']['url'];

    if ($current_language == 'vi') {
        $active_en = '';
        $active_vi = 'active';
    }

    $txt = '<a href="'.$url_en.'" class="'.$active_en.'">en</a>
            <div></div>
            <a href="'.$url_vi.'" class="'.$active_vi.'">vi</a>';

    return $txt;
}