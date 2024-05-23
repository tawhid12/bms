//Hero Slider
$('.hero-slider').slick({
    autoplay: true,
    infinite: true,
    arrows: true,
    prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'fa fa-angle-left\'></i></button>',
    nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'fa fa-angle-right\'></i></button>',
    dots: false,
    autoplaySpeed: 7000,
    pauseOnFocus: false,
    pauseOnHover: false,
    customPaging: function (slider, i) {
      var icon = $(slider.$slides[i]).data('icon');
      var text = $(slider.$slides[i]).data('text');
      return '<a><i class="' + icon + '"></i><span>' + text + '</span></a>';
    },
    responsive: [{
      breakpoint: 576,
      settings: {
        arrows: false
      }
    }]
  });
  $('.hero-slider').slickAnimation();

  