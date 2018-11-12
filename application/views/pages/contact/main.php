<?php $params = array(); ?>
<section id="contact" class="iq-page-blog overview-block-ptb">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-md-8 col-sm-12 iq-amazing-tab white-bg">
              <?php $this->view('pages/contact/form',$params); ?>
            </div>
            <div class="col-md-4 col-sm-12">
              <?php $this->view('pages/contact/sidebar',$params); ?>
            </div>
        </div>
    </div>
</section>
<style>
.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,.5) !important;
}
</style>