@extends('user.layouts.app')

@section('title', 'Detail Project')

@section('content')
    <!-- ======= Hero Section ======= -->
    <div class="hero hero-single route bg-image" style="background-image: url(assets/img/a.jpg)">
        <div class="overlay-mf"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="hero-title mb-4">Portfolio Details</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Portfolio Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- ======= Portfolio Section ======= -->
    <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider pb-5">
                            <div class="swiper-wrapper align-items-center">
                                <img src="{{ Storage::url($porto->image) }}" alt="">
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info pb-5">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Project Name</strong>: <br> {{ $porto->name }}</li>
                                <li><strong>Project Category</strong>: <br> {{ $porto->portocategory->name }}</li>
                                <li><strong>Project date</strong>: <br> {{ $porto->tanggal }}</li>
                                <li><strong>Project Description</strong>: <br> {{ $porto->description }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->
    <!-- End Portfolio Section -->
@endsection
