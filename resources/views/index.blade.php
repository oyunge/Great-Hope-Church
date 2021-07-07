@extends('layouts.client')

@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area hero-post-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center"
            style="background-image: url(img/bg-img/1.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Building The Hope</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Learn about our mission, our beliefs, and the
                                hope we have in Jesus.</p>
                            <a href="#" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center"
            style="background-image: url(img/bg-img/2.jpg);">
            <!-- Post Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Making Jesus Known</h2>
                            <p data-animation="fadeInUp" data-delay="300ms">Learn about our mission, our beliefs, and the
                                hope we have in Jesus.</p>
                            <a href="#" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Welcome To Church</h2>
                        <p>A church isn't a building—it's the people. We meet in locations around the United States and
                            globally at Life.Church Online. No matter where you join us.</p>
                    </div>
                </div>
            </div>
            <div class="introduction">
                <div class="row about-content justify-content-center ">
                    <!-- Single About Us Content -->
                    <div class="col-12 col-md-6 col-lg-4">
                        @foreach ($introduction as $intro)

                        


                            <div class="about-us-content mb-100">
                                <img src="{{ asset('storage/introduction/' . $intro->image) }}" alt="">
                                <div class="about-text">
                                    <h4>{{ $intro->title }}</h4>
                                    <p>{{ $intro->message }}</p>
                                    <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                    </div>
                    @endforeach
                    

                   
                </div>
            </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area section-padding-100 bg-img bg-overlay"
        style="background-image: url(img/bg-img/6.jpg)">
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

    <!-- ##### Latest Sermons Area Start ##### -->
    <section class="latest-sermons-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Latest Sermons</h2>
                        <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that
                            students face each day</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Latest Sermons -->
                <div class="col-12 col-md-6 col-lg-4">
                    @foreach ($sermons as $sermon)
                        
                    <div class="single-latest-sermons mb-100">
                        <div class="sermons-thumbnail">
                            <img src="{{ asset('storage/sermons/' . $sermon->image) }}" alt="">
                            <!-- Date -->
                            <div class="sermons-date">
                                <h6><span>10</span>MAR</h6>
                            </div>
                        </div>
                        <div class="sermons-content">
                            <div class="sermons-cata">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Video"><i
                                        class="fa fa-video-camera" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Audio"><i
                                        class="fa fa-headphones" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Docs"><i class="fa fa-file"
                                        aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Download"><i
                                        class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            </div>
                            <h4>{{$sermon->title}}</h4>
                            <div class="sermons-meta-data">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>{{$sermon->sermon_from}}</span></p>
                                <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>{{$sermon->category}}</span></p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> March 10 on <span>9:00 am - 11:00 am</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

               
            </div>
        </div>
    </section>
    <!-- ##### Latest Sermons Area End ##### -->

    <!-- ##### Upcoming Events Area Start ##### -->
    <section class="upcoming-events-area section-padding-0-100">
        <!-- Upcoming Events Heading Area -->
        <div class="upcoming-events-heading bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/1.jpg);">
            <div class="container">
                <div class="row">
                    <!-- Section Heading -->
                    <div class="col-12">
                        <div class="section-heading text-left white">
                            <h2>Upcoming Events</h2>
                            <p>Be sure to visit our Upcoming Events page regularly to get infomartion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Events Slide -->
        <div class="upcoming-events-slides-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="upcoming-slides owl-carousel">

                            <div class="single-slide">
                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                    <!-- Thumbnail -->
                                    @foreach ($events as $event)
                                        
                                   
                                    <div class="upcoming-events-thumbnail">
                                        <img src="{{ asset('storage/events/' . $event->image) }}" alt="">
                                    </div>
                                    <!-- Content -->
                                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                                        <div class="events-text">
                                            <h4>{{$event->title}}</h4>
                                            <div class="events-meta">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$event->date}}</a>
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$event->time}}</a>
                                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$event->location}}</a>
                                            </div>
                                            <p>{{$event->message}}</p>
                                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                        <div class="find-out-more-btn">
                                            <a href="#" class="btn crose-btn btn-2">Find Out More</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>

                            <div class="single-slide">
                                <!-- Single Upcoming Events Area -->
                                <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                                    @foreach ($events as $event)

                                    <!-- Thumbnail -->
                                    <div class="upcoming-events-thumbnail">
                                        <img src="{{ asset('storage/events/' . $event->image) }}" alt="">
                                    </div>
                                    <!-- Content -->
                                    <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                                        <div class="events-text">
                                            <h4>{{$event->title}}</h4>
                                            <div class="events-meta">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$event->date}}</a>
                                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$event->time}}</a>
                                                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$event->location}}</a>
                                            </div>
                                            <p>{{$event->message}}</p>
                                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                        <div class="find-out-more-btn">
                                            <a href="#" class="btn crose-btn btn-2">Find Out More</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Upcoming Events Area End ##### -->
    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Latest News</h2>
                        <p>Latest information on religion, church, politics revolves around us</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        @foreach ($posts as $post)
                            
                       
                        <div class="post-thumbnail">
                            <img src="{{ asset('storage/posts/' . $post->image) }}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="{{route('client.post' ,$post->id)}}" class="post-title">
                                <h4>{{$post->title}}</h4>
                            </a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{$post->staff_reporter}}</a>
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{$post->date}}</a>
                            </div>
                            <p class="post-excerpt">{{$post->message}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

               
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

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
