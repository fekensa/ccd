$(window).scroll(function(e)
{ 
  var $el = $('.header-bottom'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 30 && !isPositionFixed){ 
    $('.header-bottom').css({'position': 'fixed', 'top': '0px','background-color': '#2D2D2D'}); 
  }
  if ($(this).scrollTop() < 30 && isPositionFixed)
  {
    $('.header-bottom').css({'position': 'absolute','top':'30px','background-color':'rgba(34,34,34,0.25)'}); 
  } 
});

$(document).ready(function(){ 

	$('.top-nav li > a').click(function() {
		$('li').removeClass();
		$(this).parent().addClass('active');
	});

  $(".header a").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });

});

/*$(window).on("scroll", function () {
  if ($(window).scrollTop() > 0) {
        $('li').removeClass();
    $(this).parent().addClass('active');
  }
});

$('#ccd-page, #info-ccd, #contact-ccd, #about-ccd, #feedback-ccd').on('click', function(e){
    e.preventDefault();
    var target = $(this).getElementsByTagName('')
    $('html, body').stop().animate(
    {
      scrollTop: element.offset().top
    },1000);*/