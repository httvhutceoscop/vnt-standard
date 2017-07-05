<?php /* Template Name: Event Template */ ?>

<?php get_header(); ?>

<style>
    .tourdates-header {
        background: url('<?php echo get_template_directory_uri().'/assets/images/event-header.jpg'?>') no-repeat center center;
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
                    <div class="change-month"><h6>2017</h6><h2>July</h2><div></div></div>
                    <?php
                    $aEvents = vav_get_events(6);
                    foreach ($aEvents as $key => $post) {
                        $date = types_field_meta_value('date', $post->ID);
                        if (isset($date['timestamp'])) {
                            $m = date('F', $date['timestamp']);
                            $day = date('l', $date['timestamp']);
                            $d = date('d', $date['timestamp']);
                            $y = date('Y', $date['timestamp']);
                        }
                        $postThumb = $post->post_thumbnail;
                        include '/templates/event-line.php';
                    }
                    ?>
                    <div class="change-month"><h6>2017</h6><h2>August</h2><div></div></div>
                    <?php
                    $aEvents = vav_get_events(2);
                    foreach ($aEvents as $key => $post) {
                        $date = types_field_meta_value('date', $post->ID);
                        if (isset($date['timestamp'])) {
                            $m = date('F', $date['timestamp']);
                            $day = date('l', $date['timestamp']);
                            $d = date('d', $date['timestamp']);
                            $y = date('Y', $date['timestamp']);
                        }
                        $postThumb = $post->post_thumbnail;
                        include '/templates/event-line.php';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>