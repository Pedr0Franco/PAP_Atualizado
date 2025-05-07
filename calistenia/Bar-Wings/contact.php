<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bar-Wings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/loder.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        body {
            background-color: #121212;
            color: #fff;
        }
        header, .footer-area {
            background-color: #1c1c1c;
        }
        .main-menu a, .footer-menu a {
            color: #fff;
        }
        .hero-cap h2, .contact-title, .single-footer-caption {
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
        .footer-copy-right p {
            color: #777;
        }
        .contact-info__icon {
            color: #5fa7f9;
        }
        .contact-section {
            padding: 30px 15px;
        }
    </style>

    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LesfiIrAAAAAJ9s2T8Gs0WmH8MWNZ6Zd-yBXS5U"></script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">Sobre</a></li>
                                    <li><a href="courses.html">Aulas</a></li>
                                    <li><a href="pricing.html">Preços</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.php">Contactos</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="contact.php" class="btn">Entra em Contacto</a>
                        </div>
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
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

        <!-- Contact Section -->
        <section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Entra em Contacto</h2>
            </div>
            <div class="col-lg-8">
                <div id="form-message" class="alert alert-success d-none" role="alert">
                    A tua mensagem foi enviada com sucesso! Obrigado pelo contacto.
                </div>
                <div id="form-error-message" class="alert alert-danger d-none" role="alert">
                    Houve um problema ao enviar a sua mensagem. Por favor, tente novamente.
                </div>

                <form class="form-contact contact_form" id="contactForm">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">O teu nome</label>
                                <input class="form-control valid" name="name" id="name" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control valid" name="email" id="email" type="email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="subject">Assunto (opcional)</label>
                                <input class="form-control" name="subject" id="subject" type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="message">Mensagem</label>
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/enterprise.js?render=6LesfiIrAAAAAJ9s2T8Gs0WmH8MWNZ6Zd-yBXS5U"></script>

<!-- AJAX & reCAPTCHA Handling -->
    </main>

    <!-- Footer -->
     <footer>
                <!--? Footer Start-->
                <div class="footer-area black-bg">
                    <div class="container">
                        <div class="footer-top footer-padding">
                            <!-- Footer Menu -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-footer-caption mb-50 text-center">
                                        <!-- logo -->
                                        <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                            <a href=" index.html"><img src="assets/img/logo/logoBW2.png" alt=""></a>
                                        </div>
                                        <!-- Menu -->
                                        <!-- Header Start -->
                                        <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s"
                                            data-wow-delay=".4s">
                                            <div class="main-header main-header2">
                                                <div class="menu-wrapper menu-wrapper2">
                                                    <!-- Main-menu -->
                                                    <div class="main-menu main-menu2 text-center">
                                                        <nav>
                                                            <ul>
                                                                <li><a href="index.html">Home</a></li>
                                                                <li><a href="about.html">Sobre</a></li>
                                                                <li><a href="courses.html">Aulas</a></li>
                                                                <li><a href="pricing.html">Preços</a></li>
                                                                <li><a href="blog.html">Blog</a>
                                                                <li><a href="contact.php">Contactos</a></li>

                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Header End -->
                                        <!-- social -->
                                        <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s"
                                            data-wow-delay=".8s">
                                            <a href="https://www.instagram.com/barwings.calisthenicsclub/         "><i
                                                    class="fab fa-instagram  "></i></a>
                                            <a href="https://www.facebook.com/barwings.calisthenicsclub/?locale=pt"><i
                                                    class="fab fa-facebook-f"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-xl-12">
                                    <div class="footer-copy-right text-center mb-30 wow fadeInUp" data-wow-duration="1s"
                                        data-wow-delay=".2s">
                                        <p>
                                            © Barwings, Todos os direitos reservados. Projetado por Tiago Almeida e Pedro
                                            Franco.
                                            Distribuído por barwings
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-12">
                                    <div class="footer-copy-right text-center">

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->
            </footer>

    <!-- Scroll to Top -->
    <div id="back-top">
        <a title="Go to Top" href="#"><i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS Scripts -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    <script src="./assets/js/gijgo.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <!-- Custom Script for reCAPTCHA -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const submitButton = e.target.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.textContent = 'A enviar...';

            grecaptcha.enterprise.ready(async () => {
                const token = await grecaptcha.enterprise.execute('6LesfiIrAAAAAJ9s2T8Gs0WmH8MWNZ6Zd-yBXS5U', { action: 'contact_form' });
                // Aqui você pode enviar o token junto com o formulário via AJAX ou incluir em input hidden
                e.target.submit();
            });
        });
    </script>
</body>

</html>
