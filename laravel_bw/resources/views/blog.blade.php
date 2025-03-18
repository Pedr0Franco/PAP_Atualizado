@extends('layouts.outer')
@section('content')
    <style>
        div.blog_item_img {
            width: 100%;
            height: 100%;
        }

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
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/bw_battles.jpg" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>21</h3>
                                        <p>Dez</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block">
                                        <h1 class="blog-head" style="color: gray;">Bar-Wings fecha época desportiva
                                        </h1>
                                    </a>
                                    <p style="color: #fff;">No passado dia 21, o clube de calistenia das Caldas da
                                        Rainha promoveu uma competição amigável entre 22 atletas de todos os escalões e
                                        de
                                        vários pontos do pais.</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets\img\blog\BarWings Championship.png"
                                        alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>13</h3>
                                        <p>Jul</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block">
                                        <h1 class="blog-head" style="color: gray;">Bar-Wings championship</h1>
                                    </a>
                                    <p style="color: #ffff;">Decorreu sábado, 13
                                        de julho, o Bar-Wings Sets N' Reps
                                        Championship 2024, a terceira edição
                                        do campeonato anual de calistenia de Strength e Endurance,
                                        que contou com a participação
                                        de alguns dos melhores atletas do
                                        país da modalidade e foi dividido
                                        nas provas Strength, Endurance
                                        Base e Endurance Battles.

                                        ○ Bar-Wings participou com
                                        15 atletas: Afonso Moldes, Beatriz Lopes, Diogo Chaves, Diogo
                                        Miguel, Francisco Cardeal, Francisco Custódio, Francisco Russo,
                                        Gustavo Dias, Iúri Lage, Jéni Lage,
                                        Kate Mercurio, João Domingos,
                                        Pedro Franco, Rafael Rego e Tomás
                                        Ferreira.

                                        Afonso Moldes foi vencedor da
                                        prova de Endurance Base na categoria de pesos médios e finalista
                                        das Endurance Battles.

                                        Beatriz Lopes fez uma ótima estreia em competição e alcançou
                                        2 medalhas de bronze nas provas
                                        de Endurance.

                                        Diogo Chaves alcançou o 3° lugar
                                        na sua primeira prova de Strength
                                        na categoria de pesos médios.

                                        Diogo Miguel alcançou o 2° lugar
                                        na prova de Strength no escalão de
                                        pesos pesados e obteve o 3° lugar
                                        overall dessa mesma prova.

                                        Francisco Custódio voltou a
                                        competir após uma interrupção
                                        competitiva e obteve a medalha
                                        de prata na prova de Strength na
                                        categoria de pesos leves.

                                        Iúri Lage conseguiu pelo 3° ano
                                        consecutivo obter o 1° lugar em
                                        Endurance Base na sua respetiva categoria.</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Bar-Wings</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> </a></li>
                                    </ul>
                                </div>

                            </article>

                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/single_blog_3.png" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey
                                            office</h2>
                                    </a>
                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is
                                        that
                                        he earth it first without heaven in place seed it second morning saying.</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/single_blog_4.png" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey
                                            office</h2>
                                    </a>
                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is
                                        that
                                        he earth it first without heaven in place seed it second morning saying.</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/single_blog_5.png" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey
                                            office</h2>
                                    </a>
                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is
                                        that
                                        he earth it first without heaven in place seed it second morning saying.</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <!---
                                                                                                                                                                                <aside class="single_sidebar_widget search_widget">
                                                                                                                                                                                    <form action="#">
                                                                                                                                                                                        <div class="form-group">
                                                                                                                                                                                            <div class="input-group mb-3">
                                                                                                                                                                                                <input type="text" class="form-control" placeholder='Search Keyword'
                                                                                                                                                                                                    onfocus="this.placeholder = ''"
                                                                                                                                                                                                    onblur="this.placeholder = 'Search Keyword'">
                                                                                                                                                                                                <div class="input-group-append">
                                                                                                                                                                                                    <button class="btns" type="button"><i class="ti-search"></i></button>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                                                                                                                                                                            type="submit">Search</button>
                                                                                                                                                                                    </form>

                                                                                                                                                                                </aside>
                                                                                                                                                                                <aside class="single_sidebar_widget post_category_widget">
                                                                                                                                                                                    <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                                                                                                                                                                    <ul class="list cat-list">
                                                                                                                                                                                        <li>
                                                                                                                                                                                            <a href="#" class="d-flex">
                                                                                                                                                                                                <p>Resaurant food</p>
                                                                                                                                                                                                <p>(37)</p>
                                                                                                                                                                                            </a>
                                                                                                                                                                                        </li>
                                                                                                                                                                                        <li>
                                                                                                                                                                                            <a href="#" class="d-flex">
                                                                                                                                                                                                <p>Travel news</p>
                                                                                                                                                                                                <p>(10)</p>
                                                                                                                                                                                            </a>
                                                                                                                                                                                        </li>
                                                                                                                                                                                        <li>
                                                                                                                                                                                            <a href="#" class="d-flex">
                                                                                                                                                                                                <p>Modern technology</p>
                                                                                                                                                                                                <p>(03)</p>
                                                                                                                                                                                            </a>
                                                                                                                                                                                        </li>
                                                                                                                                                                                        <li>
                                                                                                                                                                                            <a href="#" class="d-flex">
                                                                                                                                                                                                <p>Product</p>
                                                                                                                                                                                                <p>(11)</p>
                                                                                                                                                                                            </a>
                                                                                                                                                                                        </li>
                                                                                                                                                                                        <li>
                                                                                                                                                                                            <a href="#" class="d-flex">
                                                                                                                                                                                                <p>Inspiration</p>
                                                                                                                                                                                                <p>21</p>
                                                                                                                                                                                            </a>
                                                                                                                                                                                        </li>
                                                                                                                                                                                        <li>
                                                                                                                                                                                            <a href="#" class="d-flex">
                                                                                                                                                                                                <p>Health Care (21)</p>
                                                                                                                                                                                                <p>09</p>
                                                                                                                                                                                            </a>
                                                                                                                                                                                        </li>
                                                                                                                                                                                    </ul>
                                                                                                                                                                                </aside>

                                                                                                                                                                                    <aside class="single_sidebar_widget popular_post_widget">
                                                                                                                                                                                        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                                                                                                                                                                                        <div class="media post_item">
                                                                                                                                                                                            <img src="assets/img/post/post_1.png" alt="post">
                                                                                                                                                                                            <div class="media-body">
                                                                                                                                                                                                <a href="blog_details.html">
                                                                                                                                                                                                    <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                                                                                                                                                                                </a>
                                                                                                                                                                                                <p>January 12, 2019</p>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="media post_item">
                                                                                                                                                                                            <img src="assets/img/post/post_2.png" alt="post">
                                                                                                                                                                                            <div class="media-body">
                                                                                                                                                                                                <a href="blog_details.html">
                                                                                                                                                                                                    <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                                                                                                                                                                                                </a>
                                                                                                                                                                                                <p>02 Hours ago</p>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="media post_item">
                                                                                                                                                                                            <img src="assets/img/post/post_3.png" alt="post">
                                                                                                                                                                                            <div class="media-body">
                                                                                                                                                                                                <a href="blog_details.html">
                                                                                                                                                                                                    <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                                                                                                                                                                                                </a>
                                                                                                                                                                                                <p>03 Hours ago</p>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="media post_item">
                                                                                                                                                                                            <img src="assets/img/post/post_4.png" alt="post">
                                                                                                                                                                                            <div class="media-body">
                                                                                                                                                                                                <a href="blog_details.html">
                                                                                                                                                                                                    <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                                                                                                                                                                                                </a>
                                                                                                                                                                                                <p>01 Hours ago</p>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </aside>
                                                                                                                                                                                    <aside class="single_sidebar_widget tag_cloud_widget">
                                                                                                                                                                                        <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
                                                                                                                                                                                        <ul class="list">
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">project</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">love</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">technology</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">travel</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">restaurant</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">life style</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">design</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">illustration</a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                        </ul>
                                                                                                                                                                                    </aside>

                                                                                                                                                                                    <aside class="single_sidebar_widget instagram_feeds">
                                                                                                                                                                                        <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
                                                                                                                                                                                        <ul class="instagram_row flex-wrap">
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">
                                                                                                                                                                                                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                                                                                                                                                                                </a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">
                                                                                                                                                                                                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                                                                                                                                                                                </a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">
                                                                                                                                                                                                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                                                                                                                                                                                </a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">
                                                                                                                                                                                                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                                                                                                                                                                                </a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">
                                                                                                                                                                                                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                                                                                                                                                                                </a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                            <li>
                                                                                                                                                                                                <a href="#">
                                                                                                                                                                                                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                                                                                                                                                                                </a>
                                                                                                                                                                                            </li>
                                                                                                                                                                                        </ul>
                                                                                                                                                                                    </aside>

                                                                                                                                                                                    <aside class="single_sidebar_widget newsletter_widget">
                                                                                                                                                                                        <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                                                                                                                                                                                        <form action="#">
                                                                                                                                                                                            <div class="form-group">
                                                                                                                                                                                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                                                                                                                                                                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email'
                                                                                                                                                                                                    required>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                                                                                                                                                                                type="submit">Subscribe</button>
                                                                                                                                                                                        </form>
                                                                                                                                                                                    </aside>
                                                                                                                                                                                -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!-- ? services-area -->
        <section class="services-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">

                            </div>
                            <div class="features-caption">
                                <h3>Localizaçaõ/<h3>
                                        <p>Pavilhão Rainha do Leonor </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">

                            </div>
                            <div class="features-caption">
                                <h3>Phone</h3>
                                <p>(+351) XXX XXX XXX</p>
                                <p>(+351) XXX XXX XXX</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40">
                            <div class="features-icon">

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
