@extends('layouts.app')
@section('title','Sharon Tech')
@section('content')

  <!-- Carousel -->
<section id="slider">
    <div id="myCarousel-one" class="carousel slide">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel-one" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel-one" data-slide-to="1"></li>       
        </ol>

        <div class="carousel-inner">

            <div class="item active"> 
                <div class="carousel-caption wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-text">
                                <h1 class="intro-lead-in animated bounceInLeft">Creative Digital</h1>
                                <h2 class="intro-heading animated bounceInRight">Agency</h2>
                                <p class="intro-paragraph animated bounceInRight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime <br>quam architecto quo inventore harum ex magni, dicta impedit.</p>
                            </div>
                            <a href="#services" class="page-scroll btn btn-xl slider-button animated bounceInUp">Layanan</a>
                        </div>
                    </div>
                </div>
                <img src="{{url('frontend/img/backgrounds/pexels-photo-2582931.jpeg')}}" alt="slider-image"/>                
            </div>

            <div class="item 2">
                <div class="carousel-caption wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-text">
                                <h1 class="intro-lead-in animated bounceInLeft">Creative Digital</h1>
                                <h2 class="intro-heading animated bounceInRight">Agency</h2>
                                <p class="intro-paragraph animated bounceInRight">Welcome to our private quarters on the web</p>
                            </div>
                            <a href="#services" class="page-scroll btn btn-xl slider-button animated bounceInUp">Layanan</a>
                        </div>
                    </div>
                </div>
                <img src="{{url('frontend/img/backgrounds/pexels-photo-2588757.jpg')}}" alt="slider-image"/>
            </div>
            
                <!-- Controls -->
                <a class="myCarousel-one-left" href="#myCarousel-one" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="myCarousel-one-right" href="#myCarousel-one" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h2 class="section-heading">Layanan</h2>
                {{-- <h3 class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3> --}}
            </div>
        </div>
        <div class="row text-center">
            <!-- First row services -->
            <div class="row first-services">
                <div class="col-sm-12 col-md-4 service">                      
                    <i class="ri ri-computer-line"></i> 
                    <h4 class="service-heading">Service Komputer</h4>
                    <p class="text-services">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-sm-12 col-md-4 service">
                    <i class="ri ri-macbook-line"></i>                                       
                    <h4 class="service-heading">Service Laptop</h4>
                    <p class="text-services">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-sm-12 col-md-4 service">
                    <i class="ri ri-window-line"></i>
                    <h4 class="service-heading">Install Windows</h4>
                    <p class="text-services">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
            <!-- Second row services -->
            <div class="row second-services">
                <div class="col-sm-12 col-md-4 service">
                    <i class="ri ri-plug-line"></i>
                    <h4 class="service-heading">Jasa Pasang Jaringan LAN</h4>
                    <p class="text-services">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                {{-- <div class="col-sm-12 col-md-4 service">
                    <i class="ri ri-plug-line"></i>
                    <h4 class="service-heading">Jasa Pasang Jaringan LAN</h4>
                    <p class="text-services">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div> --}}
                {{-- <div class="col-sm-12 col-md-4 service">
                    <i class="fa fa-heart"></i>
                    <h4 class="service-heading">Consulting</h4>
                    <p class="text-services">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div> --}}
            </div>
        </div>
