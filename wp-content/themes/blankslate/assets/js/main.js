jQuery(document).ready(function() {
    console.log('here');

    if (window.matchMedia('(min-width: 992px)').matches) {
        // do functionality on screens larger than 992px
        jQuery('.module-loop-blogpost-sliderbox').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items:1,
            margin:30,
            stagePadding:30,
            smartSpeed:450
        });
    } else {

    }
});