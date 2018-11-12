<section class="iq-breadcrumb overview-block-pt text-center jarallax iq-over-blue-90" data-jarallax-video="mp4:/assets/front/video/studying.mp4" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="heading-title white iq-breadcrumb-title iq-mtb-100">
                    <h1 class="title iq-tw-7"><?= $page['title'] ?></h1>
                    <p class="iq-font-white"><?= $page['description'] ?></p>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?= $page['section_url'] ?>"><?= $page['section_name'] ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>