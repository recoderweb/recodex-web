@extends('layouts.master')

@section('contaent')
    <!--page-title-area start-->
    <div class="page-title-area pt-210 pb-150 pt-lg-120 pb-lg-125 pb-md-100">
        <img class="page-title-shape shape-one " src="{{ asset('img/shape/star-10d.svg') }}" alt="shape">
        <img class="page-title-shape shape-three" src="{{ asset('img/shape/star-2.svg') }}" alt="shape">
        <img class="page-title-shape shape-four d-none d-md-inline-block " src="{{ asset('img/shape/star-4b.svg') }}"
            alt="shape">
        <img class="page-title-shape shape-five d-none d-lg-inline-block " src="{{ asset('img/shape/line-round-9d.svg') }}"
            alt="shape">
        <img class="page-title-shape shape-six" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="page-title-shape shape-seven" src="{{ asset('img/shape/star-5b.svg') }}" alt="shape">
        <img class="page-title-shape shape-eight d-none d-xl-inline-block" src="{{ asset('img/page-title/img-01.png') }}"
            alt="img">
        <img class="page-title-shape shape-nine d-none d-xl-inline-block" src="{{ asset('img/page-title/img-02.png') }}"
            alt="img">

        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="page-title-wrapper text-md-start text-center">
                        <h2 class="page-title mb-20">{{ __('home.title.service') }}</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb list-none justify-content-center justify-content-md-start">
                                <li><a href="{{ route('home') }}">{{ __('home.navbar.home') }}</a></li>
                                <li class="active" aria-current="page">{{ __('home.navbar.service') }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title-area end-->

    <!--our-services start-->
    <section class="our-services service-bg-two pt-145 pb-100 pt-lg-60 pb-lg-20">
        <div class="container">
            <div class="row gx-4 gx-xxl-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center mb-55">
                        <h3 class="sect-title mb-25" data-aos="fade-up">{{ __('home.navbar.service') }}</h3>
                        <p data-aos="fade-up" data-aos-delay="100">{{ __('home.desc.services') }}</p>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-xxl-5">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="feature-style-four mb-45">
                        <img class="shape-over" data-aos="fade-down" data-aos-delay="100"
                            src="{{ asset('img/shape/line-round-5b.svg') }}" alt="shape">
                        <img src="{{ asset('img/icon/icon-18b.svg') }}" alt="icon">
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
                        <img src="{{ asset('img/icon/icon-19b.svg') }}" alt="icon">
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
                        <img src="{{ asset('img/icon/icon-20b.svg') }}" alt="icon">
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
                        <img src="{{ asset('img/icon/icon-21b.svg') }}" alt="icon">
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
                        <img src="{{ asset('img/icon/icon-22b.svg') }}" alt="icon">
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
                        <img src="{{ asset('img/icon/icon-23b.svg') }}" alt="icon">
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

    <!--call-to-action start-->
    <section class="call-to-action pt-100 pb-100">
        <img class="call-shape shape-one" src="{{ asset('img/shape/line-round-8c.svg') }}" alt="shape">
        <img class="call-shape shape-two d-none d-lg-inline-block" src="{{ asset('img/icon/icon-39c.svg') }}"
            alt="icon">
        <img class="call-shape shape-three d-none d-lg-inline-block" src="{{ asset('img/icon/icon-40c.svg') }}"
            alt="icon">
        <img class="call-shape shape-four d-none d-lg-inline-block" src="{{ asset('img/icon/icon-41c.svg') }}"
            alt="icon">
        <img class="call-shape shape-five d-none d-lg-inline-block" src="{{ asset('img/icon/icon-42c.svg') }}"
            alt="icon">
        <img class="call-shape shape-six d-none d-lg-inline-block" src="{{ asset('img/icon/icon-43c.svg') }}"
            alt="icon">
        <img class="call-shape shape-seven d-none d-lg-inline-block" src="{{ asset('img/icon/icon-44c.svg') }}"
            alt="icon">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-8">
                    <div class="call-to-wrapper">
                        <h3 class="title-big mb-60" data-aos="fade-up">
                            {{ __('home.title.website') }}
                        </h3>
                        <a class="theme_btn" data-aos="fade-up" href="#">{{ __('home.btn.contact') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call-to-action end-->
@endsection
