@extends('layouts.master')

@section('content')
    <!--theme-banner-two start-->
    <div class="theme-banner-two pt-220 pb-230 pt-lg-120 pt-md-80 pt-xs-60 pb-sm-120">
        <img class="banner-shape shape-one " src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
        <img class="banner-shape shape-two" src="{{ asset('img/shape/star-4b.svg') }}" alt="shape">
        <img class="banner-shape shape-three d-none d-lg-inline-block" src="{{ asset('img/shape/star-2.svg') }}"
            alt="shape">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-7">
                    <div class="theme__content__two text-md-start text-center">
                        <h4 class="hero-sub-title mb-25">{{ __('home.title.website') }}</h4>
                        <h1 class="main-title-two">
                            <span>{{ __('home.title.recode') }}</span>
                            <br>
                            <span>{{ __('home.title.innovate') }}</span>
                            <br>
                            <span>{{ __('home.title.transform') }}</span>
                        </h1>
                        <a class="theme_btn" href="#">{{ __('home.btn.website') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-img-wrapper">
            <img class="hero-img img-1" src="{{ asset('img/hero/hero-home1.jpg') }}" alt="img">
            <img class="hero-img img-2" src="{{ asset('img/hero/hero-home2.jpg') }}" alt="img">
            <img class="hero-img arrow-1" src="{{ asset('img/shape/arrow-1b.svg') }}" alt="icon">
            <img class="hero-img arrow-2" src="{{ asset('img/shape/arrow-2b.svg') }}" alt="icon">
            <img class="hero-img arrow-3" src="{{ asset('img/shape/arrow-3b.svg') }}" alt="icon">
            <div class="hero-box">
                <span class="icon">
                    <img src="{{ asset('img/icon/icon-13b.svg') }}" alt="icon">
                </span>
                <div class="box">
                    <span class="text-theme"><span class="counter">24</span>+</span>
                    {{ __('home.title.website_created') }}
                </div>
            </div>
            <div class="hero-box-two">
                <div class="icon">
                    <img src="{{ asset('img/icon/icon-14b.svg') }}" alt="icon">
                </div>
                <div class="box">
                    <span class="text-theme"><span class="counter">16</span>+</span>
                    {{ __('home.title.satisfied_client') }}
                </div>
            </div>
        </div>
    </div>
    <!--theme-banner-two end-->

    <!--brand-area start-->
    <!-- <section class="brand-area brand-bg pt-25 pb-25 mt-1">
                                                                                    <div class="container">
                                                                                        <div class="row gx-4 gx-xxl-5">
                                                                                            <div class="brand-slider-one">
                                                                                                <div class="brand-logo">
                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-1.svg') }}" alt="brand"></a>
                                                                                                </div>
                                                                                                <div class="brand-logo">
                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-2.svg') }}" alt="brand"></a>
                                                                                                </div>
                                                                                                <div class="brand-logo">
                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-3.svg') }}" alt="brand"></a>
                                                                                                </div>
                                                                                                <div class="brand-logo">
                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-4.svg') }}" alt="brand"></a>
                                                                                                </div>
                                                                                                <div class="brand-logo">
                                                                                                    <a href="#"><img src="{{ Asset('img/brand/brand-5.svg') }}" alt="brand"></a>
                                                                                                </div>
                                                                                                <div class="brand-logo">
                                                                                                    <a href="#"><img src="{{ asset('img/brand/brand-6.svg') }}" alt="brand"></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section> -->
    <!--brand-area end-->

    <!--techy-feature start-->
    <section class="techy-feature pt-150 pb-30 pt-lg-120">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="feature-style-three text-center mb-45">
                        <div class="icon"><img src="{{ asset('img/icon/icon-15b.svg') }}" alt="icon" height="80">
                        </div>
                        <h3>
                            <a class="sect-title-two" href="#">{{ __('home.title.expertise') }}</a>
                        </h3>
                        <p>{{ __('home.desc.expertise') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-style-three text-center mb-45">
                        <div class="icon"><img src="{{ asset('img/icon/icon-16b.svg') }}" alt="icon" height="80">
                        </div>
                        <h3>
                            <a class="sect-title-two" href="#">{{ __('home.title.innovation') }}</a>
                        </h3>
                        <p>{{ __('home.desc.innovation') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8" data-aos="fade-rup" data-aos-delay="200">
                    <div class="feature-style-three text-center mb-45">
                        <div class="icon"><img src="{{ asset('img/icon/icon-17b.svg') }}" alt="icon"
                                height="80">
                        </div>
                        <h3>
                            <a class="sect-title-two" href="#">{{ __('home.title.quality') }}</a>
                        </h3>
                        <p>{{ __('home.desc.quality') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--techy-feature end-->

    <!--about-techy start-->
    <section class="about-techy-two pt-75 pb-105 pt-lg-40 pb-lg-20 pt-md-30 pb-md-15">
        <img class="about-shape shape-1b" src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
        <img class="about-shape shape-2b" src="{{ asset('img/shape/star-4b.svg') }}" alt="shape">
        <img class="about-shape shape-3b d-none d-md-inline-block" src="{{ asset('img/shape/star-2.svg') }}"
            alt="shape">
        <img class="about-shape shape-4b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xxl-5 col-xl-4 col-md-6 order-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-img-wrapper-two text-lg-end position-relative mb-45">
                        <img class="main-img w-100" src="{{ asset('img/about/about-home.jpg') }}" alt="img">
                        <img class="shape-one" src="{{ asset('img/shape/line-round-4a.svg') }}" alt="shape">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-6  order-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-style-three mb-45">
                        <h6 class="sub-title mb-20">{{ __('home.title.about') }}</h6>
                        <h2 class="sect-title mb-15">{{ __('home.title.your_partner') }}</h2>
                        <p>{{ __('home.desc.about') }}</p>
                        <a class="theme_btn mt-55" href="#">{{ __('home.btn.details') }}</a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 order-3" data-aos="fade-left" data-aos-delay="100">
                    <ul class="list-none count-list">
                        <li>
                            <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-30">
                                <h3><span class="counter">24</span>+</h3>
                                <p class="text-white">{{ __('home.title.website_created') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-30">
                                <h3><span class="counter">16</span>+</h3>
                                <p class="text-white">{{ __('home.title.satisfied_client') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="counter-style-two boder-style d-xxl-flex align-items-center mb-30">
                                <h3><span class="counter">30</span>+</h3>
                                <p class="text-white">{{ __('home.title.client_review') }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--about-techy end-->

    <!--our-services start-->
    <section class="our-services service-bg-two pt-95 pb-50 pt-lg-50 pb-lg-15">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center mb-55">
                        <h3 class="sect-title mb-25" data-aos="fade-up">{{ __('home.title.services') }}</h3>
                        <p data-aos="fade-up" data-aos-delay="100">{{ __('home.desc.services') }}</p>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-18b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="#">{{ __('home.title.webdev') }}</a>
                        </h2>
                        <p>{{ __('home.desc.webdev') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-19b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="#">{{ __('home.title.hosting') }}</a>
                        </h2>
                        <p>{{ __('home.desc.hosting') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-20b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="#">{{ __('home.title.domain') }}</a>
                        </h2>
                        <p>{{ __('home.desc.domain') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-21b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="#">{{ __('home.title.e-commerce') }}</a>
                        </h2>
                        <p>{{ __('home.desc.e-commerce') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-22b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="#">{{ __('home.title.ui-ux') }}</a>
                        </h2>
                        <p>{{ __('home.desc.ui-ux') }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-23b.svg') }}" alt="icon" height="80">
                        <h2>
                            <a class="sect-title-two" href="#">{{ __('home.title.programming') }}</a>
                        </h2>
                        <p>{{ __('home.desc.programming') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our-services end-->

    <!--latest-case-work start-->
    <!-- <section class="latest-case-work pt-145 pb-150 pt-lg-60 pb-lg-120">
                                                                                                                                                                                    <img class="case-shape shape-1b d-none d-lg-inline-block" src="{{ asset('img/shape/star-3b.svg') }}"
                                                                                                                                                                                        alt="shape">
                                                                                                                                                                                    <img class="case-shape shape-2b d-none d-lg-inline-block" src="{{ asset('img/shape/star-4b.svg') }}"
                                                                                                                                                                                        alt="shape">
                                                                                                                                                                                    <img class="case-shape shape-3b d-none d-lg-inline-block" src="{{ asset('img/shape/star-2.svg') }}"
                                                                                                                                                                                        alt="shape">
                                                                                                                                                                                    <img class="case-shape shape-4b d-none d-lg-inline-block" src="{{ asset('img/shape/star-5b.svg') }}"
                                                                                                                                                                                        alt="shape">
                                                                                                                                                                                    <div class="container">
                                                                                                                                                                                        <div class="row gx-4 gx-xxl-5 align-items-center">
                                                                                                                                                                                            <div class="col-xl-5 col-lg-6 col-md-8">
                                                                                                                                                                                                <div class="section-title mb-55 text-md-start text-center">
                                                                                                                                                                                                    <h6 class="sub-title mb-20" data-aos="fade-up">Latest Works</h6>
                                                                                                                                                                                                    <h3 class="sect-title mb-25" data-aos="fade-up" data-aos-delay="100">Check out some
                                                                                                                                                                                                        our great portfolio</h3>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-xl-7 col-lg-6 col-md-4 d-flex justify-content-md-end justify-content-center pb-40">
                                                                                                                                                                                                <div class="slick-nav">
                                                                                                                                                                                                    <div class="prev_p1 mr-20">
                                                                                                                                                                                                        <i class="bi bi-chevron-left"></i>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="next_p1">
                                                                                                                                                                                                        <i class="bi bi-chevron-right"></i>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="row case-slider-one" data-aos="fade-up" data-aos-delay="200">
                                                                                                                                                                                            <div class="col-lg-4">
                                                                                                                                                                                                <div class="case-item-one">
                                                                                                                                                                                                    <div class="case-thumb">
                                                                                                                                                                                                        <img class="w-100" src="{{ asset('img/work/case-1b.jpg') }}" alt="img">
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="case-content">
                                                                                                                                                                                                        <span>Web Design</span>
                                                                                                                                                                                                        <h3><a class="sect-title-two" href="project-details.html">Web Analytics</a></h3>
                                                                                                                                                                                                        <p>Dramatically supply transparent backward deliverables before caward comp internal
                                                                                                                                                                                                            or
                                                                                                                                                                                                            "organic" sources.</p>
                                                                                                                                                                                                        <a class="case-btn" href="project-details.html"><i class="bi bi-arrow-up-right"></i></a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-lg-4">
                                                                                                                                                                                                <div class="case-item-one">
                                                                                                                                                                                                    <div class="case-thumb">
                                                                                                                                                                                                        <img class="w-100" src="{{ asset('img/work/case-2b.jpg') }}" alt="img">
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="case-content">
                                                                                                                                                                                                        <span>Cyber Secure</span>
                                                                                                                                                                                                        <h3><a class="sect-title-two" href="project-details.html">Cyber Security Core</a>
                                                                                                                                                                                                        </h3>
                                                                                                                                                                                                        <p>Dramatically supply transparent backward deliverables before caward comp internal
                                                                                                                                                                                                            or
                                                                                                                                                                                                            "organic" sources.</p>
                                                                                                                                                                                                        <a class="case-btn" href="project-details.html"><i class="bi bi-arrow-up-right"></i></a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-lg-4">
                                                                                                                                                                                                <div class="case-item-one">
                                                                                                                                                                                                    <div class="case-thumb">
                                                                                                                                                                                                        <img class="w-100" src="{{ asset('img/work/case-3b.jpg') }}" alt="img">
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="case-content">
                                                                                                                                                                                                        <span>Design</span>
                                                                                                                                                                                                        <h3><a class="sect-title-two" href="project-details.html">Design For Future</a>
                                                                                                                                                                                                        </h3>
                                                                                                                                                                                                        <p>Dramatically supply transparent backward deliverables before caward comp internal
                                                                                                                                                                                                            or
                                                                                                                                                                                                            "organic" sources.</p>
                                                                                                                                                                                                        <a class="case-btn" href="project-details.html"><i class="bi bi-arrow-up-right"></i></a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-lg-4">
                                                                                                                                                                                                <div class="case-item-one">
                                                                                                                                                                                                    <div class="case-thumb">
                                                                                                                                                                                                        <img class="w-100" src="{{ asset('img/work/case-1b.jpg') }}" alt="img">
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="case-content">
                                                                                                                                                                                                        <span>Web Design</span>
                                                                                                                                                                                                        <h3><a class="sect-title-two" href="project-details.html">Web Analytics</a></h3>
                                                                                                                                                                                                        <p>Dramatically supply transparent backward deliverables before caward comp internal
                                                                                                                                                                                                            or
                                                                                                                                                                                                            "organic" sources.</p>
                                                                                                                                                                                                        <a class="case-btn" href="project-details.html"><i class="bi bi-arrow-up-right"></i></a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </section> -->
    <!--latest-case-work end-->

    <!--latest-case-video start-->
    <!-- <section class="latest-case-video">
                                                                                                                                                                                    <div class="container-fluid px-lg-0">
                                                                                                                                                                                        <div class="row gx-4 gx-xxl-5 align-items-center">
                                                                                                                                                                                            <div class="col-md-6 pb-sm-45">
                                                                                                                                                                                                <div class="video-slider-one">
                                                                                                                                                                                                    <div class="video-wrapper">
                                                                                                                                                                                                        <a class="popup-video" href="https://www.youtube.com/watch?v=lTxn2BuqyzU"><i
                                                                                                                                                                                                                class="bi bi-play-fill"></i></a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="video-wrapper">
                                                                                                                                                                                                        <a class="popup-video" href="https://www.youtube.com/watch?v=lTxn2BuqyzU"><i
                                                                                                                                                                                                                class="bi bi-play-fill"></i></a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-xxl-4 col-md-6">
                                                                                                                                                                                                <div class="block-style-five ps-xxl-5 ms-xxl-4">
                                                                                                                                                                                                    <h6 class="sub-title mb-20" data-aos="fade-up">Latest Videos</h6>
                                                                                                                                                                                                    <h3 class="sect-title mb-20">The Best Website Development Agency</h3>
                                                                                                                                                                                                    <p class="pe-xxl-5 mb-55">Continually strategize standards compliant ideas rather than
                                                                                                                                                                                                        performance based
                                                                                                                                                                                                        alignments. Globally leverage existing alternative solutions through virtual users.
                                                                                                                                                                                                    </p>
                                                                                                                                                                                                    <div class="slick-nav d-none d-md-inline-block">
                                                                                                                                                                                                        <div class="prev_v1 mr-20">
                                                                                                                                                                                                            <i class="bi bi-chevron-left"></i>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="next_v1">
                                                                                                                                                                                                            <i class="bi bi-chevron-right"></i>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </section> -->
    <!--latest-case-video end-->

    <!--techy-team start-->
    <section class="gradient-bg techy-team pt-210 pt-lg-180 pt-sm-60 pb-100 pb-lg-55">
        <img class="team-shape shape-1b" src="{{ asset('img/shape/star-3b.svg') }}" alt="shape">
        <img class="team-shape shape-2b" src="{{ asset('img/shape/star-4b.svg') }}" alt="shape">
        <img class="team-shape shape-3b" src="{{ asset('img/shape/star-2.svg') }}" alt="shape">
        <img class="team-shape shape-4b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="team-shape shape-5b" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="team-shape shape-6b" src="{{ asset('img/shape/line-round-6b.svg') }}" alt="shape">
        <div class="container">
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h6 class="sub-title mb-20">{{ __('home.title.team') }}</h6>
                        <h2 class="sect-title">{{ __('home.title.team_expert') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-one text-center mb-45">
                        <a href="#"><img src="{{ asset('img/team/team-zachran.jpg') }}" alt="img"></a>
                        <div class="team-content">
                            <p>{{ __('home.position.ceo') }}</p>
                            <h3 class="sect-title-two"><a href="#">Zachran Razendra</a></h3>
                            <div class="team-social">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-one text-center mb-45">
                        <a href="#"><img src="{{ asset('img/team/team-taufiq.jpg') }}" alt="img"></a>
                        <div class="team-content">
                            <p>{{ __('home.position.cto') }}</p>
                            <h3 class="sect-title-two"><a href="#">M.Taufiq Shidiq</a></h3>
                            <div class="team-social">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-style-one text-center mb-45">
                        <a href="#"><img src="{{ asset('img/team/team-nabila.jpg') }}" alt="img"></a>
                        <div class="team-content">
                            <p>{{ __('home.position.public_relations') }}</p>
                            <h3 class="sect-title-two"><a href="#">Nabila Mufida</a></h3>
                            <div class="team-social">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-12 text-center pt-15" data-aos="fade-up" data-aos-delay="200">
                    <a class="theme_btn" href="#">{{ __('home.btn.member') }}</a>
                </div>
            </div>
        </div>
    </section>
    <!--techy-team end-->

    <!--techy-wrok-process start-->
    <!-- <section class="techy-wrok-process pt-140 pb-30 pt-lg-55">
                                                                                                                                                                                    <div class="container">
                                                                                                                                                                                        <div class="row gx-4 gx-xxl-5">
                                                                                                                                                                                            <div class="col-lg-12">
                                                                                                                                                                                                <div class="section-title text-center mb-55">
                                                                                                                                                                                                    <h6 class="sub-title mb-20">Working Process</h6>
                                                                                                                                                                                                    <h2 class="sect-title">How It Works</h2>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="row gx-4 gx-xxl-5 align-items-center">
                                                                                                                                                                                            <div class="col-xl-7 col-lg-6">
                                                                                                                                                                                                <div class="process-img-wrapper mb-45">
                                                                                                                                                                                                    <img src="{{ asset('img/work/process-1b.jpg') }}" alt="img">
                                                                                                                                                                                                    <div class="call-box">
                                                                                                                                                                                                        <div class="icon">
                                                                                                                                                                                                            <img src="{{ asset('img/icon/icon-27b.svg') }}" alt="icon">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <h3 class="sect-title-two">Do you have
                                                                                                                                                                                                            any question?</h3>
                                                                                                                                                                                                        <h4 class="fs-24 text-uppercase text-theme fw-medium">+(62) 822 9814 1940</h4>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-xl-5 col-lg-6">
                                                                                                                                                                                                <div class="block-style-six">
                                                                                                                                                                                                    <div class="process-box mb-40">
                                                                                                                                                                                                        <div class="img">
                                                                                                                                                                                                            <img src="{{ asset('img/icon/icon-24b.svg') }}" alt="icon">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="text-wrapper">
                                                                                                                                                                                                            <h3 class="sect-title-two">Create Account</h3>
                                                                                                                                                                                                            <p>Interactively provide access to world-class materials for catalysts.</p>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="process-box mb-40">
                                                                                                                                                                                                        <div class="img">
                                                                                                                                                                                                            <img src="{{ asset('img/icon/icon-25b.svg') }}" alt="icon">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="text-wrapper">
                                                                                                                                                                                                            <h3 class="sect-title-two">Choose Any Service</h3>
                                                                                                                                                                                                            <p>Interactively provide access to world-class materials for catalysts.</p>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="process-box mb-65">
                                                                                                                                                                                                        <div class="img">
                                                                                                                                                                                                            <img src="{{ asset('img/icon/icon-26b.svg') }}" alt="icon">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="text-wrapper">
                                                                                                                                                                                                            <h3 class="sect-title-two">Get Solutions</h3>
                                                                                                                                                                                                            <p>Interactively provide access to world-class materials for catalysts.</p>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="text-md-start text-center">
                                                                                                                                                                                                        <a class="theme_btn" href="services.html">More Details</a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </section> -->
    <!--techy-wrok-process end-->

    <!--client-feedback start-->
    <!--<section class="client-feedback feedback-bg pt-70 pb-110 pb-lg-60">
                                                                                                                                                                                    <div class="container">
                                                                                                                                                                                        <div class="row gx-4 gx-xxl-5">
                                                                                                                                                                                            <div class="col-lg-12">
                                                                                                                                                                                                <div class="section-title text-center mb-55">
                                                                                                                                                                                                    <h6 class="sub-title mb-20">Testimonials</h6>
                                                                                                                                                                                                    <h2 class="sect-title">What Our Client Says</h2>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="row feedback-slider-two">
                                                                                                                                                                                            <div class="col-lg-6">
                                                                                                                                                                                                <div class="feedback-style-two">
                                                                                                                                                                                                    <h4 class="fw-medium mb-25">“ Best software agency in the new world ”</h4>
                                                                                                                                                                                                    <p>Credibly engineer empowered niche markets via superior vortal. Int eractive maintain
                                                                                                                                                                                                        team
                                                                                                                                                                                                        driven data for longterm highimpact internal or "organic" sources. Appropriately
                                                                                                                                                                                                        integrate revolutionary ideas & cross-media technologies.</p>
                                                                                                                                                                                                    <div class="d-sm-flex align-items-center justify-content-between">
                                                                                                                                                                                                        <div class="author d-flex align-items-center justify-content-center mt-35">
                                                                                                                                                                                                            <img src="{{ asset('img/testimonial/author-4b.jpg') }}" alt="author">
                                                                                                                                                                                                            <div class="author-info">
                                                                                                                                                                                                                <h4>Kristin Watson</h4>
                                                                                                                                                                                                                <p class="text-white">Marketing Coordinator</p>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="rating mt-35">
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-lg-6">
                                                                                                                                                                                                <div class="feedback-style-two">
                                                                                                                                                                                                    <h4 class="fw-medium mb-25">“ 24/7 dedicated support team”</h4>
                                                                                                                                                                                                    <p>Credibly engineer empowered niche markets via superior vortal. Int eractive maintain
                                                                                                                                                                                                        team
                                                                                                                                                                                                        driven data for longterm highimpact internal or "organic" sources. Appropriately
                                                                                                                                                                                                        integrate revolutionary ideas & cross-media technologies.</p>
                                                                                                                                                                                                    <div class="d-sm-flex align-items-center justify-content-between">
                                                                                                                                                                                                        <div class="author d-flex align-items-center justify-content-center mt-35">
                                                                                                                                                                                                            <img src="{{ asset('img/testimonial/author-5b.jpg') }}" alt="author">
                                                                                                                                                                                                            <div class="author-info">
                                                                                                                                                                                                                <h4>Darrell Steward</h4>
                                                                                                                                                                                                                <p class="text-white">Medical Assistant</p>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="rating mt-35">
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-lg-6">
                                                                                                                                                                                                <div class="feedback-style-two">
                                                                                                                                                                                                    <h4 class="fw-medium mb-25">“ Best software agency in the new world ”</h4>
                                                                                                                                                                                                    <p>Credibly engineer empowered niche markets via superior vortal. Int eractive maintain
                                                                                                                                                                                                        team
                                                                                                                                                                                                        driven data for longterm highimpact internal or "organic" sources. Appropriately
                                                                                                                                                                                                        integrate revolutionary ideas & cross-media technologies.</p>
                                                                                                                                                                                                    <div class="d-sm-flex align-items-center justify-content-between">
                                                                                                                                                                                                        <div class="author d-flex align-items-center justify-content-center mt-35">
                                                                                                                                                                                                            <img src="{{ asset('img/testimonial/author-4b.jpg') }}" alt="author">
                                                                                                                                                                                                            <div class="author-info">
                                                                                                                                                                                                                <h4>Kristin Watson</h4>
                                                                                                                                                                                                                <p class="text-white">Marketing Coordinator</p>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="rating mt-35">
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-lg-6">
                                                                                                                                                                                                <div class="feedback-style-two">
                                                                                                                                                                                                    <h4 class="fw-medium mb-25">“ 24/7 dedicated support team”</h4>
                                                                                                                                                                                                    <p>Credibly engineer empowered niche markets via superior vortal. Int eractive maintain
                                                                                                                                                                                                        team
                                                                                                                                                                                                        driven data for longterm highimpact internal or "organic" sources. Appropriately
                                                                                                                                                                                                        integrate revolutionary ideas & cross-media technologies.</p>
                                                                                                                                                                                                    <div class="d-sm-flex align-items-center justify-content-between">
                                                                                                                                                                                                        <div class="author d-flex align-items-center justify-content-center mt-35">
                                                                                                                                                                                                            <img src="{{ asset('img/testimonial/author-5b.jpg') }}" alt="author">
                                                                                                                                                                                                            <div class="author-info">
                                                                                                                                                                                                                <h4>Darrell Steward</h4>
                                                                                                                                                                                                                <p class="text-white">Medical Assistant</p>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="rating mt-35">
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                            <a href="#">
                                                                                                                                                                                                                <i class="bi bi-star-fill"></i>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </section>-->
    <!--client-feedback end-->
@endsection
