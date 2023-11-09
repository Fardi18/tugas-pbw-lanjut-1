@extends('user.layouts.app')

@section('title', 'My Projects')

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
                            data-typed-items="My Projects"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            Project yang pernah saya kerjakan
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($portos as $porto)
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="{{ Storage::url($porto->image) }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="{{ Storage::url($porto->image) }}" alt="" class="img-fluid gambar">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">{{ $porto->name }}</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">{{ $porto->portocategory->name }}</span> / <span
                                                class="w-date">{{ $porto->tanggal }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portofolio/{{ $porto->id }}"> <span
                                                    class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

@endsection
