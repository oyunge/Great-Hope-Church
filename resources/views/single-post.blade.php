@extends('layouts.client')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client.homePage')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Post</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-100">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-thumbnail mb-30">
                                <img src="{{ asset('storage/posts/' . $post->image) }}" alt="">
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">{{$post->title}}</h2>
                                <p>{{$post->message}}</p>
                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.” </h6>
                                        <h6>{{$post->staff_reporter}} -<span> Staff reporter</span></h6>
                                    </div>
                                </blockquote>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            </div>
                        </div>

                        <!-- Post Tags & Share -->
                        <div class="post-tags-share d-flex justify-content-between align-items-center">
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li>Tags:</li>
                                <li><a href="#">Pray,</a></li>
                                <li><a href="#">Hope,</a></li>
                                <li><a href="#">Church</a></li>
                            </ol>
                            <!-- Share -->
                            <div class="post-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h4 class="headline">2 Comments</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/28.jpg" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <span class="comment-date">March 15, 2018</span>
                                            <h5>Lena Headey</h5>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                                            <a href="#">Like</a>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <div class="comment-wrapper d-flex">
                                                <!-- Comment Meta -->
                                                <div class="comment-author">
                                                    <img src="img/bg-img/29.jpg" alt="">
                                                </div>
                                                <!-- Comment Content -->
                                                <div class="comment-content">
                                                    <span class="comment-date">March 15, 2018</span>
                                                    <h5>John Henrry</h5>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
                                                    <a href="#">Like</a>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/30.jpg" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <span class="comment-date">March 17, 2018</span>
                                            <h5>Garry Marix</h5>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
                                            <a href="#">Like</a>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <!-- Leave A Comment -->
                        <div class="leave-comment-area mt-50 clearfix">
                            <div class="comment-form">
                                <h4 class="headline">Leave A Comment</h4>
                                <!-- Contact Form Area -->
                                <div class="contact-form-area">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="contact-name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="contact-number" placeholder="Website">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn crose-btn mt-15">Post Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" placeholder="Search Here">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ol class="crose-catagories">
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Religion</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Hope</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Donate</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Church</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Event</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Children</a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Recent News</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Weekly meeting in companies Think Room</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Six important methods to keep servers safe</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>New management method which rocks</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Seven ways to get ready for a business contract</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Archives</h6>
                            </div>
                            <ol class="crose-archives">
                                <li><a href="#">July 2015</a></li>
                                <li><a href="#">March 2015</a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>popular tags</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">Sermons</a></li>
                                <li><a href="#">Cross</a></li>
                                <li><a href="#">Pray</a></li>
                                <li><a href="#">Holly Cross</a></li>
                                <li><a href="#">Event</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

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