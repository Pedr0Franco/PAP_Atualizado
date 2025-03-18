@extends('layouts.outer')
@section('content')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <img src="assets/img/gallery/" alt="">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Traning categories Start -->

        <!-- Traning categories End-->
        <!--? Team -->
        <section class="team-area fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <h2>Um Pouco de Nós</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area section-padding30 ">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/Iuri.png);">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p>Treinador</p>
                                    <h3>Iuri Lage</h3>
                                    <a href="#" data-toggle="modal" data-target="#modaliuri"><i
                                            class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modaliuri" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalCenterTitle">Iuri</h3>
                                    <button type="button" class="close" style="font-size: 30px;" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/diogo.png);">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p>Treinador</p>
                                    <h3>Diogo Miguel</h3>
                                    <a href="#" data-toggle="modal" data-target="#modaldiogo"><i
                                            class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modaldiogo" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalCenterTitle">Diogo</h3>
                                    <button type="button" class="close" style="font-size: 30px;" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/catarina.png);">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p>Treinadora</p>
                                    <h3>Catarina Norte</h3>
                                    <a href="#" data-toggle="modal" data-target="#modalcatarina"><i
                                            class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalcatarina" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalCenterTitle">Catarina</h3>
                                    <button type="button" class="close" style="font-size: 30px;" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/andre.png);">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p>Treinador</p>
                                    <h3>André Nascimento</h3>
                                    <a href="#" data-toggle="modal" data-target="#modalandre"><i
                                            class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalandre" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalCenterTitle">André</h3>
                                    <button type="button" class="close" style="font-size: 30px;" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/gallery5.png);">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p>Aluno do mês</p>
                                    <h3>Rafael Rego</h3>
                                    <a href="#" data-toggle="modal" data-target="#modalaluno"><i
                                            class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalaluno" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalCenterTitle">Aluno do Mês</h3>
                                    <button type="button" class="close" style="font-size: 30px;" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(assets/img/gallery/gallery6.png);">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <p>Ultimo Evento</p>
                                    <h3>Bar-Wings championship</h3>
                                    <a href="#" data-toggle="modal" data-target="#modalevento"><i
                                            class="ti-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalevento" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalCenterTitle">Evento</h3>
                                    <button type="button" class="close" style="font-size: 30px;" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!-- Courses area start -->
        <section class="pricing-area section-padding40 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay=".1s">

        </section>
        <!-- Courses area End -->
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding pt-50 pb-80">
            <div class="support-wrapper align-items-center">
                <div class="right-content2">
                    <!-- img -->
                    <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <img src="assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text">
                            <h2 class="">Sobre nós</h2>
                            <p>Bar Wings é um ginásio de calistenia que tem como objetivo ajudar os seus clientes a
                                atingir os seus objetivos</p>
                            </p>
                            <p class="mb-40">

                            </p>
                            <a href="courses.html" class="border-btn">Nossas Aulas</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area pt-10 pb-50">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay=".2s">
                            <h2>Notícias</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog1.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <span>Requisitos </span>
                                    <h3><a href="blog_details.html">18ª edição dos Requisitos do Bar-Wings</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog2.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <span>Futuro Evento</span>
                                    <h3><a href="blog_details.html"></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? video_start -->

        <!-- video_end -->
        <!-- ? services-area -->
        <section class="services-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="features-icon">

                            </div>
                            <div class="features-caption">
                                <h3>Localização</h3>
                                <p>Pavilhão Rainha Dona Leonor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="features-icon">

                            </div>
                            <div class="features-caption">
                                <h3>Telemovel</h3>
                                <p>(+351) XXX XXX XXX</p>
                                <p> (+351) XXX XXX XXX</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
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
