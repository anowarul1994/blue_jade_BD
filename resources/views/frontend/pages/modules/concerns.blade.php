@extends('frontend.layouts.master')

@section('page_title', 'Product')

@section('content')
     
<section class="products" >
     <h1>Our Products</h1>
     <div class="container">
         <div class="all-products">
             <div class="product">
                 <img src="{{ asset('/assets/image/product/') }}/i-phone.jpeg"/>
                 <div class="product-info">
                     <h4 class="product-title">I-Phone</h4>
                     <p class="product-price"><span>$</span>100</p>
                     <a class="product-btn" href="#">Buy Now</a>
                 </div>
             </div>
     
             <div class="product">
                 <img src="{{ asset('/assets/image/product/') }}/bike.jpg">
                 <div class="product-info">
                     <h4 class="product-title">Bike</h4>
                     <p class="product-price"><span>$</span>100</p>
                     <a class="product-btn" href="#">Buy Now</a>
                 </div>
             </div>
     
             <div class="product">
                 <img src="{{ asset('/assets/image/product/') }}/cycle.jpg">
                 <div class="product-info">
                     <h4 class="product-title">Cycle</h4>
                     <p class="product-price"><span>$</span>100</p>
                     <a class="product-btn" href="#">Buy Now</a>
                 </div>
             </div>
     
             <div class="product">
                 <img src="{{ asset('/assets/image/product/') }}/Bag.jpg">
                 <div class="product-info">
                     <h4 class="product-title">Bag</h4>
                     <p class="product-price"><span>$</span>100</p>
                     <a class="product-btn" href="#">Buy Now</a>
                 </div>
             </div>
             <div class="product">
                 <img src="{{ asset('/assets/image/product/') }}/i-phone.jpeg"/>
                 <div class="product-info">
                     <h4 class="product-title">I-Phone</h4>
                     <p class="product-price"><span>$</span>100</p>
                     <a class="product-btn" href="#">Buy Now</a>
                 </div>
             </div>
     
             <div class="product">
                 <img src="{{ asset('/assets/image/product/') }}/bike.jpg">
                 <div class="product-info">
                     <h4 class="product-title">Bike</h4>
                     <p class="product-price"><span>$</span>100</p>
                     <a class="product-btn" href="#">Buy Now</a>
                 </div>
             </div>
     
             <div class="product">
                 <img src="{{ asset('/assets/image/product/') }}/cycle.jpg">
                 <div class="product-info">
                     <h4 class="product-title">Cycle</h4>
                     <p class="product-price"><span>$</span>100</p>
                     <a class="product-btn" href="#">Buy Now</a>
                 </div>
             </div>
     
             <div class="product">
                 <img src="{{ asset('/assets/image/product/') }}/Bag.jpg">
                 <div class="product-info">
                     <h4 class="product-title">Bag</h4>
                     <p class="product-price"><span>$</span>100</p>
                     <a class="product-btn" href="#">Buy Now</a>
                 </div>
             </div>
             
     
         </div>
     </div>
     
    </section>
@endsection