$('.m-navtop').hide();
/*================================== Menu ==========================================*/
// $('.top-nav > .row > #test >.menu-top-menu-container > ul').addClass('nav nav-tabs nav-drife-top');
// $('.top-nav > .row > #test >.menu-top-menu-container > ul > li').attr('role', 'presentation');
// $('.top-nav > .row > #test >.menu-top-menu-container > ul > li.menu-item-has-children').addClass('dropdown dp-y');
// $('.top-nav > .row > #test >.menu-top-menu-container > ul > li.menu-item-has-children > a').attr('role', 'button');
// $('.top-nav > .row > #test >.menu-top-menu-container > ul > li.menu-item-has-children > a').append('<span role="button" class="dropdown-toggle caret" data-toggle="dropdown"></span>');
// $('.top-nav > .row > #test >.menu-top-menu-container > ul > li.menu-item-has-children > ul').addClass('dropdown-menu drop-drife test');
// $('.top-nav > .row > #test >.menu-top-menu-container > ul > li.menu-item-has-children > ul > li').attr('role', 'presentation');
/*================================== Mobile Menu ==========================================*/
$('.top-nav > .row > #m-test >.menu-top-menu-container > ul').addClass('nav nav-tabs nav-m-drife');
$('.top-nav > .row > #m-test >.menu-top-menu-container > ul > li').attr('role', 'presentation');
$('.top-nav > .row > #m-test >.menu-top-menu-container > ul > li.menu-item-has-children').addClass('dropdown dp-y');
$('.top-nav > .row > #m-test >.menu-top-menu-container > ul > li.menu-item-has-children > a').attr('role', 'button').attr('aria-haspopup', 'true').attr('aria-expanded', 'false');
$('.top-nav > .row > #m-test >.menu-top-menu-container > ul > li.menu-item-has-children > a').append('<span role="button" class="dropdown-toggle caret" data-toggle="dropdown"></span>');
$('.top-nav > .row > #m-test >.menu-top-menu-container > ul > li.menu-item-has-children > ul').addClass('dropdown-menu drop-mdrife animated fadeIn');
$('.top-nav > .row > #m-test >.menu-top-menu-container > ul > li.menu-item-has-children > ul > li').attr('role', 'presentation');
/*================================== End Menu ==========================================*/

$('.lo-menu').click(function() {
    if ($('.m-navtop').hasClass('bounceInUp')) {
        $('.m-navtop').fadeIn().addClass('bounceOutUp');
        $('.m-navtop').removeClass('bounceInUp op-1');

    } else {
        $('.m-navtop').addClass('bounceInUp').fadeIn();
        $('.m-navtop').addClass('op-1');
        $('.m-navtop').removeClass('bounceOutUp op-0');

    }
});

$('.cb-up').click(function() {
    $('.m-navtop').addClass('bounceOutUp');
    $('.m-navtop').removeClass('bounceInUp');
    $('.m-arrow').fadeIn('medium');
});

$(function() {
    var shrinkHeader = 100;
    $(window).scroll(function() {
        var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            $('.top-nav').addClass('shrink');
            $('.hd-logo').addClass('shrink');
            $('.nav-drife-top').addClass('shrink');
            $('.m-arrow').addClass('shrink');
            $('.m-navtop').addClass('shrink');
        } else {
            $('.top-nav').removeClass('shrink');
            $('.hd-logo').removeClass('shrink');
            $('.nav-drife-top').removeClass('shrink');
            $('.m-arrow').removeClass('shrink');
            $('.m-navtop').removeClass('shrink');
        }
    });

    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});

$('.v-poto').hide();;
$('.img-show img').click(function() {
    var linkphoto = $(this).attr('rel');
    var htmlpoto = '';
    htmlpoto = '<img title="Klik the images for hide !" src="' + linkphoto + '" alt="Drife News Photo">';
    $('.f-poto').append(htmlpoto);
    $('.v-poto').fadeIn('slow');
});

$('.btn-close').click(function() {
    $('.f-poto img').fadeOut();
    $('.v-poto').fadeOut('medium');
});
$('.v-poto').click(function() {
    $('.f-poto img').fadeOut();
    $('.v-poto').fadeOut('medium');
});

// ========================= ONLY FOR DROPDOWN TABS ============================
$('body').delegate('#x-dp li a', 'click', function(e) {
    var code = $(this).attr('href');

    var $this = $(this);
    var $item = $(this).parent().find('ul.dropdown-menu');
    var $subCount = $item.length;
    if ($subCount === 0) {
        if ($this.parents('ul').find('li.active')) {
            $this.parents('ul').find('li.active').removeClass('active');
            $('.tab-pane').fadeOut();
        } else {
            $(code).fadeIn('medium');
            $this.parents('li').addClass('active');
        }
    }
});

// ========================= END FOR DROPDOWN TABS ============================
$(document).ready(function() {
    $(window).scroll(function() {
        $('*[class^="bg-down"]').each(function() {
            var pos = $(this).offset().top;
            var scrolled = $(window).scrollTop();
            $('*[class^="bg-down"]').css('top', (scrolled * 0.2) + 'px');
        });
    });
    $(window).resize(function() {
        if (($(window).width() <= 1199) && ($(window).width() >= 991)) {
            $('#test2').children('#news:last').hide()
        } else {
            $('#test2').children('#news:last').show()
        }
    });
    if (($(window).width() <= 1199) && ($(window).width() >= 991)) {
        $('#test2').children('#news:last').hide()
    } else {
        $('#test2').children('#news:last').show()
    }
});

var t;
$("li.dp-y").hover(
    function() {
        $(this).children('ul.drop-drife').stop(true, true).slideDown('medium');
        clearTimeout(t);
    },
    function() {
        t = setTimeout(function() {
            $('ul.drop-drife').stop(true, true).slideUp('medium');
        }, 2000);
    }
);

/*====================== Testing ==================================*/
$(document).ready(function() {
    $('.load1').hide();
    $('.load2').hide();
    $('.load3').hide();
    $('.load4').hide();
    $('.load5').hide();
    $('.load6').hide();
    $('.load7').hide();
    $('.load8').hide();
    $('.load9').hide();
    $('.load10').hide();
    size_div = $(".load1").size();
    size_div2 = $(".load2").size();
    size_div3 = $(".load3").size();
    size_div4 = $(".load4").size();
    size_div5 = $(".load5").size();
    size_div6 = $(".load6").size();
    size_div7 = $(".load7").size();
    size_div8 = $(".load8").size();
    size_div9 = $(".load9").size();
    size_div10 = $(".load10").size();
    x = 8;
    z = 12;
    $('.load1:lt(' + x + ')').show();
    $('.load2:lt(' + x + ')').show();
    $('.load3:lt(' + x + ')').show();
    $('.load4:lt(' + x + ')').show();
    $('.load5:lt(' + x + ')').show();
    $('.load6:lt(' + z + ')').show();
    $('.load7:lt(' + z + ')').show();
    $('.load8:lt(' + z + ')').show();
    $('.load9:lt(' + z + ')').show();
    $('.load10:lt(' + z + ')').show();
    $('.bnn1').click(function() {
        x = (x + 4 <= size_div) ? x + 4 : size_div;
        $('.load1:lt(' + x + ')').show("slow");
    });
    $('.bnn2').click(function() {
        x = (x + 4 <= size_div2) ? x + 4 : size_div2;
        $('.load2:lt(' + x + ')').show("slow");
    });
    $('.bnn3').click(function() {
        x = (x + 4 <= size_div3) ? x + 4 : size_div3;
        $('.load3:lt(' + x + ')').show("slow");
    });
    $('.bnn4').click(function() {
        x = (x + 4 <= size_div4) ? x + 4 : size_div4;
        $('.load4:lt(' + x + ')').show("slow");
    });
    $('.bnn5').click(function() {
        x = (x + 4 <= size_div5) ? x + 4 : size_div5;
        $('.load5:lt(' + x + ')').show("slow");
    });
    $('.bn1').click(function() {
        z = (z + 4 <= size_div6) ? z + 4 : size_div6;
        $('.load6:lt(' + z + ')').show("slow");
    });
    $('.bn2').click(function() {
        z = (z + 4 <= size_div7) ? z + 4 : size_div7;
        $('.load7:lt(' + z + ')').show("slow");
    });
    $('.bn3').click(function() {
        z = (z + 4 <= size_div8) ? z + 4 : size_div8;
        $('.load8:lt(' + z + ')').show("slow");
    });
    $('.bn4').click(function() {
        z = (z + 4 <= size_div9) ? z + 4 : size_div9;
        $('.load9:lt(' + z + ')').show("slow");
    });
    $('.bn5').click(function() {
        z = (z + 4 <= size_div10) ? z + 4 : size_div10;
        $('.load10:lt(' + z + ')').show("slow");
    });
});

/*====================== Swipper Multi Row Slider ==================================*/
$(document).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 6,
        slidesPerColumn: 2,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });
});

/*===================== Validator Form Modal Contact us ==============================*/
$(document).ready(function() { 
    $('#form-modal-contact').validator()
});
$(document).on("input", "#phone-number", function() {
    this.value = this.value.replace(/[^\d\+]/g,'');
});
/*===================== Button Reset Modal ===========================================*/
// $(document).ready(function(){
//     $('#btn-close-modal').on('click', function(e){
//         $('#myModal').modal('hide');
//     })
// });

/*=================== OwlCarousel Slider for Display 768 Table ======================*/
$(document).ready(function(){
    $('.slider-client-for-phone').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        autoPlay: 3000,
        responsive:{
            0:{
                items:2,
                dots: true,
            },
            400:{
                items:3,
                nav:false,
                dots: true,
            },
            600:{
                items:5,
                nav:false,
                dots: true,
            },
            1000:{
                items:6,
                nav:false,
                loop:false,
                dots: true,
            }
        }
    });

    $('.slider-client-for-phone').on('translate.owl.carousel', function(e){
        idx = e.item.index;
        $('.owl-item.big').removeClass('big');
        $('.owl-item.medium').removeClass('medium');
        $('.owl-item').eq(idx).addClass('big');
        $('.owl-item').eq(idx-1).addClass('medium');
        $('.owl-item').eq(idx+1).addClass('medium');
    });
}); 

/*======================= Mouse Enter for Portfolio Homepage =========================*/
$(document).ready(function(){ 
    $('.bg-content-portfolio').hover(function() { 
        $(this).find('.content-workflow').css('display', 'block'); 
    }, function() { 
        $(this).find('.content-workflow').css('display', 'none');
    });
});

/*====================== Slider for Portfolio Single Page ============================*/ 
$(document).ready(function(){
    $('.portfolio-slider-single').owlCarousel({
        margin:5,
        loop:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        navText: ["<img src='http://drife.devtuwaga.com/wp-content/themes/Drife/swiper/dist/img/left.png'>","<img src='http://drife.devtuwaga.com/wp-content/themes/Drife/swiper/dist/img/right.png'>"],
        nav:true,
        responsive:{
            0:{
                items:1,
                nav:false,
            },
            600:{
                items:2,
                nav:false,
            },
            1000:{
                items:3,
                nav:true,
                loop:false,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true
            }
        }
    });

    $('.portfolio-slider-single').on('translate.owl.carousel', function(e){
        idx = e.item.index;
        $('.owl-item.big').removeClass('big');
        $('.owl-item.medium').removeClass('medium');
        $('.owl-item').eq(idx).addClass('big');
        $('.owl-item').eq(idx-1).addClass('medium');
        $('.owl-item').eq(idx+1).addClass('medium');
    });
}); 

/*=======================Add Menu POPUP Modal in Wp-Menu==============================*/
// $(document).ready(function() {
//     $('#menu-item-387').find('a').attr('data-toggle', 'modal');
//     $('#menu-item-387').find('a').attr('data-target', '#myModal');
// }); 

/*=======================End Modal POPUP Modal in Wp-Menu=============================*/ 

// Show modal
$('#menu-item-387 a, .menu-item-387 a, #btn-show-modal').click(function(){
    $('.row_popcontactus').fadeIn();
});
// Button close modal
$('#btn-close-modal').click(function(){
    $('.row_popcontactus').fadeOut();
});
// Close modal outside box
$(document).click(function (e) {
    if ($(e.target).is('.row_popcontactus')) {
        $('.row_popcontactus').fadeOut();
    }
});

/*=======================Add Menu POPUP Modal in Wp-Menu==============================*/

/*====================Swiper for Single Page Service =================================*/
$(document).ready(function() {
    $('.slider-service-client').owlCarousel({
        loop:false,
        margin:10,
        navText: ["<img src='http://drife.devtuwaga.com/wp-content/themes/Drife/swiper/dist/img/left.png'>","<img src='http://drife.devtuwaga.com/wp-content/themes/Drife/swiper/dist/img/right.png'>"],
        responsive:{
            0:{
                items:2,
                nav:false,
                dots: true
            },
            425:{
                items:4,
                nav:false,
                dots: true
            },
            700:{
                items:5,
                nav:false,
                dots: true
            },
            1000:{
                items:6,
                nav:true
            }
        }
    })
});
/*====================Swiper for Single Page Service =================================*/

/*=============================== Start Validasi Form=================================*/
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function submit_formwishlist(){
  $('.notiftxt').empty();

  var email = $('input[name="email"]').val();
  var attribute1 = $('input[name="attribute1"]').val();

  if(attribute1 == '' && email == ''){
    $('.notif_error').html("*Please enter your name.");
    $('.notif_error2').html("*Please enter your email.");
  }else if(attribute1 == ''){
    $('.notif_error').html("*Please enter your name.");
  }else if(email == ''){
    $('.notif_error2').html("*Please enter your email.");
  }else if(!validateEmail(email)){
    $('.notif_error2').html("*Email address seems invalid.");
  }else{
      $.ajax({
            url : ajaxscript.ajaxurl,
            data: {
                'action':'subscribe_newsletter',
                'email':email,
                'attribute1':attribute1
            },
            success:function(return_value) {
             // console.log(return_value);
                 $( ".notif_success" ).html( "Success! check your email." );
                 $('.name-newsletters').val("");
                 $('.email-newsletters').val("");

              setTimeout(function(){
                  // location.reload();
                  $('.notiftxt').empty();
              }, 5000);

            },
        });
  }
};
/*=============================== End Validasi Form ==================================*/
/*=============== Start Smooth Scrolling When Clicking An Anchor Link ================*/ 
$(document).ready(function() { 
    $('#services-section').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });
});
/*=============== Start Smooth Scrolling When Clicking An Anchor Link ===============*/ 