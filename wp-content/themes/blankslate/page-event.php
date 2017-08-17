<?php /* Template Name: Event Template */ ?>

<?php get_header(); ?>

<?php
$post_thumbnail = get_the_post_thumbnail_url($post->ID);
if (empty($post_thumbnail)) {
    $post_thumbnail = get_template_directory_uri().'/assets/images/event-header.jpg';
}
?>

<style>
    .tourdates-header {
        background: url('<?php echo $post_thumbnail;?>') no-repeat center center;
        background-size: cover;
        height: 500px;
    }
</style>

<div class="template-header tourdates-header"></div>
<div class="container-fluid textbox">
    <div class="row">
        <div class="textbox-inside">
            <h6>EVENT DATES</h6>
            <h1>Vanh Anh Vo Event Dates</h1>
            <p></p>
            <div class="typo-tourdates"></div>
        </div>
    </div>
</div>
<div class="container-fluid max-1280">
    <div class="row">
        <div class="tourdates-datebox">
            <div class="tourdates-datebox-inside">
                <div class="tourdates-nextfuture">
                    <?php
                    if (isset($_REQUEST['full']) && $_REQUEST['full']) {
                        $aEventByMonth = vav_get_events(0,false);
                    } else {
                        $aEventByMonth = vav_get_events(0,true);
                    }
                    foreach ($aEventByMonth as $month_year => $aEvents) {
                        $month_year = explode('-', $month_year);
                        echo '<div class="change-month"><h6>'.$month_year[1].'</h6><h2>'.$month_year[0].'</h2><div></div></div>';
                        foreach ($aEvents as $key => $post) {
                            $date = types_field_meta_value('date', $post->ID);
                            if (isset($date['timestamp'])) {
                                $m = date('F', $date['timestamp']);
                                $day = date('l', $date['timestamp']);
                                $d = date('d', $date['timestamp']);
                                $y = date('Y', $date['timestamp']);
                            }
                            $postThumb = $post->post_thumbnail;
                            include 'templates/event-line.php';
                        }
                    }
                    ?>
                </div>
                <?php if (!isset($_REQUEST['full'])) { ?>
                <div class="tourdates-archive-date">
                  <a class="link-arrow-common" href="/index.php/events/?full=1">Archive Events</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>