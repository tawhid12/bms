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



//lightbox
$(document).ready(function(){

	/* $('a').nivoLightbox({
		 effect: 'fade',
		 keyboardNav: false,
	 });*/

});


//slider script part start
jQuery(document).ready(function() {
		//slider script part start			
		jQuery('.banner').show().revolution(
		{
			dottedOverlay:"none",
			delay:4000,
			startwidth:1170,
			startheight:700,
			hideThumbs:200,
			
			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,
			
			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:"preview4",
			
			touchenabled:"on",
			onHoverStop:"on",
			
			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,
									
									parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
									
			keyboardNavigation:"off",
			
			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,
					
			shadow:0,
			fullWidth:"off",
			fullScreen:"on",

			spinner:"spinner4",
			
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",
			
			autoHeight:"off",						
			forceFullWidth:"off",						
									
									
									
			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,						
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,
			
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ".header"	
		});//slider  script part end
    
    //Parallax  script part start
         $(window).stellar({
              // Set the global alignment offsets
              horizontalOffset: 0,
              verticalOffset: 100,

              // Refreshes parallax content on window load and resize
              responsive: true,             
           
        });//Parallax  script part end

	});	//ready




