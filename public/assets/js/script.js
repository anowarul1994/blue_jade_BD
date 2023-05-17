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

$(window).on("load",function(){
  $("#preloader").fadeOut();
});


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
  
// product js start

var filter_btn = document.querySelector(".filter_btn").children;
var parent_div = document.querySelector(".parent_div").children;

for (var i = 0; i < filter_btn.length; i++){
    filter_btn[i].addEventListener("click", function () {
        for (let j = 0; j < filter_btn.length; j++){
            filter_btn[j].classList.remove("active");
        }
        this.classList.add("active");
        let target = this.getAttribute("data-target");
        for (let k = 0; i < parent_div.length; k++){
            parent_div[k].style.display = "none";
            if (target == parent_div[k].getAttribute("data-id")) {
                parent_div[k].style.display = "block";
            }
            if (target == "all") {
                parent_div[k].style.display = "block";
            }
        }
    })
}

// product js end

