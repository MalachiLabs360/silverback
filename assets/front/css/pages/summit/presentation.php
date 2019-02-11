<section id="presentation" class="overview-block-ptb it-works">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="heading-title">
                    <h3 class="title iq-tw-7">Call For Presentations</h3>
                    <p class="font_size_20">Consider being a presenter at this year’s conference. Accepted presenters will receive free admission to Summit ’18. Submit session proposals on Teacher Vitae, Mileposts, and edifyAssess.</p>
                </div>
            </div>
            <button type="button" class="btn btn-success btn-lg" style="background: #7fc129; border-style: none;" data-toggle="modal" data-target="#submitProposalModel">
                Submit Proposals
            </button>

            <!-- Modal -->
            <div class="modal fade" id="submitProposalModel" tabindex="-1" role="dialog" aria-labelledby="model_center_title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-11 text-center">
                                        <img src="/assets/front/images/SBmaindark.png" style="width: 100px; height: 50px;">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div>
                                        <h5 class="modal-title">Summit '19 Request for Proposals</h5>
                                        <p>Please submit your session proposal here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form id="summit_form" method="post">
                                <div class="form-group">
                                    <div class="contact-form">
                                        <div class="section-field mt-2">
                                            <input class="require_summit" id="session_title" type="text" placeholder="Session Title*" name="title">
                                        </div>
                                        <div class="section-field textarea mb-4">
                                            <p><b>Session Description</b></p>
                                            <textarea id="require_description" class="input-message require_summit" placeholder="Please give a brief description*" rows="5" name="description"></textarea>
                                        </div>
                                        <div class="selection-field mb-4">
                                            <p class="mb-1"><b>Solution Focus: *</b></p>
                                            <p class="mb-1">Please tell us which product your session is focused on.</p>
                                            <select id="inputStateSummit" class="form-control" name="focus">
                                                <option value="Mileposts">Mileposts</option>
                                                <option value="Teacher Vitae">Teacher Vitae</option>
                                                <option value="EdifyAssess">EdifyAssess</option>
                                            </select>
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="text" placeholder="First Name (Presenter #1)*" name="presenter1FirstName">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="text" placeholder="Last Name (Presenter #1)*" name="presenter1LastName">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="text" placeholder="Professional Title (Presenter #1)*" name="presenter1Title">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="text" placeholder="School District (Presenter #1)*" name="presenter1SchoolDistrict">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="email" placeholder="Email (Presenter #1)*" name="presenter11Email">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="tel" placeholder="Mobile Phone (Presenter #1)*" name="presenter1Phone">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="text" placeholder="First Name (Presenter #2)*" name="presenter2FirstName">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="text" placeholder="Last Name (Presenter #2)*" name="presenter2LastName">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="text" placeholder="Professional Title (Presenter #2)*" name="presenter2Title">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="email" placeholder="Email (Presenter #2)*" name="presenter2Email">
                                        </div>
                                        <div class="section-field">
                                            <input class="require_summit" type="tel" placeholder="Mobile Phone (Presenter #2)*" name="presenter2Phone">
                                        </div>
                                        <div class="selection-field mb-3">
                                            <p><b>Do you agree to video taping and photography?*</b></p>
                                            <p>Some sessions will be video recorded and photos will be taken during the conference.
                                                We reserve the right to use the photos and the videos for marketing and
                                                communication purposes.</p>
                                            <div id="radio_group" class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="recordAgree" id="summitYesRadio" value="yes">
                                                    <label class="form-check-label " for="summitYesRadio">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="recordAgree" id="summitNoRadio" value="no">
                                                    <label class="form-check-label" for="summitNoRadio">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="yes" id="sendCopyCheckbox" name="sendCopy">
                                            <label class="form-check-label" for="sendCopyCheckbox">
                                                Send me a copy of my responses
                                            </label>
                                        </div>
                                        <button id="summit_submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Submit</button>
                                        <div id="success_summit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>