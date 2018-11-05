<?php $class_name = $this->router->fetch_class(); ?>
<div id="loading">
    <div id="loading-center">
        <div class="loader">
            <div class="cube">
                <div class="sides">
                    <div class="top"></div>
                    <div class="right"></div>
                    <div class="bottom"></div>
                    <div class="left"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<header id="main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/">
                            <img class="img-fluid" src="/assets/front/img/logo.png" alt="#">
                        </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ion-navicon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            <li class="nav-item">
                                <a class="<?= ($class_name == 'main' || $class_name == 'home') ? 'nav-link active' : 'nav-link' ?>" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?= ($class_name == 'about') ? 'nav-link active' : 'nav-link' ?>" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#software-features">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#great-screenshots">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pricing">Training</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?= $class_name == 'contact' ? 'nav-link active' : 'nav-link' ?>" href="/contact">Contact</a>
                            </li>
                        </ul>
                        <a href="#" class="button bt-black pull-right">Demo</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<!-- Banner -->
<section id="iq-home" class="iq-banner overview-block-pt iq-bg-over iq-over-blue-90 jarallax" data-jarallax-video="m4v:/assets/front/video/01.m4v,webm:/assets/front/video/01.webm,ogv:./video/01.ogv">
    <div class="container-fluid">
        <div class="banner-text">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="text-uppercase iq-font-white iq-tw-3">A <b class="iq-tw-7">360 degree solution</b> for education</h1>
                    <p class="iq-font-white iq-pt-15 iq-mb-40">Secure, cloud-based K-12 education platform available anywhere, anytime, from any web browser</p>
                    <div class="waves-box">
                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="iq-video popup-youtube"><i class="ion-ios-play-outline"></i></a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                    <a href="#" class="button bt-black iq-mt-5 iq-ml-40">Demo</a>
                </div>
                <div class="col-lg-6">
                    <img class="banner-img" src="/assets/front/images/banner/01.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="banner-objects">
        <span class="banner-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-50px);">
                <img src="/assets/front/images/drive/03.png" alt="drive02">
            </span>
        <span class="banner-objects-02 iq-fadebounce">
                <span class="iq-round"></span>
        </span>
        <span class="banner-objects-03 iq-fadebounce">
                <span class="iq-round"></span>
        </span>
    </div>
</section>