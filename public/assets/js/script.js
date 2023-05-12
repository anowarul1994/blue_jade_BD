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