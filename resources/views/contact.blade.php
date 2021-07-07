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
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Google Maps Start ##### -->
    <div class="map-area mt-30">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
    </div>
    <!-- ##### Google Maps End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content-area">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="contact-content contact-information">
                                    <h4>Contact</h4>
                                    <p>info.deercreative@gmail.com</p>
                                    <p>(+12) 345 - 678 - 1000</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="contact-content contact-information">
                                    <h4>Address</h4>
                                    <p>112/28 Baria, 5543 Aliquet St</p>
                                    <p>NewYork City, US</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="contact-content contact-information">
                                    <h4>Opening Hours</h4>
                                    <p>Mon-Sat: 10 Am to 6 Pm</p>
                                    <p>Sunday: Close</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-form section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Leave A Message</h2>
                        <p>Your email address will not be published. Required fields are marked.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="{{route('contact.post')}}" method="post"  enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-name">Full Name*:</label>
                                        <input type="text" class="form-control" name="full_name" id="contact-name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-email">Email*:</label>
                                        <input type="email" class="form-control" name="email" id="contact-email" placeholder="info.deercreative@gmail.com">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-number">Phone*:</label>
                                        <input type="text" class="form-control" name="phone" id="contact-number" placeholder="(+12) 123 456 7910">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Message*:</label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn crose-btn mt-15" value="">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->

    @endsection