@extends('frontend.layouts.master')
@section('page_title', 'About')

@section('banner')
    @include('frontend.includes.single_banner')
@endsection

@section('content')    
<div class="about-section">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
        
                        <div class="about-img-section">
                            <img src="{{ asset('frontend/assets/image/about/') }}/about-img.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-info-section">
                            <span>About</span>
                            <h2>SADMA GROUP</h2>
                            <p>Sadma Group is one of the leading integrated garments manufacturing company in Bangladesh. It started in 2002, as a small manufacturing for Knitted Apparels. After two and half decades, today Sadma Fashion has diversified their activates into different textile sectors like knitting, dyeing, embroidery & garments. We are working with the latest, modern and computerized equipment of the world, highly efficient operational and production system with strong product R&D capabilities.
                            </p>
                            <div class="tab-section">
                                <!---practice purpus-->
                                <ul class="nav nav-tabs text-center" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">VISION</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">MISION</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active about-active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <p>VISION===Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ipsam necessitatibus dicta dolores nulla voluptatem accusamus? Eum autem natus possimus!</p>
                                        </div>
                                        <div class="tab-pane about-active fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <p>MISION===Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti ipsam necessitatibus dicta dolores nulla voluptatem accusamus? Eum autem natus possimus!</p>
                                        </div>
                                    </div>
            <!---practice purpus-->
                            </div>
        
                        </div>
                    </div>
                </div>
        </div>
    </div>>

    <div class="container">
        <div class="about-bottom-section ">
            <div class="row about-row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="about-contact my-3">
                        <span> 27 August, 2001 </span>
                        <h6>SADMA FASHION WEAR LTD.</h6>
                        <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same</p>
                    </div>
                    <div class="about-contact my-3">
                        <span>27 August, 2001</span>
                        <h6>SADMA FASHION WEAR LTD .</h6>
                        <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same</p>
                    </div>
                    <div class="about-contact my-3">
                        <span>27 August, 2001</span>
                        <h6>SADMA FASHION WEAR LTD .</h6>
                        <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same</p>
                    </div>
                </div>
                <div class="col-lg-2 img-hide col-sm-12">
                    <div class="about-middle-img text-center">
                        <div class="about-top-img
                        ">
                            <img src="{{ asset('frontend/assets/image/about/') }}/p4.png" alt="">
                        </div>
                        <div class="about-border">

                        </div>
                        <div class="about-top-img">
                            <img src="{{ asset('frontend/assets/image/about/') }}/p4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="about-contacts my-3">
                        <span>27 August, 2001</span>
                        <h6>SADMA FASHION WEAR LTD .</h6>
                        <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same</p>
                    </div>
                    <div class="about-contacts my-3">
                        <span>27 August, 2001</span>
                        <h6>SADMA FASHION WEAR LTD .</h6>
                        <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-3">
        <div class="about-icon-section">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card icon-devug">
                        <div class="card-body d-flex float-left">
                            <div class="about-icon">
                                <span><i class="fa-solid fa-globe"></i></span>
                            </div>
                            <div class="about-icon-content">
                                <h6>EXCELLENT</h6>
                                <h6>CERTIFICATIONS</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card icon-devug">
                        <div class="card-body d-flex">
                            <div class="about-icon">
                                <span><i class="fa-solid fa-certificate"></i></span>
                            </div>
                            <div class="about-icon-content float-right">
                                <h6>DISTRIBUTED</h6>
                                <h6>WORLDWIDE</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card icon-devug">
                        <div class="card-body d-flex">
                            <div class="about-icon">
                                <span><i class="fa-solid fa-globe"></i></span>
                            </div>
                            <div class="about-icon-content">
                                <h6>DEDICATED</h6>
                                <h6>TO PERFECTION
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="about-profile-section">
            <div class="row">
                @foreach ($allAbout as $row )
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="about-member-details">
                            <div class="member-image-profile">
                                <img src="{{ asset('/about/img/'.$row->img) }}" alt="">
                            </div>
                            <div class="about-details-content">
                                <div class="member-data-content ">
                                    <span>{{ $row->title }}</span>
                                    <h3>{{$row->name}}</h3>
                            </div>
                            <div class="member-email-content text-center">
                                <a href="mailto:sharifhossaion57@gmail.com"> <span><i class="fa-solid fa-envelope"></i></span> {{ $row->email }}</a>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="about-logo">
            <div class="row slider-logo">
                @foreach ($allAbout as $logo)
                    <div class="col-lg-3 col-md-4 col-sm-6 m-2">
                        <div class="about-logo-img">
                            <img style="width:100%; height:250px;" src="{{ asset('/about/logo/'.$logo->logo) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection