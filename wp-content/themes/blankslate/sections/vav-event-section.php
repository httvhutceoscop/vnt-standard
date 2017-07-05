<div class="container-fluid textbox scroll_animation scroll_bottom max-1280">
    <div class="row">
        <div class="textbox-inside">
            <h6>EVENT DATES</h6>
            <h1>Van Anh Vo Event Dates</h1>
            <p>Discover event dates and all the information about Van Anh's concerts.</p>
        </div>
    </div>
</div>

<div class="container-fluid module-loop-tourdates scroll_animation scroll_bottom max-1280">
    <div class="row">
        <div class="tourdates-datebox">
            <div class="tourdates-datebox-inside">
                <div class="tourdates-future">

                    <?php
                    $aEvents = vav_get_events(3);
                    foreach ($aEvents as $key => $post) {
                        $date = types_field_meta_value('date', $post->ID);
                        if (isset($date['timestamp'])) {
                            $m = date('F', $date['timestamp']);
                            $day = date('l', $date['timestamp']);
                            $d = date('d', $date['timestamp']);
                            $y = date('Y', $date['timestamp']);
                        }
                        $postThumb = $post->post_thumbnail;
                        $path = get_template_directory_uri();
                        $documentRoot = dirname(dirname(__FILE__));
                        include_once $path."/templates/event-line.php";
                        // include '/../templates/event-line.php';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>