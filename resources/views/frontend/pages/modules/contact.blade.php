@extends('frontend.layouts.master')

@section('page_title', 'Contact')

@section('banner')
    @include('frontend.includes.single_banner')
@endsection

@section('content')
 <div class="contact-form-section py-5">
     <div class="container">
          <div class="row">
               <div class="col-md-7">
                    <div class="form-section">
                         <h4>Get In Tuch</h4>
                         <form action="{{ url('/contact/store') }}" method="post">
                              @csrf
                              <div class="row">
                                   <div class="col-md-6 form-input-section">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                   </div>
                                   <div class="col-md-6 form-input-section">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6 form-input-section">
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                                   </div>
                                   <div class="col-md-6 form-input-section">
                                        <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                                   </div>
                                   <div class="col-md-12 form-input-section">
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                   </div>
                              </div>
                              <textarea name="message" id="" cols="5" rows="8" class="form-control" placeholder="Enter Message"></textarea>
                              <button type="submit" class="my-4 form-btn-type font-control btn btn-block btn-primary" style="width:100%" >Submit Now</button>
                         </form>
                    </div>
               </div>
               <div class="col-md-5">
                    <div class="contact-right-section">
                         <h4>Contact Info</h4>
                         <div class="contact-details d-flex">
                              <div class="contact-icon mr-2">
                                   <a href="#"><i class="fa-solid fa-envelope"></i></a>
                              </div>
                              <div class="contact-content">
                                   <span>Email Us</span> <br>
                                   @foreach ($allContactInfo as $row)
                                   <a href="mailto:{{ $row->email }}">{{  $row->email }}</a>
                                   @endforeach
                              </div>
                         </div>
                         <div class="contact-details d-flex">
                              <div class="contact-icon mr-2">
                                   <a href="#"><i class="fa-solid fa-phone"></i></a>
                              </div>
                              <div class="contact-content">
                                   <span>Call Us</span> <br>
                                   @foreach ($allContactInfo as $row)
                                   <a href="tel:{{ $row->phone }}">+{{ $row->phone }}</a>
                                   @endforeach
                              </div>
                         </div>
                         <div class="contact-details d-flex">
                              <div class="contact-icon mr-2">
                                   <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                              </div>
                              <div class="contact-content">
                                   <span>Location - Head Office</span> <br>
                                   @foreach ($allContactInfo as $row)
                                   <p>{{ $row->location }}</p>  
                                   @endforeach
                              </div>
                         </div>
                         <div class="contact-details">
                              <div class="contact-content">
                                   <span class="lead">Location-Factory</span>
                                   @foreach ($allContactInfo as $row)
                                   <p>{{ $row->location }}</p>  
                                   @endforeach
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
     
@endsection