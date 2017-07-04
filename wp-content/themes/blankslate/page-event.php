<?php /* Template Name: Event Template */ ?>

<?php get_header(); ?>


<?php
$aEvents = vav_get_events();

print_r("<pre>");
print_r($aEvents);
print_r("</pre>");

?>

<style>
    .tourdates-header {
        background: url(http://www.andreabocelli.com/wp-content/uploads/sites/2/2014/07/header.jpg) no-repeat center center;
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
                    <?php include '/templates/event-line.php' ?>
                </div>
                <div class="tourdates-archive-date">
                    <a class="link-arrow-common" href="http://www.andreabocelli.com/tourdates/">Archive Events</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>