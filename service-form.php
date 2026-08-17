<form action="con.php" method="post" class="contactForm">
                        <div class="section-title two">
                            <h2>Get In Touch</h2>
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
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required data-error="Please enter your email">
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone"  pattern="[0-9]{4}[0-9]{3}[0-9]{3}" maxlength="10" id="phone_number" placeholder="Phone"  data-error="Please enter your number" class="form-control">
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="Subject"  data-error="Please enter your subject">
                                    <!--<div class="help-block with-errors"></div>-->
                                </div>
                            </div>
    
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message" data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
    
                           
                            
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn common-btn two">Send Message</button>
                                    <!--<div id="msgSubmit" class="h3 text-center hidden"></div>-->
                                    <!--<div class="clearfix"></div>-->
                                </div>
                            </div>

                        </div>
                    </form>