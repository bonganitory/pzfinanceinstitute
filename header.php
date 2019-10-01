<?php

?>      
        <script src="tweek.js"></script>  
			 <body onresize="resizeX()" onpageshow="resizeX()" onscroll="scrollX()">
			<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloder-wrap">
            <div class="loader">
                <div class="child-common child4"></div>
                <div class="child-common child3"></div>
                <div class="child-common child2"></div>
                <div class="child-common child1"></div>
            </div>
        </div>
        <!-- preloder-wrap -->
        <!-- search-area -->
        <div class="search-area">
            <span class="closs-btn">Close</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search Query">
                                <button type="button" name="button" class="btn-style">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area -->
		<!-- heared area start -->
		<header class="header-area">
           
            <div class="header-middle bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs">
    						<div class="logo">
    							<h1><a href=""><img src="logo.jpg" height="64" class="logo_img"/></a></h1>
    						</div>
    					</div>
                        <div class="col-md-9 col-xs-12">
                            <div class="header-middle-right">
                                <ul>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>MON - FRI </p>
                                            <span>(8:00AM - 4:30PM)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>MAIL US</p>
                                            <span style="font-size:10px;line-height:1.2em;"><a href="mailto: enquiries@pzfinanceinstitute.co.za" style="text-decoration:none;color:inherit;"><font style="display:block;margin-top:4px;">enquiries@</font><font style="display:block;">pzfinanceinstitute.co.za</font></a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>PHONE US</p>
                                            <span> 031 569 1218</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="header-bottom"  id="isticky-header">
                <div class="container">
    				<div class="row">
                        <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
    						<div class="logo">
    							<h1><a href=""><img src="logo.jpg" height="56" class="logo_img"/></a></h1>
    						</div>
    					</div>
    					<div class="col-md-11 hidden-sm hidden-xs">
    						<div class="mainmenu">
    							<ul id="navigation">
    								<li class="<?php echo $active['home']; ?>"><a href="index.php">HOME <i class="fa"></i></a>
    							
    								</li>
    								<li class="<?php echo $active['about']; ?>"><a href="about2.php">ABOUT US<i class="fa fa-angle-down"></i></a>
    									<ul class="submenu">
    										<li><a href="about1.php">ABOUT ZAMEKILE MTHIYANE</a></li>
    										<li><a href="about2.php">ABOUT PZ FINANCE INSTITUTE</a></li>
    										
    									</ul>
                                    </li>
									<li class="<?php echo $active['institute']; ?>"><a href="institute.php">FINANCE INSTITUTE <i class="fa fa-angle-down"></i></a>
    									<ul class="megamenu">
    										
                                            <li>
                                                <a class="mega-title"  href="single-institute.php?data=accountingtechniciancourse">ACCOUTING TECHNICIAN</a>
    											<ul>
    												<li><a href="single-institute.php?data=accountingtechniciancourse">ACCOUTING TECHNICIAN COURSE</a></li>
    											</ul>
    										</li>
    										<li>
                                                <a class="mega-title"  href="institute.php">AT(SA) QUALIFICATIONS</a>
    											<ul>
    												<li><a href="single-institute.php?data=level3ac">LEVEL 3 ACCOUNTING TECHNICIAN</a></li>
    												<li><a href="single-institute.php?data=level4ac">LEVEL 4 ACCOUNTING TECHNICIAN</a></li>
                                                    <li><a href="single-institute.php?data=level5ac">LEVEL 5 ACCOUNTING TECHNICIAN</a></li>
    											</ul>
    										</li>
											<li>
                                                <a class="mega-title"  href="institute.php">OTHER FINANCE SEMINARS</a>
    											<ul>
    												<li><a href="single-institute.php?data=rfe">REAL FINANCE FOR ENTREPRENEURS</a></li>
    												<li><a href="single-institute.php?data=rfe2">REAL FINANCE FOR ENTREPRENEURS LEVEL 2</a></li>
                                                    <li><a href="single-institute.php?data=sivusaumnotho">SIVUSA UMNOTHO WETHU</a></li>
    											</ul>
    										</li>
    									</ul>
    								</li>
									<li class="<?php echo $active['services']; ?>"><a href="services.php">OTHER SERVICES <i class="fa fa-angle-down"></i></a>
    									<ul class="submenu">
    										<li><a href="single-service.php?data=managementservices">MANAGEMENT SERVICES</a></li>
    										<li><a href="single-service.php?data=financialmentorship">FINANCIAL MENTORSHIP</a></li>
    									</ul>
    								</li>
    								<!--<li><a href="team.php">team <i class="fa fa-angle-down"></i></a>
    									<ul class="submenu">
    										<li><a href="team.php">team One</a></li>
    										<li><a href="team2.php">team Two <span class="pull-right">+</span></a>
    											<ul class="submenu">
    												<li><a href="#">Sabmenu One</a></li>
    												<li><a href="#">Sabmenu Two</a></li>
    												<li><a href="#">Sabmenu Three <span class="pull-right">+</span></a>
                                                        <ul class="submenu">
                                                            <li><a href="#">Sabmenu One</a></li>
                                                            <li><a href="#">Sabmenu Two</a></li>
                                                            <li><a href="#">Sabmenu Three</a></li>
                                                            <li><a href="#">Sabmenu Four</a></li>
                                                            <li><a href="#">Sabmenu Five</a></li>
                                                        </ul>
                                                    </li>
    												<li><a href="#">Sabmenu Four</a></li>
    												<li><a href="#">Sabmenu Five</a></li>
    											</ul>
    										</li>
											<li><a href="team3.php">Team Three</a></li>
    									</ul>
    								</li>-->
    								<!--<li><a href="portfolio.php">Portfolio <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="portfolio.php">Portfolio Page</a></li>
    										<li><a href="portfolio2.php">Portfolio Two</a></li>
    										<li><a href="portfolio3.php">Portfolio Two</a></li>
    										<li><a href="portfolio4.php">Portfolio Masonary</a></li>
    										<li><a href="portfolio5.php">Portfolio Masonary </a></li>
                                        </ul>
                                    </li>-->
    								<li class="<?php echo $active['news']; ?>"><a href="blog.php">PZ NEWS <i class="fa "></i></a>
                                    
    								</li>
    								<li class="<?php echo $active['contact']; ?>"><a href="contact.php">CONTACT</a></li>
    								
    							</ul>
    						</div>
    					</div>
    					<div class="col-md-1 col-sm-2 col-xs-3">
    						<div class="search-wrap text-right">
    							<ul>
    								<li>
    									<a href="javascript:void(0);">
    										<i class="fa fa-search"></i>
    									</a>
    								</li>
    							</ul>
    						</div>
    					</div>
    					<div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
    						<div class="responsive-menu-wrap floatright"></div>
    					</div>
    				</div>
    			</div>
			</div>
		</header>
		<!-- heared area end -->
		<div class="spaciojusx" id="toTop"></div>