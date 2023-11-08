@extends('user.layouts.app')

@section('title', 'About Me')

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/a.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">Fardi Khalik Ramadhan</h1>
                    <p class="hero-subtitle fs-4 mb-5 text-primary"><span class="typed" data-typed-items="About Me"></span>
                    </p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="assets/img/aing.jpg" class="img-fluid rounded b-shadow-a"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>Fardi Khalik Ramadhan</span>
                                            </p>
                                            <p><span class="title-s">Profile: </span> <span>Fullstack Web
                                                    Developer | UIUX Designer</span></p>
                                            <p><span class="title-s">Email: </span> <span>fardesign18@gmail.com</span>
                                            </p>
                                            <p><span class="title-s">Phone: </span> <span>+62 838-9142-8869</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Skill</p>
                                    <span>UIUX Design</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Web Design</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Back-end Web Development</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Front-end Web Development</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        Saya Fardi Khalik Ramadhan, mahasiswa program studi Teknik Informatika dari
                                        Institut Teknologi Indonesia
                                    </p>
                                    <p class="lead">
                                        Saya memiliki ketertarikan pada bidang UIUX Design dan Web Development baik itu
                                        Front-end, Back-end maupun Fullstack Web development
                                    </p>
                                    <p class="lead">
                                        Pada UIUX Design, saya biasa menggunakan tools Figma atau Adobe XD dan tools
                                        penunjang lainnya seperti Whymsical, Miro, dll. Pada bidang Web Development,
                                        saya biasa menggunakan library React JS untuk Front-end dan framework Laravel
                                        untuk Back-end maupun Fullstack
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
@endsection
