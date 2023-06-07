@extends('frontend.layouts.master')

@section('page_title', 'Contact')

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
                                   <a href="mailto:sharifhossaion51@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                              </div>
                              <div class="contact-content">
                                   <span>Email Us</span> <br>
                                   <a href="mailto:sharifhossaion51@gmail.com">sharifhossaion51@gmail.com</a>
                              </div>
                         </div>
                         <div class="contact-details d-flex">
                              <div class="contact-icon mr-2">
                                   <a href="mailto:sharifhossaion51@gmail.com"><i class="fa-solid fa-phone"></i></a>
                              </div>
                              <div class="contact-content">
                                   <span>Call Us</span> <br>
                                   <a href="tel:01789979216">+8801789979216</a>
                              </div>
                         </div>
                         <div class="contact-details d-flex">
                              <div class="contact-icon mr-2">
                                   <a href="mailto:sharifhossaion51@gmail.com"><i class="fa-solid fa-location-dot"></i></a>
                              </div>
                              <div class="contact-content">
                                   <span>Location - Head Office</span> <br>
                                   <p>HOUSE 20, ROAD 1/A SECTOR 9, DHAKA 1230.</p>
                              </div>
                         </div>
                         <div class="contact-details">
                              <div class="contact-content">
                                   <span class="lead">Location-Factory</span>
                                   <p>MOUCHAK (1751), KALIAKAIR. GAZIPUR, DHAKA, BANGLADESH</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
     
@endsection