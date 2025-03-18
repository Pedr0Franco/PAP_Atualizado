@extends('layouts.outer')
@section('content')
    <style>
        /* Black theme adjustments */
        body {
            background-color: #121212;
            color: #fff;
        }

        header,
        .footer-area {
            background-color: #1c1c1c;
        }

        .main-menu a,
        .footer-menu a {
            color: #fff;
        }

        .hero-cap h2 {
            color: #fff;
        }

        .contact-title {
            color: #fff;
        }

        .form-control {
            background-color: #333;
            color: #fff;
            border: 1px solid #444;
        }

        .button-contactForm {
            background-color: #5fa7f9;
            color: #fff;
        }

        .footer-logo img {
            filter: brightness(0) invert(1);
        }

        .footer-social a {
            color: #fff;
        }

        .footer-social a:hover {
            color: #5fa7f9;
        }

        .single-footer-caption {
            color: #fff;
        }

        .footer-copy-right p {
            color: #777;
        }

        .contact-info__icon {
            color: #5fa7f9;
        }
    </style>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Entra em Contacto</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Mantem Contacto</h2>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-contact contact_form" action="contact_process.php" method="post"
                                id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="name" id="name" type="text"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid" name="email" id="email" type="email"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" id="subject" type="text"
                                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                                placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3 style="color: #fff;">Pavilhão Rainha do Leonor .</h3>
                                    <p style="color: #fff;">Caldas da Rainha</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <h3 style="color: #fff;">(+351) XXX XXX XXX</h3>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <p style="color: #fff;">barwings@gmail.com</p>
                                    <p style="color: #fff;">Manda mensagem em caso de duvida</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Contact Area End -->
        <!-- ? services-area -->
        <section class="services-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Localização</h3>
                                <p>Pavilhão Rainha do Leonor </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>telemovel</h3>
                                <p>(+351) XXX XXX XXX</p>
                                <p> (+351) XXX XXX XXX</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Email</h3>
                                <p>barwings@gmail.com</p>
                                <p>@</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
