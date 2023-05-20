@extends('frontend.layouts.master')

@section('page_title', 'Product')

@section('content')
     

    
<div class="container bt-5">
        <h1 class="header">our product</h1>
    <div class="nav">
        <ul class="filter_btn">
            <li  class="active" data-target="all">All</li>
            <li  data-target="car">Car</li>
            <li  data-target="chair">Chair</li>
            <li  data-target="shirt">Shirt</li>
            <li  data-target="phone">Phone</li>
        </ul>
    </div>
        <!-- img section -->
          <!-- car filter -->

      <div class="row parent_div">
         <div class="col-md-3 myImg" data-id="car">
            <img src="{{ asset('/assets/image/product/') }}/car1.png" alt="">
         </div>
         <div class="col-md-3"data-id="car" >
            <img src="{{ asset('/assets/image/product/') }}/car2.png" alt="">
         </div>
         <div class="col-md-3"data-id="car" >
            <img src="{{ asset('/assets/image/product/') }}/ch3.png" alt="">
         </div>
         <div class="col-md-3"data-id="car" >
            <img src="{{ asset('/assets/image/product/') }}/car4.png" alt="">
         </div>
         <!-- chair filter -->
         <div class="col-md-3" data-id="chair">
            <img src="{{ asset('/assets/image/product/') }}/ch1.png" alt="">
         </div>
         <div class="col-md-3"data-id="chair" >
            <img src="{{ asset('/assets/image/product/') }}/ch2.png" alt="">
         </div>
         <div class="col-md-3"data-id="chair" >
            <img src="{{ asset('/assets/image/product/') }}/ch3.png" alt="">
         </div>
         <div class="col-md-3"data-id="chair" >
            <img src="{{ asset('/assets/image/product/') }}/ch4.png" alt="">
         </div>
         <!-- shirt filter -->
         <div class="col-md-3" data-id="shirt">
            <img src="{{ asset('/assets/image/product/') }}/sh1.png" alt="">
         </div>
         <div class="col-md-3"data-id="shirt" >
            <img src="{{ asset('/assets/image/product/') }}/sh2.png" alt="">
         </div>
         <div class="col-md-3"data-id="shirt" >
            <img src="{{ asset('/assets/image/product/') }}/sh3.png" alt="">
         </div>
         <div class="col-md-3"data-id="shirt" >
            <img src="{{ asset('/assets/image/product/') }}/sh4.png" alt="">
         </div>
         <!-- phone filter -->
         <div class="col-md-3" data-id="phone">
            <img src="{{ asset('/assets/image/product/') }}/p1.png" alt="">
         </div>
         <div class="col-md-3"data-id="phone" >
            <img src="{{ asset('/assets/image/product/') }}/p2.png" alt="">
         </div>
         <div class="col-md-3"data-id="phone" >
            <img src="{{ asset('/assets/image/product/') }}/p3.png" alt="">
         </div>
         <div class="col-md-3"data-id="phone" >
            <img src="{{ asset('/assets/image/product/') }}/p4.png" alt="">
         </div>
   </div>
</div>    
@endsection