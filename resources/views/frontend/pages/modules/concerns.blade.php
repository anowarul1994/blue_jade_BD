@extends('frontend.layouts.master')

@section('page_title', 'Product Page')

@section('content')
        
   <section class="py-5 bg-body-secondary">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="product-header">our product</h1>
            </div>
         </div>
        
          <div class="row justify-content-center">
            <div class="col-sm-6 col-md-12 col-lg-12">
               <div class="project-nav">
                  <ul class="filter_btn">
                      <li  class="active" data-target="all">All</li>
                      <li  data-target="car">Car</li>
                      <li  data-target="chair">Chair</li>
                      <li  data-target="shirt">Shirt</li>
                      <li  data-target="phone">Phone</li>
                  </ul>
              </div>
            </div>
          </div>
              <!-- img section -->
                <!-- car filter -->
      
            <div class="row parent_div">
               <div class="col-md-4 col-lg-3 myImg" data-id="car">
                  <div class="product-card">
                     <img src="{{ asset('/assets/image/product/') }}/car1.png" alt="">
                  </div>
               </div>
               <div class="col-md-4 col-lg-3"data-id="car" >
                  <div class="product-card">
                     <img src="{{ asset('/assets/image/product/') }}/car2.png" alt="">
                  </div>
               </div>
               <div class="col-md-4 col-lg-3"data-id="car" >
                  <div class="product-card">
                     <img src="{{ asset('/assets/image/product/') }}/ch3.png" alt="">
                  </div>
               </div>
               <div class="col-md-4 col-lg-3"data-id="car" >
                  <div class="product-card">
                     <img src="{{ asset('/assets/image/product/') }}/car4.png" alt="">
                  </div>
               </div>
               <!-- chair filter -->
               <div class="col-md-4 col-lg-3" data-id="chair">
                  <div class="product-card">
                     <img src="{{ asset('/assets/image/product/') }}/ch1.png" alt="">
                  </div>
               </div>
               <div class="col-md-4 col-lg-3" data-id="chair" >
                  <div class="product-card">
                     <img src="{{ asset('/assets/image/product/') }}/ch2.png" alt="">
                  </div>
               </div>
              
         </div>
      </div>    
   </section>

    

@endsection