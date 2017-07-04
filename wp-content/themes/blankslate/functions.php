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
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
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
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
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
    $query = new WP_Query( $args );
    $aPosts = $query->posts;

    $aEvents = [];
    foreach ($aPosts as $key => $post) {
        $post_id = $post->ID;
        $date = types_field_meta_value('date', $post_id);
        $venue = types_field_meta_value('venue', $post_id);
        $location = types_field_meta_value('location', $post_id);
        $featuring = types_field_meta_value('featuring', $post_id);
        $post_thumbnail = get_the_post_thumbnail_url($post_id);

        if ($post_thumbnail == '') {
            $post_thumbnail = 'http://www.andreabocelli.com/wp-content/uploads/sites/2/2017/04/top-orvieto-150x150.jpg';
        }

        $post->date_event = $date;
        $post->venue = $venue;
        $post->location = $location;
        $post->featuring = $featuring;
        $post->post_thumbnail = $post_thumbnail;

        array_push($aEvents, $post);
    }

    return $aEvents;
}