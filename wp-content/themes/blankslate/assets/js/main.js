jQuery(document).ready(function() {
    console.log('here');
    jQuery('.module-loop-blogpost-sliderbox').owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        items:1,
        margin:30,
        stagePadding:30,
        smartSpeed:450
    });
});