<?php
include "lib.php";
fetch($_GET['data']);
$title = $servicename." || PZ Finance Institute Services";
include "head.php";
?>

<?php
$active['services'] = "active";
include "header.php";
?>
 <!-- breadcumb-area start -->
        <div class="breadcumb-area black-opacity bg-img-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            <h2><?php echo $servicename; ?></h2>
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
                                <li><a href="service.php">Services</a></li>
                                <li>/</li>
                                <li><?php echo $servicename; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- single-service-area start -->
        <div class="single-service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9 col-xs-12">
                        <div class="single-service-wrap">
                            <div class="single-service-active">
                                <div class="single-service-img">
                                    <img src="<?php echo $images[0]; ?>" alt="">
                                </div>
                                <div class="single-service-img">
                                    <img src="<?php echo $images[1]; ?>" alt="">
                                </div>
                                <div class="single-service-img">
                                    <img src="<?php echo $images[2]; ?>" alt="">
                                </div>
                            </div>
                            <h3><?php echo $heading1; ?></h3>
                            <p><?php echo $paragraph1; ?></p>
                            <blockquote>
                                <?php echo $sidenote; ?>
                            </blockquote>
                            <h4><?php echo $heading2; ?></h4>
                            <p><?php echo $paragraph2; ?></p>
                            <h4><?php echo $heading3; ?></h4>
                            <p><?php echo $paragraph2; ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-12 col-sm-6">
                        <aside class="service-sidebar">
                            <div class="sidebar-menu">
                                <ul>
                                    <li><a href="services.php">All Services</a></li>
                                    <li class="<?php echo $managementservicesstatus; ?>"><a href="single-service.php?data=managementservices">Management Services</a></li>
                                    <li class="<?php echo $financialmentorshipstatus; ?>"><a href="single-service.php?data=financialmentorship">Financial Mentorship</a></li>
                                   
                                </ul>
                            </div>
                            <div class="author-wrap">
                                <div class="author-img">
                                    <img src="assets/images/author.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h3>Zame Mthiyane</h3>
                                    <span>CEO of PZ Finance Institute</span>
                                    <p>We strive to develop long-term professional relationships with all our clients taking into account your personal requirements and needs.</p>
                                </div>
                            </div>
                            <div class="banner-wrap black-opacity">
                                <img src="assets/images/banner.jpg" alt="">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- single-service-area end -->

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