//======== This .js for animation anything object ================

$(window).load(function (){
  $element = $('.title-bg-b');
   setInterval(function () {
        $element.fadeIn(1000, function () {
            $element.fadeOut(1500, function () {
                $element.fadeIn(1500)
            });
        });
    }, 1000);
});

var $dipper = $('.bgh2');
//  $dipper.addClass('animated fadeOut');
// $dipper.waypoint(function (){
//   $dipper.addClass('animated fadeOut');
// },{
//     offset: '0%'
// });

$dipper.waypoint(function (){
	$dipper.removeClass('animated fadeOut');
  $dipper.addClass('animated fadeIn');
},{
    offset: '70%'
});

$dipper.waypoint(function (){
  $dipper.removeClass('animated fadeIn');
    $dipper.addClass('animated fadeOut');
},{
    offset: '100%'
});

  $('.social-1').addClass('animated fadeOut');
   $('.social-2').addClass('animated fadeOut');
$('.social-1').waypoint(function (){
	$('.social-1').removeClass('animated fadeOut');
	  $('.social-2').removeClass('animated fadeOut');
  $('.social-1').addClass('animated bounceInDown');
   $('.social-2').addClass('animated bounceInUp');
},{
    offset: '50%'
});









