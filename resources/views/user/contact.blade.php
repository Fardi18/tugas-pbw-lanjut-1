@extends('user.layouts.app')

@section('title', 'Contact Me')

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
                            data-typed-items="Contact Me"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Send Message For Me
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
                                                        class="button button-a button-big button-rouded">Kirim
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Let’s start project together?
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            Contact me for questions, collaboration, conversation or just saying hello.
                                            Thank you for stopping by here,
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="bi bi-geo-alt"></span> Legok, Kabupaten Tangerang, Banten,
                                                15820</li>
                                            <li><span class="bi bi-phone"></span> +62 838-9142-8869</li>
                                            <li><span class="bi bi-envelope"></span> fardesign18@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="https://www.instagram.com/fardi_nasution/"><span
                                                        class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                                            <li><a href="https://github.com/Fardi18"><span class="ico-circle"><i
                                                            class="bi bi-github"></i></span></a></li>
                                            <li><a href="https://www.linkedin.com/in/fardi-khalik-ramadhan/"><span
                                                        class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
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
@endsection
