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
                                <a class="<?= ($class_name == 'main') ? 'nav-link active' : 'nav-link' ?>" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?= ($class_name == 'about') ? 'nav-link active' : 'nav-link' ?>" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?= ($class_name == 'products') ? 'nav-link active' : 'nav-link' ?>" href="/products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?= ($class_name == 'news') ? 'nav-link active' : 'nav-link' ?>" href="/news">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?= ($class_name == 'training') ? 'nav-link active' : 'nav-link' ?>" href="/training">Training</a>
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

<?php
switch ($class_name){
    case 'about':
        $this->view('elements_default/banner-about');
        break;
    case 'news':
        $this->view('elements_default/banner-news');
        break;
    case 'training':
        $this->view('elements_default/banner-training');
        break;
    case 'contact':
        $this->view('elements_default/banner-contact');
        break;
    default:
        $this->view('elements_default/banner');
}
?>