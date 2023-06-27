<section class="home-hero-area">
     <div class="bg-slider">
         <div class="slider-wrapper">
            @foreach($sliders as $slider)
                <div class="slide dark-layout">
                    <img src="{{asset('image/banner_img/'.$slider->photo)}}" alt="Banner">

                    <div class="text-content">
                        <h2 class="title"> {{$slider->title}}</h2>
                        <p> {{ $slider->description }} </p>
                        <button class="read-btn">
                            <a href="">Contact Us </a>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            @endforeach
         </div>
     </div>
 </section>