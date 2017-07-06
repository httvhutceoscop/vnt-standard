<?php /* Template Name: Career Template */ ?>

<?php get_header(); ?>

<?php
$listYears = vav_get_careers(null, true);
$listYears = array_unique($listYears);
rsort($listYears);

$year = $listYears[0];
$pathInfo = $_SERVER['PATH_INFO'];
$pathInfo = explode('/', $pathInfo);
if (count($pathInfo) == 4) {
    $year = $pathInfo[2];
}
$aCareers = vav_get_careers($year);

$url_career = 'http://'.$_SERVER['SERVER_NAME'].'/index.php/career/';

if (is_user_logged_in()) {
    print_r("<pre>");
    print_r($year);
    print_r($url_career);
    print_r("</pre>");
}

?>

<div class="career-timeline-box">
  <div class="career-timeline-box-outer">
    <div class="career-timeline-box-inner">

    <?php foreach ($listYears as $key => $value) {
        $activeYear = '';
        if ($value == $year) $activeYear = 'active';
    ?>
        <div class="single-career-timeline <?php echo $activeYear;?>">
            <p><a href="<?php echo $url_career.$value; ?>"><?php echo $value; ?></a></p>
            <div class="<?php echo $activeYear;?>"><div class="<?php echo $activeYear;?>"></div></div>
        </div>
    <?php } ?>

    </div>
  </div>
</div>

<div class="career-year">
    <div>
        <h1><?php echo $year; ?></h1>
        <div></div>
    </div>
</div>

<?php foreach ($aCareers as $key => $post) {
    $post_id = $post->ID;
    $post_title = $post->post_title;
    $post_content = $post->post_content;
    $post_thumbnail = $post->post_thumbnail;
    $location = $post->location;
    $date_event = $post->date_event;
    if (isset($date_event['timestamp'])) {
        $d = date('d-m-Y', $date_event['timestamp']);
    }
    $link_edit = get_edit_post_link($post_id);
?>
<div class="career-single-event" id="item-<?php echo $post_id;?>">
    <div class="container-fluid module-slideshow-text scroll_animation scroll_bottom max-1280">
        <div class="row">
            <div class="textbox-inside">
                <?php if (is_user_logged_in()) {
                    echo '<a class="edit-link" style="position: absolute; right: 0;font-size: 14px;background: #f1f1f1;" href="'.$link_edit.'">Edit</a>';
                }
                ?>
                <h6><?php echo $location.' '.$d; ?></h6>
                <h1><?php echo $post_title; ?></h1>
                <p><?php echo $post_content; ?></p>
            </div>
            <?php if ($post_thumbnail != '') { ?>
            <div class="slideshow-text-container">
                <div class="slider">
                    <div class="slideshow-text-image-box">
                        <div class="single-image" style="background: url('<?php echo $post_thumbnail; ?>') center center / contain no-repeat;"></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="social-share-career">
          <div class="social-share">
            <div class="twitter-button-share">
              <a class="tweet" href="#" title="CFN Italy 2015"><div>Share</div></a>
            </div>
            <div class="facebook-button-share">
              <a href="#" onclick="window.open('https://www.facebook.com/sharer.php?u=' +encodeURIComponent('#'), '_blank', 'width=500,height=200')"><div>Share</div></a>
            </div>
            <div class="google-button-share">
              <a href="#" onclick="window.open('https://plus.google.com/share?url=' +encodeURIComponent('#'), '_blank', 'width=600,height=600,toolbar=no,status=no,menubar=no')"><div>Share</div></a>
            </div>
          </div>
    </div>

</div>
<?php } ?>

<?php get_footer(); ?>