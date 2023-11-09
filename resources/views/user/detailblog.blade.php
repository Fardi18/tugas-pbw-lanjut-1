@extends('user.layouts.app')

@section('title', 'Detail Blog')

@section('content')
    <div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="hero-title mb-4">Blog Details</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="main">

        <!-- ======= Blog Single Section ======= -->
        <section class="blog-wrapper sect-pt4" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-box">
                            <div class="post-thumb">
                                <img src="assets/img/post-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="post-meta">
                                <h1 class="article-title">{{ $blog->title }}</h1>
                                <ul>
                                    <li>
                                        <span class="bi bi-person"></span>
                                        <a href="">Fardi Khalik Ramadhan</a>
                                    </li>
                                    <li>
                                        <span class="bi bi-tag"></span>
                                        <a href="">{{ $blog->blogcategory->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="article-content">
                                <p>
                                    {!! $blog->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget-sidebar">
                            <h5 class="sidebar-title">Recent Post</h5>
                            <div class="sidebar-content">
                                <ul class="list-sidebar">
                                    @foreach ($blogs as $item)
                                        <li>
                                            <a href="/blog/{{ $item->id }}">{{ $item->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget-sidebar widget-tags">
                            <h5 class="sidebar-title">Category</h5>
                            <div class="sidebar-content">
                                @foreach ($blogcategories as $blogcategory)
                                    <p class="btn btn-sm btn-primary">{{ $blogcategory->name }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
