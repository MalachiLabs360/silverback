<footer>
    <!-- Footer Info -->
    <?php 
    $class_name = $this->router->fetch_class();
    if ($class_name != 'contact') {
     ?>
    <section id="contact-us" class="footer-info footer-form white-bg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 col-lg-4">
                    <div class="iq-get-in">
                        <h4 class="iq-tw-7 iq-mb-20">Get in Touch</h4>
                        <div id="formmessage">Success/Error Message Goes Here</div>
                        <form id="contact" method="post">
                            <div class="contact-form">
                                <div class="section-field">
                                    <input class="require" id="contact_name" type="text" placeholder="Name*" name="name">
                                </div>
                                <div class="section-field">
                                    <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                                </div>
                                <div class="section-field">
                                    <input class="require" id="contact_phone" type="text" placeholder="Phone*" name="phone">
                                </div>
                                <div class="section-field textarea">
                                    <textarea id="contact_message" class="input-message require" placeholder="Comment*" rows="5" name="message"></textarea>
                                </div>
                                <div class="section-field iq-mt-20">
                                    <div class="g-recaptcha" data-sitekey="6LcUNXoUAAAAAAWrvZjMng4XZolrL8EOHqUFvlZT"></div>
                                </div>
                                <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Send Message</button>
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
                                    <strong>Thank You, Your message has been received.</strong>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=2963%20E%20Copper%20Point%20Dr%2C%20Meridian%2C%20ID%2083642&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> -->
    </section>
    <section class="footer-info iq-pt-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 r-mt-30">
                    <div class="iq-footer-box text-left">
                        <div class="iq-icon">
                            <i aria-hidden="true" class="ion-ios-location-outline"></i>
                        </div>
                        <div class="footer-content">
                            <h4 class="iq-tw-6 iq-pb-10">Address</h4>
                            <p>2963 E. Copper Point Drive, Suite 150, Meridian, Idaho 83642</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 r-mt-30">
                    <div class="iq-footer-box text-left">
                        <div class="iq-icon">
                            <i aria-hidden="true" class="ion-ios-telephone-outline"></i>
                        </div>
                        <div class="footer-content">
                            <h4 class="iq-tw-6 iq-pb-10">Phone</h4>
                            <p>Toll Free: 855-258-2581
                                Direct: 208-258-2580
                                <br>Mon-Fri 8:00am - 8:00pm
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 r-mt-30">
                    <div class="iq-footer-box text-left">
                        <div class="iq-icon">
                            <i aria-hidden="true" class="ion-ios-email-outline"></i>
                        </div>
                        <div class="footer-content">
                            <h4 class="iq-tw-6 iq-pb-10">Mail</h4>
                            <p>contact@silverback.com
                                <br>24 X 7 online support
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-center">
                    <ul class="info-share">
                        <li><a href="https://twitter.com/SilverbackLS"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/silverbacklearning/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/+Silverbacklearning"><i class="fa fa-google"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/silverback-learning-solutions/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php 
    } 
    ?>
    <section class="footer-info iq-pt-60">
      <div class="text-center grey-bg">
          <div class="footer-copyright iq-ptb-20">© Copyright 2018 Silverback Learning.</div>
      </div>
    </section>

</footer>

<div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
</div>