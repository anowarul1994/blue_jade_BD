@extends('frontend.layouts.master')

@section('page_title', 'Product')

@section('content')
     
   <section class="card-design">
    <div class="container">
        <h1>Our Product</h1>
     <ul class="nav">
        <li class="active">All</li>
        <li>bag</li>
        <li>bike</li>
        <li>phone</li>
        <li>cycle</li>
     </ul>
        <div class="row">
            <div class="col-md-3">
                 <div class="products">
                    <img src="{{ asset('/assets/image/product/') }}/Bag.jpg" data-filter="bag"/>
                    
                </div>
            </div>
                <!-- bag -->
            <div class="col-md-3">
                <div class="products">
                    <!-- bike -->
                        <img src="{{ asset('/assets/image/product/') }}/bike.jpg" data-filter="bike"/>
                </div>
           </div>
            <div class="col-md-3">     
               <div class="products">
                    <!-- cycle -->
                    <img src="{{ asset('/assets/image/product/') }}/i-phone.jpeg" data-filter="phone"/>
               </div>
            </div>
            <div class="col-md-3">
               <div class="products">
                    <!-- Phone -->
                    <img src="{{ asset('/assets/image/product/') }}/cycle.jpg" data-filter="cycle"/>
               </div>
            </div>
    </div>
   </section>
@endsection