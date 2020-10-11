<?php
/*
Template Name: Contact

*/
?>
<?php get_header(); ?>

            <div id="contact">
                <div id="contact-content">
                    <div class="contact-grid">
                        <div class="contact-form-details wow fadeIn">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-title text-center wow fadeIn">
                                            <h3>Contact</h3>
                                            <div class="underline1"></div>
                                            <div class="underline2"></div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam.</p>
                                        </div><!-- end testimonial-title  --> 
                                    </div><!-- end col-md-12  -->
                                </div><!-- end row  -->
                                <div class="row contact-row">
                                    <div class="col-md-8 col-md-offset-2 col-sm-12 contact-col wow fadeIn">
                                        <div class="contact-form">
                                            <form id="contactForm" class="contact-form shake" data-toggle="validator">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end controls -->
                                                </div><!-- end form-group -->
                                                <button type="submit" id="submit" class="btn btn-success text-center"> Send Message</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div>   
                                            </form> 
                                        </div><!-- end contact-form -->
                                    </div><!-- end col-md-6 -->
                                </div><!-- end row -->
                                <div class="row contact-info-row text-center">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="info-details">
                                            <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
                                            <h3>Email</h3>
                                            <p>omarfaruk2y2@gmail.com</p>
                                        </div><!-- end info-details  -->
                                    </div><!-- end col-md-4  -->
                                    <div class="col-md-4 col-sm-4">
                                        <div class="info-details">
                                            <i class="fa fa-phone contact-icon" aria-hidden="true"></i>
                                            <h3>Phone</h3>
                                            <p>+8801762139797</p>
                                        </div><!-- end info-details  -->
                                    </div><!-- end col-md-4  -->
                                    <div class="col-md-4 col-sm-4">
                                        <div class="info-details">
                                            <i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>
                                            <h3>Address</h3>
                                            <p>Mirpur,Dhaka</p>
                                        </div><!-- end info-details  -->
                                    </div><!-- end col-md-4  -->
                                </div><!-- end row  -->
                            </div><!-- end container -->
                        </div><!-- end contact-form-details -->

<?php get_footer(); ?>