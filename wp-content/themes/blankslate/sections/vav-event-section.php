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
                    $aEventByMonth = vav_get_events(6,true,true);
                    foreach ($aEventByMonth as $month_year => $aEvents) {
                        foreach ($aEvents as $key => $post) {
                            $date = types_field_meta_value('date', $post->ID);
                            if (isset($date['timestamp'])) {
                                $m = date('F', $date['timestamp']);
                                $day = date('l', $date['timestamp']);
                                $d = date('d', $date['timestamp']);
                                $y = date('Y', $date['timestamp']);
                            }
                            $postThumb = $post->post_thumbnail;
                            // include 'templates/event-line.php';
                    ?>
                    <div class="tourdates-singledate event-<?php echo $post->ID;?> scroll_animation scroll_bottom_low">
                       <a href="<?php the_permalink()?>">

                           <div class="singledate-img circle-7869">
                               <div style="background:url('<?php echo $postThumb; ?>') no-repeat center center; background-size: cover;"></div>
                               </div>

                           <div class="singledate-datepicker">
                             <div class="date-number"><h1><?php echo $d; ?></h1></div>
                             <div class="date-month-day">
                               <p class="year"><?php echo $y; ?></p>
                               <p class="month" ><?php echo $m; ?></p>
                               <p class="day" ><?php echo $day; ?></p>

                             </div>
                           </div>

                           <div class="singledate-details">
                             <div>
                               <div>
                                 <h6><?php echo types_field_meta_value('venue', $post->ID);?></h6>
                                 <p><?php echo types_field_meta_value('location', $post->ID);?></p>
                               </div>
                             </div>
                           </div>
                       </a>

                       <div class="single-date-infotickets">
                           <a href="#<?php //the_permalink()?>"></a>
                           <div class="single-date-info">
                               <a href="#<?php //the_permalink()?>"></a>
                               <div>
                                   <a href="<?php //the_permalink()?>"></a>
                                   <a href="<?php the_permalink();?>" class="link-arrow-common">Info</a>
                               </div>
                           </div>

                           <div class="singledate-buytickets">
                               <div class="buy-ticket-enable hide">
                                   <a target="_blank" href="#"><p>Buy Tickets</p></a>
                               </div>
                           </div>
                           <div class="single-date-tickets-details">
                               <div>
                                   <div><h6><?php echo types_field_meta_value('featuring', $post->ID);?></h6></div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <?php
                        }
                      }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div class="module-go-archive">
      <div>
        <a class="link-arrow-common" href="/index.php/events/">More Events</a>
      </div>
    </div>
</div>