</div>
</section>
<!-- Team Section -->
{{-- <section id="team">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
            </div>
        </div>
        <div id="myCarousel-two" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner team-wrapper">
                <div class="item active">
                    <!-- Team Member One -->
                    <div class="col-xs-12 col-sm-4 col-md-4 team-member">
                        <img src="{{url('frontend/img/team/david.png')}}" alt="team-member-img1">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 team-member-bio">
                        <h3 class="team-member-name">David Farland</h3>
                        <p class="text-muted-role">Full Stack Developer</p>
                        <p class="team-text-short">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <!-- Team Member Two -->
                    <div class="col-xs-12 col-sm-4 col-md-4 team-member">
                        <img src="{{url('frontend/img/team/jenna.png')}}" alt="team-member-img1">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 team-member-bio">
                        <h3 class="team-member-name">Jenna Carrera</h3>
                        <p class="text-muted-role">Lead Designer</p>
                        <p class="team-text-short">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <!-- Team Member Three -->
                    <div class="col-xs-12 col-sm-4 col-md-4 team-member">
                        <img src="{{url('frontend/img/team/nicole.png')}}" alt="team-member-img1">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 team-member-bio">
                        <h3 class="team-member-name">Nicole Johnson</h3>
                        <p class="text-muted-role">Lead Designer</p>
                        <p class="team-text-short">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <!-- Controls -->
            {{-- <a class="left carousel-control" href="#myCarousel-two" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel-two" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a> --}}
            <!-- Indicators -->
            {{-- <ol class="carousel-indicators">
                <li data-target="#myCarousel-two" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel-two" data-slide-to="1"></li>
                <li data-target="#myCarousel-two" data-slide-to="2"></li>
            </ol> --}}
        </div>
    </div>
</section>
<!-- Portfolio Section -->
{{-- <section id="portfolio">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</h3>
            </div>
            <div class="col-xs-12 col-md-12 portfolio-submenu text-center">
                <ul class="filter">
                    <li><a class="active" href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".wordpress">WordPress</a></li>
                    <li><a href="#" data-filter=".html">Web Design</a></li>
                    <li><a href="#" data-filter=".graphic">Graphic Design</a></li>
                    <li><a href="#" data-filter=".php">PHP</a></li>
                    <li><a href="#" data-filter=".bootstrap">Bootstrap</a></li>
                </ul>
                <!--/#portfolio-filter-->
            </div>
        </div>
    </div>
    <div class="portfolio-wrapper portfolio-container-fluid">
        <div class="portfolio-items">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 work-grid php graphic">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="hover-text">
                                <h4>Wine Label</h4>
                                <h5>Branding</h5>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="{{url('frontend/img/portfolio/card.jpg')}}" class="img-responsive" alt="portfolio-image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 work-grid php graphic">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="hover-text">
                                <h4>Business Card</h4>
                                <h5>Stationary</h5>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="{{url('frontend/img/portfolio/2.jpg')}}" class="img-responsive" alt="portfolio-image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 work-grid wordpress bootstrap">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <h5>Branding</h5>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="{{url('frontend/img/portfolio/3.jpg')}}" class="img-responsive" alt="portfolio-image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 work-grid wordpress html bootstrap graphic">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <h5>Branding</h5>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="{{url('frontend/img/portfolio/4.jpg')}}" class="img-responsive" alt="portfolio-image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 work-grid wordpress graphic">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="hover-text">
                                <h4>Web Design</h4>
                                <h5>Web Design</h5>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="{{url('frontend/img/portfolio/5.jpg')}}" class="img-responsive" alt="portfolio-image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 work-grid wordpress html graphic">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="hover-text">
                                <h4>Packageing and Label Design</h4>
                                <h5>Branding</h5>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="{{url('frontend/img/portfolio/6.jpg')}}" class="img-responsive" alt="portfolio-image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 work-grid wordpress graphic">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <h5>Branding</h5>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="{{url('frontend/img/portfolio/1.jpg')}}" class="img-responsive" alt="portfolio-image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 work-grid wordpress graphic">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="hover-text">
                                <h4>Book Cover</h4>
                                <h5>Branding</h5>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="{{url('frontend/img/portfolio/book.jpg')}}" class="img-responsive" alt="portfolio-image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Pricing Section -->
{{-- <section id="pricing">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h2 class="section-heading">Pricing</h2>
                <h3 class="section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="pricing text-center">
                <div class="pricing-top-box">
                    <h3 class="pricing-title">Basic</h3>
                    <h4 class="price">$39</h4>
                </div>
                <ul>
                    <li>Free Download</li>
                    <li>1000+ Softwear</li>
                    <li>Full Access</li>
                    <li>Free Update</li>
                    <li>Live Support</li>
                </ul>
                <a href="" class="btn btn-send">Sign Up</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="pricing text-center">
                <div class="pricing-top-box">
                    <h3 class="pricing-title">Medium</h3>
                    <h4 class="price">$89</h4>
                </div>
                <ul>
                    <li>Free Download</li>
                    <li>1000+ Softwear</li>
                    <li>Full Access</li>
                    <li>Free Update</li>
                    <li>Live Support</li>
                </ul>
                <a href="" class="btn btn-send">Sign Up</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="pricing text-center">
                <div class="pricing-top-box">
                    <h3 class="pricing-title">Premium</h3>
                    <h4 class="price">$119</h4>
                </div>
                <ul>
                    <li>Free Download</li>
                    <li>1000+ Softwear</li>
                    <li>Full Access</li>
                    <li>Free Update</li>
                    <li>Live Support</li>
                </ul>
                <a href="" class="btn btn-send">Sign Up</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- Client Section -->
{{-- <div id="clients">
    <div class="container-fluid-clients wrapper">
        <div id="myCarousel-three" class="carousel-clients slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/envato-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('/frontend/img/clients/geforce-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/uber-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/airbnb-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/bootstrap-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/tmobile-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/woo-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/valve-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/talenthouse-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/amazon-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/river-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <a href="#" class="logo-link"><img src="{{url('frontend/img/clients/audio-logo.png')}}" class="client-logo" alt="logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Testimonials Section-->
{{-- <section id="testimonials">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-sm-8 col-lg-12 text-left">
                <h2 class="section-heading">Testimonials</h2>
                <h3 class="section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div id="myCarousel-four" class="carousel-testimonials slide" data-ride="carousel">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-md-6 col-sm-6">
                            <div class="block-text">
                                <img src="{{url('frontend/img/team/1.png')}}" alt="team-member-img3" class="col-md-6 img-circle">
                                <h5 class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h5>
                                <p class="testimonial-author"><strong>Martin Santorini</strong>, CEO Talenthouse</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block-text">
                                <img src="{{url('frontend/img/team/2.png')}}" alt="team-member-img3" class="col-md-6 img-circle">
                                <h5 class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h5>
                                <p class="testimonial-author"><strong>Pierre Bronson</strong>, CEO Talenthouse</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-6 col-sm-6">
                            <div class="block-text">
                                <img src="{{url('frontend/img/team/4.png')}}" alt="team-member-img3" class="col-md-6 img-circle">
                                <h5 class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h5>
                                <p class="testimonial-author"><strong>Victor Vella</strong>, CEO Talenthouse</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block-text">
                                <img src="{{url('frontend/img/team/3.png')}}" alt="team-member-img3" class="col-md-6 img-circle">
                                <h5 class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h5>
                                <p class="testimonial-author"><strong>Lora Jones</strong>, CEO Talenthouse</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Contact Section -->
<section id="contact">
    <div class="container-fluid wrapper">
        <div class="row">
            <div class="col-lg-6 text-center">
                <h2 class="section-heading">Contact Form</h2>
                <h3 class="section-subheading">Jika Anda memerlukan bantuan silahkan kirim pesan , kami siap membantu Anda</h3>
            </div>
            <div class="col-md-6">
                            <div class="company-address col-sm-6 col-md-6">  
                                <address>
                                    Sharon Tech
                                    <br>
                                    <span id="map-input">
                            
                                Perumahan Bumi Pertiwi 1,<br>
                                Jalan Belitung Blok AH-18, Cilebut, Bogor, Jawa Barat</span>
                                    <br>
                                </address>
                            </div>
                            <div class="company-contact col-sm-6 col-md-6">
                                <address>Email Kami
                                    <br>
                                    <a href="mailto:sharonexcellilauder@gmail.com">sharonexcellilauder@gmail.com</a>
                                    <br>
                                    <a href="mailto:sharonexcellilauder@yahoo.com">sharonexcellilauder@yahoo.com</a>
                                </address>
                            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="" novalidate>
                    <div class="row">
                        <div class="col-md-6 contact-form-box">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        

                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                            
                        </div>
                        <div class="col-md-6">
                            <div id="map-canvas">
                                
                            </div>
                            </div>   
                            
                        <div class="clearfix"></div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection