$('.slider-wrapper').slick({
    dots: true,
    arrows:true, 
    infinite:true,
    speed:700,
    slidesToShow:1,
    adaptiveHeight:true,
    //autoplay: true,
    autoplaySpeed: 5000,
    drag:true,

    prevArrow:'<div class="slick-arrow prev"><span class="fa fa-angle-left"></span></div>',
    nextArrow:'<div class="slick-arrow next"><span class="fa fa-angle-right"></span></div>',

})


// logo slider
$('.slider-logo').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,

    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
  });