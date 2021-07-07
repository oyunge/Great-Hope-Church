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
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
    <div class="events-area section-padding-100">
        <div class="container">
            <div class="row">

                <!-- Event Search Form -->
                <div class="col-12">
                    <div class="event-search-form mb-50">
                        <form action="#" method="get">
                            <div class="row align-items-end">
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="eventDate">Event In</label>
                                        <input type="date" class="form-control" id="eventDate" placeholder="Event In">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="eventLocation">Near</label>
                                        <input type="text" class="form-control" id="eventLocation" placeholder="Location">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="form-group mb-0">
                                        <label for="eventKeyword">Keyword</label>
                                        <input type="text" class="form-control" id="eventKeyword" placeholder="Typing Keyword">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 col-lg-2">
                                    <button type="submit" class="btn crose-btn">Find Events</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Events Title -->
                <div class="col-12">
                    <div class="events-title">
                        <h2>Events In March 2018</h2>
                    </div>
                </div>

                <div class="col-12">
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

                {{-- <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/bg-img/24.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4>A God-Entranced Vision of All Things</h4>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 01, 2018</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 11:00</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 11 Rose St, Brooklyn, NY</a>
                                </div>
                                <p>Join us for an informational webinar about the U.S.-Japan COIL Initiative. Learn about the initiative and receive general guidance.</p>
                                <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/bg-img/25.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4>Speaker Interviews with J.Doe</h4>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 01, 2018</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 11:00</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 11 Rose St, Brooklyn, NY</a>
                                </div>
                                <p>Join us for an informational webinar about the U.S.-Japan COIL Initiative. Learn about the initiative and receive general guidance.</p>
                                <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/bg-img/23.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4>Mexican priest murdered in his church</h4>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 01, 2018</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 11:00</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 11 Rose St, Brooklyn, NY</a>
                                </div>
                                <p>Join us for an informational webinar about the U.S.-Japan COIL Initiative. Learn about the initiative and receive general guidance.</p>
                                <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/bg-img/24.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4>A God-Entranced Vision of All Things</h4>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 01, 2018</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 - 11:00</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 11 Rose St, Brooklyn, NY</a>
                                </div>
                                <p>Join us for an informational webinar about the U.S.-Japan COIL Initiative. Learn about the initiative and receive general guidance.</p>
                                <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-12">
                    <div class="pagination-area mt-70">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Events Area End ##### -->

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