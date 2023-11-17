@extends('user.layouts.app')

@section('title', 'My Blogs')

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/a.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">Fardi Khalik Ramadhan</h1>
                    <p class="hero-subtitle fs-4 mb-5 text-primary"><span class="typed" data-typed-items="My Blogs"></span>
                    </p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Blog
                        </h3>
                        <p class="subtitle-a">
                            My Blogs
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="/blog/{{ $blog->id }}"><img src="{{ Storage::url($blog->image) }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">{{ $blog->blogcategory->name }}</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="/blog/{{ $blog->id }}"">{{ $blog->title }}</a></h3>
                                <p class="card-description">
                                    {{ $blog->description }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="">
                                        <img src="assets/img/aing.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">Fardi Khalik Ramadhan</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
@endsection
