@extends('user.layouts.app')

@section('title', 'Service')

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/a.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">Fardi Khalik Ramadhan</h1>
                    <p class="hero-subtitle fs-4 mb-5 text-primary"><span class="typed"
                            data-typed-items="My Services"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Services
                        </h3>
                        <p class="subtitle-a">
                            Yang bisa saya lakukan untuk Anda
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">UIUX Design</h2>
                            <p class="s-description text-center">
                                Membantu Anda dalam membuat desain UIUX yang baik dan menarik untuk aplikasi website maupun
                                mobile
                                yang Anda miliki
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Web Development</h2>
                            <p class="s-description text-center">
                                Membantu Anda untuk membuat website dengan baik itu Front-end, Back-end maupun Fullstack Web
                                Development
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Responsive Design</h2>
                            <p class="s-description text-center">
                                Membantu Anda dalam membuat website yang sudah responsive sehingga bisa digunakan pada
                                berbagai device
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Photography</h2>
                            <p class="s-description text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem
                                fugiat! Quia,
                                provident vitae! Magni
                                tempora perferendis eum non provident.
                            </p>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Graphic Design</h2>
                            <p class="s-description text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem
                                fugiat! Quia,
                                provident vitae! Magni
                                tempora perferendis eum non provident.
                            </p>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Marketing Services</h2>
                            <p class="s-description text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem
                                fugiat! Quia,
                                provident vitae! Magni
                                tempora perferendis eum non provident.
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End Services Section -->
@endsection
