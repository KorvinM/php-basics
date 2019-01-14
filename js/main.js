
$(document).ready(function(){
  $('.slides').slick({
    accessibility: true,
    draggable: false,
    slidesToShow: 1,
    adaptiveHeight:true,
  });

  // On before slide change
$('.slides').on('beforeChange', function(event, slick, currentSlide){
	    $("html, body").animate({ scrollTop: 0 });
	    return false;
});

});
