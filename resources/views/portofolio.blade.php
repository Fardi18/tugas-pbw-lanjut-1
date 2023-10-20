@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/Mercusuar.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">Fardi Khalik Ramadhan</h1>
                    <p class="hero-subtitle"><span class="typed" data-typed-items="My Projects"></span></p>
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
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/interio.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/interio.png" alt="" class="img-fluid gambar">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Interio</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UIUX Web Design</span> / <span class="w-date">18 Sep.
                                            2018</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/mony.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/mony.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Mony</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UIUX Mobile Design</span> / <span class="w-date">18
                                            Sep.
                                            2018</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/story.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/story.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Story</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UIUX Mobile Design</span> / <span class="w-date">18
                                            Sep.
                                            2018</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/personal.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/personal.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Personal Website</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UIUX Web Design</span> / <span class="w-date">18 Sep.
                                            2018</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/abdimas.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/abdimas.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Abdimas UMKM - Laravel</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Fullstack Web Development</span> / <span class="w-date">18
                                            Sep.
                                            2017</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/personal-website.png" data-gallery="portfolioGallery"
                            class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/personal-website.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Personal Website - React JS</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Front-end Web Development</span> / <span class="w-date">18
                                            Sep.
                                            2017</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/menty.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/menty.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Menthy - React JS</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Front-end Web Development</span> / <span class="w-date">18
                                            Sep.
                                            2017</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/harmoni.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/harmoni.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Harmoni Interior</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Front-end Web Development</span> / <span class="w-date">18
                                            Sep.
                                            2018</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/bengkelin.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/bengkelin.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Bengkelin - Laravel</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Fullstack Web Development</span> / <span class="w-date">18
                                            Sep.
                                            2017</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/pos.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/pos.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Point Of Sales (POS) - Laravel</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Fullstack Web Development</span> / <span class="w-date">18
                                            Sep.
                                            2017</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="work-box">
                        <a href="assets/img/personal.png" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/personal.png" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Personal Website - Laravel</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Fullstack Web Development</span> / <span class="w-date">18
                                            Sep.
                                            2017</span>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
@endsection
