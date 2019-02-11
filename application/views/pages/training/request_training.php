<section id="training_section" class="overview-block-ptb r-mt-40 ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title">
                    <h3 class="title iq-tw-7">Request Training</h3>
                </div>
            </div>
        </div>
        <form id="training_form" method="post">
            <div class="contact-form">
                <div class="section-field">
                    <input class="require_training" id="training_name" type="text" placeholder="Full Name*" name="name">
                </div>
                <div class="section-field">
                    <input class="require_training" id="training_email" type="email" placeholder="Email*" name="email">
                </div>
                <div class="section-field">
                    <input class="require_training" id="training_position" type="text" placeholder="Position Title - Superintendent, Teacher, Assessment Coordinator*" name="position">
                </div>
                <div class="section-field">
                    <input class="require_training" id="training_district" type="text" placeholder="District or Company*" name="district">
                </div>
                <div class="section-field">
                    <input class="require_training" id="phone_number" type="tel" placeholder="Phone Number - (555)-555-5555*" name="number">
                </div>
                <div class="section-field textarea">
                    <textarea id="contact_message" class="input-message require_training" placeholder="I am interested in training in the following areas:*" rows="5" name="message"></textarea>
                </div>
                <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Submit</button>
                <div id="success_training">
                </div>
            </div>
        </form>
    </div>
</section>