@extends('layouts.outer')
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Courses</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Team -->
        <section class="team-area fix section-">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55">
                            <h2>Nós temos a oferecer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team1.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Treino de Resistencia</a></h5>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Treino de Força</a></h5>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team3.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Weight Loss</a></h5>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!-- Traning categories Start -->
        <section class="traning-categories black-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/cat1.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3>Personal traning</h3>
                                        <p>
                                        </p>
                                        <a href="courses.html" class="border-btn">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/cat2.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3>Group traning</h3>
                                        <p>
                                        </p>
                                        <a href="courses.html" class="btn">View Courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Traning categories End-->
        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-center" data-background="assets/img/gallery/video-bg.png">
            <div class="container">
                <div class="video-wrap position-relative">
                    <div class="video-icon">
                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->
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
                                <h3>Telemovel</h3>
                                <p>(+351) XXX XXX XXX</p>
                                <p>(+351) XXX XXX XXX</p>
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
