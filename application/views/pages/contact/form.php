<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="home" aria-selected="true"><i aria-hidden="true" class="ion-monitor"></i><span>Sales Info</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="profile" aria-selected="false"><i aria-hidden="true" class="ion-ipad"></i><span>Customer Support</span></a>
    </li>
</ul>
<div class="tab-content iq-mt-50" id="myTabContent">
  <div class="tab-pane fade show active" id="sales" role="tabpanel" aria-labelledby="sales-tab">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading-title">
          <h3 class="title iq-tw-7">Sales Information</h3>
          <p>If you are interested in learning more about our products.</p>
        </div>
      </div>
    </div>
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
              <div class="g-recaptcha" data-sitekey="6Lc5XV4UAAAAAJzUmGomye9Peru8lXyzT22FH0lX"></div>
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
  <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading-title">
          <h3 class="title iq-tw-7">Customer Support</h3>
          <p>If you are an existing customer and need help with our products, your reports or have a technical question.</p>
        </div>
      </div>
    </div>
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
              <div class="g-recaptcha" data-sitekey="6Lc5XV4UAAAAAJzUmGomye9Peru8lXyzT22FH0lX"></div>
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