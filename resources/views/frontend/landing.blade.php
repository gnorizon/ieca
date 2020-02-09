@extends('layouts.simple')

@section('content')
        <!-- SLIDER SECTION START -->
        <div class="slider-1 pos-relative slider-overlay">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="{{ asset('media/frontend_imgs/slider/1.jpg') }}" alt="" title="#slider-direction-1" />
                    <img src="{{ asset('media/frontend_imgs/slider/1.jpg') }}" alt="" title="#slider-direction-2" />
                    <img src="{{ asset('media/frontend_imgs/slider/1.jpg') }}" alt="" title="#slider-direction-3" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>I.E.C.A</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">INTERNATIONAL ECONOMIC CITY ABUJA</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">An Iconic organised, private sector driven stimulus project
                                <br> for effective participation of Nigerian Businesses </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content text-left">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>I.E.C.A</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">FIRST OF ITS KIND</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">Providing large scale commercial, industrial, residential 
                                <br> and recreational facilities to aid economic and social activities </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-content text-right">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">Welcome to <span>I.E.C.A</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">INVESTMENT OPPORTUNITIES</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">A honeypot for investment opportunities for big and small investors
                                <br> with killer instinct to identify profitable ventures </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER SECTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- ABOUT I.E.C.A AREA START -->
            <div class="about-I.E.C.A-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="section-title mb-30">
                                <h3>SOME WORD </h3>
                                <h2>ABOUT I.E.C.A</h2>
                            </div>
                            <div class="about-I.E.C.A-info">
                                <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">I.E.C.A</span> Located at Gude District and situated in an area of land measuring 465.2 Hectares; 
                                    and laying strategically at a convergence point of major expressways and network of roads in Abuja City. Infact, it is about 15 kilometer 
                                    roadway to Nnamdi Azikwe International Airport and 25 kilometers to Aso Villa, presidential seat of power in Nigeria, taking your bearing 
                                    in a direct straight road through Shoprite departmental store, Apo District, Abuja.</p>

                                <p>International Economic City, Abuja, (IECA), will provide large scale commercial, industrial, residential and recreational facilities to aid economic 
                                    and social activities for the benefit of Nigeria and international businesses. The vision behind the International Economic City, Abuja is to ensure that, in concrete terms, none of the numerous business, jobs and wealth creation 
                                    opportunities offered by AFCFTA is not lost to Nigeria and her economy.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="about-image">
                                <a href="about.html"><img src="{{ asset('/media/frontend_imgs/about/1.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT I.E.C.A AREA END -->

            <!-- BOOKING AREA START -->
            <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="section-title text-white">
                                <h3>GET</h3>
                                <h2 class="h1">STARTED</h2>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="booking-conternt clearfix">
                                <div class="book-house text-white">
                                    <h2>Step 1 : PURCHASE A FORM </h2>
                                    <h3 class="h4">Step 2 : Make investments in your desired sector </h3>
                                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <a class="slider-button mt-40" href="#">CREATE YOUR ACCOUNT</a>
                                        <a class="slider-button mt-40" href="#">LOGIN</a>
                                        <a class="slider-button mt-40" href="#">INVEST</a>
                                    </div>
                                </div>
                                
                                <div class="booking-imgae">
                                    <img src="{{ asset('/media/frontend_imgs/others/booking.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BOOKING AREA END -->

            <!-- FEATURED FLAT AREA START -->
            <div class="featured-flat-area pt-115 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-2 text-center">
                                <h2>Investment OPPORTUNITIES</h2>
                                <p>I.E.C.A is an iconic organized private sector driven stimulus project for effective participation of Nigeria businesses in 
                                    receiving foreign investment into Nigeria as a result of AFRICA CONTINENTAL FREE TRADE AGREEMENT (AFCFTA). </p>
                            </div>
                        </div>
                    </div>
                    <div class="featured-flat">
                        <div class="row">
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <!-- <span class="for-sale">&nbsp;</span> -->
                                        <a href="properties-details.html"><img src="{{ asset('/media/frontend_imgs/flat/1.jpg') }}" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/4.png') }}" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/13.png') }}" alt="">
                                                <img src="{{ asset('/media/frontend_imgs/icons/14.png') }}" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Residential Plots</a></h5>
                                            <span class="price"></span>
                                        </div>
                                        <p>3, 4 and 5 Detached and semi detatched duplexes for Low and Medium Earners, 
                                            and gated communities for High income earners</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <!-- <span class="for-sale">&nbsp;</span> -->
                                        <a href="properties-details.html"><img src="{{ asset('/media/frontend_imgs/flat/2.jpg') }}" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/4.png') }}" alt="">
                                                <span>Over 1200 plots</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/13.png') }}" alt="">
                                                <img src="{{ asset('/media/frontend_imgs/icons/14.png') }}" alt="">
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Industrial Parks</a></h5>
                                            <span class="price"></span>
                                        </div>
                                        <p>Over 12 industrial parks with a cluster of 100 medium and 
                                        small scale industries in each park and occupying a land area of 10 hectares each</p>
                                    </div>
                                </div>
                            </div>
                            <!-- flat-item -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <!-- <span class="for-sale">&nbsp;</span> -->
                                        <a href="properties-details.html"><img src="{{ asset('/media/frontend_imgs/flat/3.jpg') }}" alt=""></a>
                                        <div class="flat-link">
                                            <a href="properties-details.html">More Details</a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/4.png') }}" alt="">
                                                <span>450 sqft</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('/media/frontend_imgs/icons/13.png') }}" alt="">
                                                <img src="{{ asset('/media/frontend_imgs/icons/14.png') }}" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5><a href="properties-details.html">Commercial Plots</a></h5>
                                            <span class="price"></span>
                                        </div>
                                        <p>Workshops, Market stalls, etertainment, schools, hospitals, hotels, Banks, Warehouses, 
                                            trade exhibition centers and other related sections</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURED FLAT AREA END -->

            <!-- FEATURES AREA START -->
            <div class="features-area fix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-5">
                            <div class="features-info bg-gray">
                                <div class="section-title mb-30">
                                    <h3>THE</h3>
                                    <h2 class="h1">COMPANY</h2>
                                </div>
                                <div class="features-desc">
                                    <p>The name <span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">International Economic City Ltd</span> is a limited liability company 
                                        registered as a subsidiary of ASSIGNIA INFRASTRUCTURES LTD under the laws of Nigeria. However, shares in the company shall be divested and transferred to investors 
                                        as soon as investors are assembled. The company shall be directly responsible for key areas of projects / businesses in the IECA. The land area dedicated for the following 
                                        projects shall be legally assigned to the International Economic City Ltd in a build, operate and own ( BOO) model, namely:</p>
                                </div>
                                <div class="features-include">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-4">
                                            <div class="features-include-list">
                                                <h6><i class="fa fa-industry" aria-hidden="true"></i> Power Plant</h6>
                                                <p>Sitting on 10 Hectares of land</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4">
                                            <div class="features-include-list">
                                                <h6><i class="fa fa-industry" aria-hidden="true"></i> Sewage Plant</h6>
                                                <p>Sitting on 10 Hectares of land</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4">
                                            <div class="features-include-list">
                                                <h6><i class="fa fa-bed" aria-hidden="true"></i> 5 Star Hotel</h6>
                                                <p>Sitting on 5 Hectares of land</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4">
                                            <div class="features-include-list">
                                                <h6><i class="fa fa-hospital-o" aria-hidden="true"></i> World Class Hospital</h6>
                                                <p>Sitting on 7 Hectares of land</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4">
                                            <div class="features-include-list">
                                                <h6><i class="fa fa-home" aria-hidden="true"></i> Accomodations</h6>
                                                <p>200 Plots for Luxurious, apartments and residences</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-4">
                                            <div class="features-include-list">
                                                <h6><i class="fa fa-handshake-o" aria-hidden="true"></i> Conference Centers</h6>
                                                <p>Sitting on 7 Hectares of land</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURES AREA END -->

            <!-- OUR BOARD AREA START -->
            <div class="our-agents-area pt-115 pb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-2 text-center">
                                <h2>BOARD OF DIRECTORS</h2>
                                <p>I.E.C.A is the best theme for elit, sed do eiusmod tempor dolor sit amet, conse
                                    ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd
                                    minim veniam, quis nostrud</p>
                            </div>
                        </div>
                    </div>
                    <div class="our-agents">
                        <div class="row">
                            <div class="col-12">
                                <div class="agents-carousel">
                                    <!-- single-agent -->
                                    <div class="col-12">
                                        <div class="single-agent">
                                            <div class="agent-image">
                                                <img src="{{ asset('/media/frontend_imgs/agents/1.jpg') }}" alt="">
                                            </div>
                                            <div class="agent-info">
                                                <div class="agent-name">
                                                    <h5><a href="agent-details.html">Chief Michael Nkwocha</a></h5>
                                                    <p>&nbsp;</p>
                                                </div>
                                            </div>
                                            <div class="agent-info-hover">
                                                <!-- <div class="agent-name">
                                                    <h5><a href="agent-details.html">Chief Michael Nkwocha</a></h5>
                                                    <p>Real Estate Agent</p>
                                                </div> -->
                                                <ul class="agent-address">
                                                    <li><img src="{{ asset('/media/frontend_imgs/icons/phone-2.png') }}" alt="">+1245 785 659 </li>
                                                    <li><img src="{{ asset('/media/frontend_imgs/icons/mail-close.png') }}" alt="">mnkwocha@ieca.com.ng
                                                    </li>
                                                </ul>
                                                <ul class="social-media">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-agent -->
                                    <div class="col-12">
                                        <div class="single-agent">
                                            <div class="agent-image">
                                                <img src="{{ asset('/media/frontend_imgs/agents/2.jpg') }}" alt="">
                                            </div>
                                            <div class="agent-info">
                                                <div class="agent-name">
                                                    <h5><a href="agent-details.html">Engineer Auwal Bununu</a></h5>
                                                    <p>&nbsp;</p>
                                                </div>
                                            </div>
                                            <div class="agent-info-hover">
                                                <!-- <div class="agent-name">
                                                    <h5><a href="agent-details.html">Engineer Auwal Bununu</a></h5>
                                                    <p>Real Estate Broker</p>
                                                </div> -->
                                                <ul class="agent-address">
                                                    <li><img src="{{ asset('/media/frontend_imgs/icons/phone-2.png') }}" alt="">+1245 785 659 </li>
                                                    <li><img src="{{ asset('/media/frontend_imgs/icons/mail-close.png') }}" alt="">abubunu@ieca.com.ng
                                                    </li>
                                                </ul>
                                                <ul class="social-media">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-agent -->
                                    <div class="col-12">
                                        <div class="single-agent">
                                            <div class="agent-image">
                                                <img src="{{ asset('/media/frontend_imgs/agents/3.jpg') }}" alt="">
                                            </div>
                                            <div class="agent-info">
                                                <div class="agent-name">
                                                    <h5><a href="agent-details.html">Barrister Ibrahim Hussein Abdullahi</a></h5>
                                                    <!-- <p>&nbsp;</p> -->
                                                </div>
                                            </div>
                                            <div class="agent-info-hover">
                                                <!-- <div class="agent-name">
                                                    <h5><a href="agent-details.html">Barrister Ibrahim Hussein Abdullahi</a></h5>
                                                    <p>Real Estate Broker</p>
                                                </div> -->
                                                <ul class="agent-address">
                                                    <li><img src="{{ asset('/media/frontend_imgs/icons/phone-2.png') }}" alt="">+1245 785 659 </li>
                                                    <li><img src="{{ asset('/media/frontend_imgs/icons/mail-close.png') }}" alt="">ihabdulahi@ieca.com.ng
                                                    </li>
                                                </ul>
                                                <ul class="social-media">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-agent -->
                                    <div class="col-12">
                                        <div class="single-agent">
                                            <div class="agent-image">
                                                <img src="{{ asset('/media/frontend_imgs/agents/4.jpg') }}" alt="">
                                            </div>
                                            <div class="agent-info">
                                                <div class="agent-name">
                                                    <h5><a href="agent-details.html">&nbsp;</a></h5>
                                                    <p>&nbsp;</p>
                                                </div>
                                            </div>
                                            <div class="agent-info-hover">
                                                <!-- <div class="agent-name">
                                                    <h5><a href="agent-details.html">Sarmin Tabassum</a></h5>
                                                    <p>Real Estate Agent</p>
                                                </div> -->
                                                <ul class="agent-address">
                                                    <li><img src="{{ asset('/media/frontend_imgs/icons/phone-2.png') }}" alt="">&nbsp; </li>
                                                    <li><img src="{{ asset('/media/frontend_imgs/icons/mail-close.png') }}" alt="">&nbsp;
                                                    </li>
                                                </ul>
                                                <ul class="social-media">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR BOARD AREA END -->

            <!-- TESTIMONIAL AREA START -->
            <div class="testimonial-area pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-lg-8 col-md-9">
                                        <div class="section-title mb-30">
                                            <h3>SOME OF OUR</h3>
                                            <h2 class="h1">HAPPY CLIENTS</h2>
                                        </div>
                                        <div class="testimonial-carousel dots-right-btm">
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">I.E.C.A</span> is the best theme for
                                                        elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                        adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                        lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                        ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                        minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                        ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                                    </p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">I.E.C.A</span> is the best theme for
                                                        elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                        adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                        lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                        ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                        minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                        ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                                    </p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">I.E.C.A</span> is the best theme for
                                                        elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                        adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                        lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                        ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                        minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                        ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                                    </p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('/media/frontend_imgs/frontend_imgs/others/testimonial.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIAL AREA END -->


            <!-- DEVELOPERS AND ENGINEERS AREA START -->
            <div class="testimonial-area pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-lg-8 col-md-9">
                                        <div class="section-title mb-30">
                                            <h3>Developer,</h3>
                                            <h2 class="h1">Architects and Engineers</h2>
                                        </div>
                                        <div class="testimonial-carousel dots-right-btm">
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Assignia Infrastructures LTD</span>,
                                                        A company registered in Nigeria with vast experience in infrastructural developement is the developer of the international Economic City, Abuja 
                                                        <br><br>
                                                        <span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Messers Arabi Bello & Associates</span>, a world class, multidiscipinary consultancy consortium has been engaged to handle architecture, planning,
                                                        engineering and environmental management of the international Economic City Abuja
                                                    </p>
                                                </div>
                                                <!-- <h6>Zasica Luci, <span>CEO</span></h6> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <div class="testimonial-image">
                                            <img src="{{ asset('/media/frontend_imgs/others/testimonial.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEVELOPERS AND ENGINEERS AREA END -->

            <!-- BRAND AREA START -->
            <div class="brand-area pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-carousel">
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/1.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/2.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/3.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/4.png') }} alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/5.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/1.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="{{ asset('/media/frontend_imgs/brand/4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BRAND AREA END -->
        </section>
        <!-- End page content -->
@endsection