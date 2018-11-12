<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active show" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-bolt" aria-hidden="true"></i> <span>Sales Info</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-users" aria-hidden="true"></i><span>Customer Support</span></a>
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
                    <input class="require" id="contact_name" type="text" placeholder="Full Name*" name="name">
                </div>
                <div class="section-field">
                    <input class="require" id="contact_district" type="text" placeholder="District or Company*" name="district">
                </div>
                <div class="section-field">
                    <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                </div>
                <div class="section-field">
                    <input class="require" id="position_title" type="text" placeholder="Position Title - Superintendent, Teacher, Assessment Coordinator*" name="position">
                </div>
                <div class="section-field">
                    <input class="require" id="phone_number" type="tel" placeholder="Phone Number - (555)-555-5555*" name="number">
                </div>
                <div>
                    <p><b>I am interested in learning more about:</b></p>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="mileposts_box">
                            <label class="font-weight-normal text-dark" for="mileposts_button">Mileposts (Personalized Learning)</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="teacher_box">
                            <label class="font-weight-normal text-dark" for="teacher_box">Teacher Vitae (Instructional Effectiveness)</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="edify_box">
                            <label class="font-weight-normal text-dark" for="edify_box">EdifyAssess (Formative Assessments)</label>
                        </div>
                    </div>
                </div>
                <div class="required selection-field mb-3">
                    <p><b>How did you hear about us?</b></p>
                    <select id="inputState" class="form-control">
                        <option>Conference</option>
                        <option>Website</option>
                        <option>Email</option>
                        <option>Social Media</option>
                        <option>School District</option>
                        <option>Teacher</option>
                        <option>Referral</option>
                    </select>
                </div>
                <div class="section-field">
                    <input class="require" id="referral_info" type="text" placeholder="If this was a referral, please tell us who referred you.*" name="referral">
                </div>
                <div class="section-field">
                    <input class="require" id="how_can_we_help" type="text" placeholder="How can we help you?*" name="howcan">
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
                    <input class="require" id="contact_name" type="text" placeholder="Full Name*" name="name">
                </div>
                <div class="section-field">
                    <input class="require" id="contact_location" type="text" placeholder="Location (State)*" name="location">
                </div>
                <div class="section-field">
                    <input class="require" id="contact_district" type="text" placeholder="District*" name="district">
                </div>
                <div class="section-field">
                    <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                </div>
                <div class="selection-field mb-3">
                    <p><b>Product:</b></p>
                    <select id="inputState" class="form-control">
                        <option selected>Mileposts</option>
                        <option>Teacher Vitae</option>
                        <option>EdifyAssess</option>
                        <option>ParentPortal</option>
                    </select>
                </div>
                <div class="section-field textarea">
                    <p><b>Problem Description</b></p>
                    <textarea id="contact_message" class="input-message require" placeholder="*Please provide as many details as possible about the problem you are experiencing." rows="5" name="message"></textarea>
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