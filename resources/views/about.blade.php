@extends('layouts.client')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client.homePage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area about-page section-padding-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    @foreach ($abouts as $about)
                    <div class="about-content">
                            
                     <h2>{{$about->title}}</h2> 
                        <p>{{$about->message}}</p> -
                        <div class="opening-hours-location mt-30 d-flex align-items-center">
                            <!-- Opening Hours -->
                            <div class="opening-hours">
                                <h6><i class="fa fa-clock-o"></i> Opening Hours</h6>
                                <p>Mon - Fri at 08:00 - 21:00 <br>Sunday at 09:00 - 18:00</p>
                            </div>
                            <!-- Location -->
                            <div class="location">
                                <h6><i class="fa fa-map-marker"></i> Location</h6>
                                <p>Moi Avenue Nairobi City, Kenya</p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail">
                        {{-- <img src="{{asset('storage/about/' . $about->image)}}" alt=""> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <h6>A Place For You</h6>
                        <h2>Find a place to connect and grow through a small group, class, or regular gathering.</h2>
                        <a href="#" class="btn crose-btn btn-2">Become A Member</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Why Choose Us Area Start ##### -->
    <div class="why-choose-us bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Why Choose Us</h2>
                        <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="img/core-img/why1.png" alt="">
                        <h4>Committed Cohorts</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="img/core-img/why2.png" alt="">
                        <h4>Trained Facilitators</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="img/core-img/why3.png" alt="">
                        <h4>Access to Leading Voices</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Why Choose Us Area End ##### -->

    <!-- ##### Team Members Area Start ##### -->
    <div class="team-members-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Staff members</h2>
                        <p>A brief overview of what you can expect at our worship experiences.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Team Members Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    @foreach ($staffs as $staff)
                        
                   
                    <div class="single-team-members text-center mb-100">
                        <div class="team-thumb" style="background-image: url({{asset('storage/staffs/' . $staff->image) }});">
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <h6>{{$staff->name}}</h6>
                        <span>{{$staff->position}}</span>
                    </div>
                    @endforeach
                </div>

               

               

               
            </div>
        </div>
    </div>
    <!-- ##### Team Members Area End ##### -->

    <!-- ##### Subscribe Area Start ##### -->
    <section class="subscribe-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Subscribe Text -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-text">
                        <h3>Subscribe To Our Newsletter</h3>
                        <h6>Subcribe Us And Tell Us About Your Story</h6>
                    </div>
                </div>
                <!-- Subscribe Form -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-form text-right">
                        <form action="#">
                            <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                            <button type="submit" class="btn crose-btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Subscribe Area End ##### -->

    @endsection