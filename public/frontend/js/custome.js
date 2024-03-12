$(function() {
    //Simple filter controls
    $('.simplefilter li').click(function() {
        $('.simplefilter li').removeClass('active');
        $(this).addClass('active');
    });
    //Multifilter controls
    $('.multifilter li').click(function() {
        $(this).toggleClass('active');
    });
    //Shuffle control
    $('.shuffle-btn').click(function() {
        $('.sort-btn').removeClass('active');
    });
    //Sort controls
    $('.sort-btn').click(function() {
        $('.sort-btn').removeClass('active');
        $(this).addClass('active');
    });
    
  
    new WOW().init();
});





//$(function() {
//    $(document).on('mouseenter.collapse', '[data-toggle=collapse]', function(e) {
//        var $this = $(this),
//            href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')
//            ,
//            option = $(target).hasClass('in') ? 'hide' : "show";
//            $('.panel-collapse').not(target).collapse("hide");
//            $(target).collapse(option);
//    })
//});




//jQuery(function ($) {
//    $('.servics-nav li').hover(function () {
//        $(this).find('ul').stop(true, true).slideToggle()
//    }).find('ul').hide()
//});
//

$(document).ready(function(){
	// this is for back to top
		$('.bc2top').click(function() {
			$('html, body').animate({
				scrollTop:0
			}, 500);
        });
});
$(window).scroll(function() {
		$scrolling = $(this).scrollTop();
		if($scrolling > 150){
			$('.bc2top').fadeIn(1000);
		}
		else{
			$('.bc2top').fadeOut(1000);
		}
        
    });



//slick footer part slider
$('.flag-slider').slick({
  dots: false,
  infinite: true,
  speed: 1000,
	arrows:false,
  slidesToShow: 4,
    slidesToScroll: 1,
	autoplay:true,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});








