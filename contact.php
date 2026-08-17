     <?php include('header.php');?>
        <!-- Page Title -->
        <div class="page-title-wrap">
            <div class="page-title-area title-img-five">
                <div class="title-shape">
                    <img src="assets/images/title/title-shape1.png" alt="Shape">
                </div>
                <div class="d-table">
                    <div class="d-table-cell">
    
                        <div class="title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>Contact</span>
                                </li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact Info -->
        <div class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-lg-6">
                        <div class="contact-info-item">
                            <h3>Madhapur, Hyderabad</h3>
                            <p>5th Floor, Jayashuda Heights 100 FT Road, Ayappa Society Madhapur, Hyderabad-81</p>
                            <ul>
                                <li>
                                    <a href="tel:+91 8977277299"><i class="bx bx-phone-call"></i>  89-772-772-99</a>
                                </li>
                                 <li>
                                    <a href="mailto:nyraskincare3456@gmail.com"><i class="bx bx-mail-send"></i> nyraskincare3456@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="contact-info-item active">
                            <h3>Kokapet, Hyderabad</h3>
                            <p class="text-white">Unit, No.215, Kokapet One Mall, CBIT Road, Kokapet, Hyderabad-75, Telangana</p>
                            <ul>
                                <li>
                                     <a href="tel:+91 8977927200"><i class="bx bx-phone-call text-white"></i> +91 8977927200</a>
                                </li>
                                 <li>
                                    <a href="mailto:nyraskincare3456@gmail.com "> <i class="bx bx-mail-send text-white"></i> nyraskincare3456@gmail.com </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--<div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">-->
                    <!--    <div class="contact-info-item">-->
                    <!--        <h3>Email:</h3>-->
                    <!--        <ul>-->
                    <!--            <li>-->
                    <!--                <a href="mailto:sruthi.alla@gmail.com">sruthi.alla@gmail.com</a>-->
                    <!--            </li>-->
                                <!--<li>-->
                                <!--    <a href="mailto:info@jeel.com">info@jeel.com</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--    <a href="mailto:x@jeel.com">x@jeel.com</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--    <a href="mailto:y@jeel.com">y@jeel.com</a>-->
                                <!--</li>-->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->

                </div>
            </div>
        </div>
        <!-- End Contact Info -->

        <!-- Contact Form -->
        <div class="contact-form-area pb-100">
            <div class="container">
                <div class="form-item">
                    <div class="contact-shape">
                        <img src="assets/images/contact-shape1.png" alt="Shape">
                        <img src="assets/images/contact-shape2.png" alt="Shape">
                    </div>
                    
                    <form action="con.php" method="post" class="contactForm">
                        <div class="section-title two">
                            <h2>Book An Appointment</h2>
                        </div>
                        <div class="row">
    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email"  id="email" class="form-control" placeholder="Email" required data-error="Please enter your email">
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" placeholder="Phone"  data-error="Please enter your number" class="form-control">
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="Subject"  data-error="Please enter your subject">
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
                            
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="date" name="choose_date" id="date_choose" placeholder="Choose Date"  data-error="Please select the date" class="form-control">
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="form-group" >
                                      <select type="text" name="choose_timing" id="timing_choose" data-error="Please select the timing" class="form-control">
                                          <option value="">Select the timing slot</option>
                                          <option value="4:45 PM">4:45 PM</option>
                                          <option value="5:00 PM">5:00 PM</option>
                                          <option value="5:15 PM">5:15 PM</option>
                                          <option value="5:45 PM">5:45 PM</option>
                                          <option value="6:00 PM">6:00 PM</option>
                                          <option value="6:15 PM">6:15 PM</option>
                                          <option value="6:30 PM">6:30 PM</option>
                                          <option value="6:45 PM">6:45 PM</option>
                                          <option value="7:00 PM">7:00 PM</option>
                                          <option value="7:15 PM">7:15 PM</option>
                                          <option value="7:30 PM">7:30 PM</option>
                                          <option value="7:45 PM">7:45 PM</option>
                                       </select>
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message"></textarea>
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <!--<div class="col-lg-12">-->
                            <!--    <div class="form-check">-->
                            <!--        <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">-->
                            <!--        <label class="form-check-label" for="defaultCheck6">-->
                            <!--            Accept Terms of Services and Privacy Policy</a>-->
                            <!--        </label>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn common-btn two">Submit</button>
                                    <!--<div id="msgSubmit" class="h3 text-center hidden"></div>-->
                                    <!--<div class="clearfix"></div>-->
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- End Contact Form -->

        <!-- Map -->
        <div class="map-area pb-100">
            <div class="container">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30448.40258795453!2d78.36739992578546!3d17.457305323419135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91641a89bf35%3A0xb13918a21afcae8b!2sDr.%20Sruthi%20Alla&#39;s%20SKIN%20%26%20HAIR%20INC.!5e0!3m2!1sen!2sin!4v1638774889271!5m2!1sen!2sin"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!-- End Map -->

        <!-- Footer -->
        <?php include('footer.php');?>