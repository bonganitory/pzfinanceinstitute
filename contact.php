<?php
$title = "PZ Finance Institute || Contact Us";
include "head.php";
?>

<?php
$active['contact'] = "active";
include "header.php";
?>
 <!-- breadcumb-area start -->
        <div class="breadcumb-area black-opacity bg-img-4">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcumb-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>/</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- contact-area start -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-wrap form-style">
						<h1>&nbsp;</h1>
						<h1>&nbsp;</h1>
                            <h3>Make An Enquiry</h3>
                            <div class="cf-msg"></div>
							<form action="mail.php" method="post" id="cf">
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<input type="text" placeholder="Name" id="fname" name="fname">
									</div>
									<div class="col-sm-6 col-xs-12">
										<input type="text" placeholder="Email" id="email" name="email">
									</div>
									<div class="col-xs-12">
										<input type="text" placeholder="Subject" id="subject" name="subject">
									</div>
									<div class="col-xs-12">
										<textarea class="contact-textarea" placeholder="Message" id="msg" name="msg"></textarea>
									</div>
									<div class="col-xs-12">
										<button id="submit" class="cont-submit btn-contact" name="submit">SEND MESSAGE</button>
									</div>
								</div>
							</form>
                        </div>
					<h1>&nbsp;</h1>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-wrap">
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p>031 569 1218</p>
                                    <!--<p>031 220 2040</p>-->
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <p> enquiries@pzfinanceinstitute.co.za</p>
                                </li>
                                <li>
                                    <i class="fa fa-mobile"></i>
                                    <p>076 657 5826</p>
                                    <p>082 428 7988</p>
                                </li>
                                <li>
								
 
 

                                    <i class="fa fa-whatsapp"></i>
                                    <p>066 206 7070</p>
                                </li>
                                <li>
                                    <i class="fa fa-location-arrow"></i>
                                    <b>Durban</b>
 1st Floor Widex Building, 22 Island Circle
Riverhorse Valley, Queen Nandi Drive, Durban, 4017
</li>
<li>
                                    <i class="fa fa-location-arrow"></i>
<b>Johannesburg</b><br/>
 JMT House, 6499 Sam Sekoati Avenue, 
Marimba Gardens, Vosloorus, 1486
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div id="googleMap" style="background-image:url(maps.png);"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-area end -->

        <!-- quote-area start -->
        <div class="quote-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-xs-12">
                        <div class="quote-wrap">
                            <h2>With years of experience we’ll ensure you get the best guidance.</h2>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="quote-wrap text-right">
                            <a href="contact.php">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quote-area end -->

<?php
include "footer.php";
?>