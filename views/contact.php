<?php include_once TEMPLATEPREFIX . 'header' . TEMPLATEPOSTFIX; ?>


    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(<?php echo TEMPLATEWEBPATH; ?>images/hotel4.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner slider-text-inner2 text-center">

                                    <h1>Contact Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h3>Contact Information</h3>
                    <div class="row contact-info-wrap">
                        <div class="col-md-3">
                            <p><span><i class="icon-location-2"></i></span> <p>Hermes Tirana Hotel <br> Address: Rr. Vaso Pasha Nr. 7
                                Tirana, Albania</p></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-phone3"></i></span> <p>Tel: <a href="tel:%2B355%20%280%29%2042231100">+355 (0) 42231100</a><br/>
                                Fax: <a href="tel:%2B355%20%280%29%2042251020">+355 (0) 42251020</a><br/>
                                Mob: <a href="tel:%2B%20355%20%280%29%20692702006">+ 355 (0) 692702006</a>
                            </p></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-paperplane"></i></span><p> <a href="mailto:info@hermestirana.com">info@hermestirana.com</a></p></p>
                        </div>
                        <div class="col-md-3">
                            <p><span><i class="icon-globe"></i></span><p> <a href="http://www.hermestirana.com/">hermestirana.com</a></p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h3>Get In Touch</h3>
                    <form action="contact-add.html" method="post">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname"  class="form-control" placeholder="Your firstname">
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname"  class="form-control" placeholder="Your lastname">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="text" name="email"  class="form-control" placeholder="Your email address">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject"  class="form-control" placeholder="Your subject of this message">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="message">Message</label>
                                <textarea name="message"  cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Send Message"  class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>




