<?php require_once("header.php");?>
            <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/contact-us.png)">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    
            <!--Message Section-->
            <section class="message-section">
                <div class="auto-container">
                    <div class="sec-title">
                        <h2>Drop us messge for any query</h2>
                    </div>
                    <div class="row clearfix">

                        <!--Form Column-->
                        <div class="form-column col-md-8 col-sm-12 col-xs-12">
                            <div class="inner-column">

                                <!--Default Form-->
                                <div class="default-form">
                                    <form method="post" action="<?php echo BASE_PATH."/send.contact.php";?>" target="submitframe">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="firstname" value="" placeholder="Your name" required>
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="email" value="" placeholder="Your email address" required>
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="phone" value="" placeholder="Phone number" required>
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="subject" value="" placeholder="Subject" required>
                                            </div>

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <textarea name="message" placeholder="Type your massage here..."></textarea>
                                            </div>

                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <button type="submit" class="theme-btn btn-style-one">Submit now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End Contact Form-->

                            </div>
                        </div>
                        <!--Info Column-->
                        <div class="info-column col-md-4 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <h2>CONFIST INFTRATECH</h2>
                                <ul class="list-style-three">
                                    <li><span class="icon fa fa-map-marker"></span>#19/3, YES Complex, <br>Dinnur Main Road, <br/>R.T.Nagar Post, <br/>Bangalore 560032</li>
                                    <li><span class="icon fa fa-phone"></span>080 - 40969981</li>
                                    <li><span class="icon fa fa-envelope"></span>confistinfratech@gmail.com</li>
                                </ul>
                                <h3>Office Time</h3>
                                <div class="times">Mon-Wed : 10.00 am to 6.00 pm <br> Thus-Sat : 12.00 pm to 8.00 pm <br> Sun : Office Off</div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--End Message Section-->

       <?php require_once("footer.php");?>