<!-- @extends('frontend.layouts.master')

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
                    @foreach ($allColor as $color)
                    <li  data-target="{{$color->data_target}}">{{ $color->name }}</li>
                    @endforeach
                  </ul>
              </div>
            </div>
          </div>
              <!-- img section -->
                <!-- car filter -->
      
            <div class="row parent_div">              
               <div class="col-md-4 col-lg-3 d-none"data-id="car" >
                  <div class="product-card">
                     <img src="{{ asset('frontend/assets/image/product/') }}/car2.png" alt="">
                  </div>
               </div>
               @foreach ($allSize as $row)
               <div class="col-md-4 col-lg-3" data-id="{{ $row->color->data_target }}" >
                  <div class="product-card">
                     <img src="{{ asset('/size/'.$row->image) }}" alt="">
                  </div>
               </div>
               @endforeach
         </div>
      </div>    
   </section>
    

@endsection -->