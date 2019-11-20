jQuery(document).ready(function($) {

//Add Sticky Menu
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
   /* $(".content").css("padding-top", "100px");*/
  } else {
    navbar.classList.remove("sticky");
  }
}
 $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });


/*$('.gooey').hide();
$('.gooey').show(0).delay(1000).hide(80);
$('.gooey2').hide();
$('.gooey2').show(2000).delay(1000).hide(0);
$('.gooey3').hide();
$('.gooey3').show(9000).delay(10).hide(0);
$('.gooey4').hide();
$('.gooey4').show(12000).delay(10).hide(0);*/
$('#password, #confirm_password').on('keyup', function () {
    if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Matching').css('color', 'green');
        $('#message').hide();
    } else 
        $('#message').html('Not Matching').css('color', 'red');
});

$('.gooey').hide();
$('.gooey').show(0).delay(1000).hide(80);
$('.gooey2').hide();
$('.gooey2').show(2000).delay(100).hide(40);
$('.gooey3').hide();
$('.gooey3').show(7000).delay(100).hide(20);
$('.gooey4').hide();
$('.gooey4').show(18000).delay(0).hide(0);

});