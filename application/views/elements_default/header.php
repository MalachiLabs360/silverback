<?php $class_name = $this->router->fetch_class(); ?>
<?php $method_name = $this->router->fetch_method(); ?>

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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle drop" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                                <div id="dropdown_menu" class="dropdown-menu">
                                    <a id="dropdown_item" class="dropdown-item" href="/products/mileposts">Mileposts</a>
                                    <div class="dropdown-divider"></div>
                                    <a id="dropdown_item" class="dropdown-item" href="/products/teachervitae">Teacher Vitae</a>
                                    <div class="dropdown-divider"></div>
                                    <a id="dropdown_item" class="dropdown-item" href="/products/edifyassess">EdifyAssess</a>
                                </div>
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
        if ($method_name == 'our_story') {
          $this->view('elements_default/banners/others');
        } else {
          $this->view('elements_default/banners/about');
        }
        break;
    case 'news':
        $this->view('elements_default/banners/news');
        break;
    case 'training':
        $this->view('elements_default/banners/training');
        break;
    case 'contact':
        $this->view('elements_default/banners/contact');
        break;
    case 'products':
        if ($method_name == 'mileposts') {
          $this->view('elements_default/banners/mileposts');
        } elseif ($method_name == 'edifyassess') {
          $this->view('elements_default/banners/edifyassess');
        } elseif ($method_name == 'teachervitae') {
          $this->view('elements_default/banners/teachervitae');
        } else {
          $this->view('elements_default/banners/home');
        }
        break;
    default:
        $this->view('elements_default/banners/home');
}
?>