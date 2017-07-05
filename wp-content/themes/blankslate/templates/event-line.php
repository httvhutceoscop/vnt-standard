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
               <a href="#<?php //the_permalink();?>" class="link-arrow-common">Info</a>
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