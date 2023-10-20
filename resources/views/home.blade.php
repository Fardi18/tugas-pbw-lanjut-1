@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/Mercusuar.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">Fardi Khalik Ramadhan</h1>
                    <p class="hero-subtitle"><span class="typed"
                            data-typed-items="UIUX Designer, Web Developer, Freelancer"></span></p>
                    <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn
                            More</a></p>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <main id="main">
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
                                            <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Web Design</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Back-end Web Development</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Front-end Web Development</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
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
                                            Saya memiliki ketertarikan pada bidang UIUX Design dan web Development baik itu
                                            Front-end, Back-end maupun Fullstack Web development
                                        </p>
                                        <p class="lead">
                                            Pada UIUX Design, saya biasa menggunakan tool Figma atau Adobe XD dan tools
                                            penunjang lainnya seperti Whymsical, Miro, dll. Pada bidang Wweb Development,
                                            saya biasa menggunakan library React JS untukl Front-end dan framework Laravel
                                            untuk Back-end maupun Fullstack
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

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
                                    Membantu Anda dalam membuat desain UIUX yang baik dan menarik untuk aplikasi website
                                    maupun
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
                                    Membantu Anda untuk membuat website dengan baik itu Front-end, Back-end maupun Fullstack
                                    Web
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
                                            <span class="w-ctegory">Front-end Web Development</span> / <span
                                                class="w-date">18 Sep.
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
                                            <span class="w-ctegory">Front-end Web Development</span> / <span
                                                class="w-date">18 Sep.
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
                <div class="row">
                    <div class="col mx-auto">
                        <p class="pt-3 text-center"><a class="btn btn-primary btn js-scroll px-4" href="/portofolio"
                                role="button">Lihat Semua</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

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
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Travel</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="assets/img/aing.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">Fardi Khalik Ramadhan</span>
                                    </a>
                                </div>
                                {{-- <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Web Design</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="assets/img/aing.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">Fardi Khalik Ramadhan</span>
                                    </a>
                                </div>
                                {{-- <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Web Design</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="assets/img/aing.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">Fardi Khalik Ramadhan</span>
                                    </a>
                                </div>
                                {{-- <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style="background-image: url(assets/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Send Message Us
                                            </h5>
                                        </div>
                                        <div>
                                            <form action="forms/contact.php" method="post" role="form"
                                                class="php-email-form">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control"
                                                                id="name" placeholder="Your Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Your Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="Subject" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center my-3">
                                                        <div class="loading">Loading</div>
                                                        <div class="error-message"></div>
                                                        <div class="sent-message">Your message has been sent. Thank
                                                            you!</div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit"
                                                            class="button button-a button-big button-rouded">Send
                                                            Message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Get in Touch
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <p class="lead">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum
                                                dolorem soluta quidem
                                                expedita aperiam aliquid at.
                                                Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione
                                                nobis
                                                mollitia inventore?
                                            </p>
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span> 329 WASHINGTON ST BOSTON, MA
                                                    02108</li>
                                                <li><span class="bi bi-phone"></span> (617) 557-0089</li>
                                                <li><span class="bi bi-envelope"></span> contact@example.com</li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-facebook"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-instagram"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-twitter"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-linkedin"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
