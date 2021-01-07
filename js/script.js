window.scrollReveal = new scrollReveal();
$(window).stellar();

//***********
//Menus sets
//***********
$('.menu').click(function() {
	$('.showmenu').toggleClass('openMenu closedMenu');
	$('.menu').toggleClass('toggleMenu');
});
$('.inmenu li').click(function() {
	$('.showmenu').toggleClass('openMenu closedMenu');
	$('.menu').toggleClass('toggleMenu');
});

$('.btn-contact').click(function() {
	$('.contact-form').addClass('contact-add');
});

$(window).scroll(function() {

  if ($(this).scrollTop() > 60) {
    $('.gtanim').addClass('toggletoup');
  } else {
    $('.gtanim').removeClass('toggletoup');
  }
});

//***********
//Pages anims
//***********
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 400,
    outDuration: 400,
    linkElement: '.animsition-link',
    loading: true,
    loadingParentElement: 'body',
    loadingClass: 'animsition-loading',
    loadingInner: '',
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
