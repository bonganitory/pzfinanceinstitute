<?php
include "lib.php";
fetch($_GET['data']);
$title = $inname." || PZ Finance Institute";
include "head.php";
?>

<?php
$active['institute'] = "active";
include "header.php";
?>
 
        <!-- breadcumb-area start -->
        <div class="breadcumb-area black-opacity bg-img-4">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcumb-wrap">
                            <h2><?php echo $inname; ?></h2>
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
                                <li>Finance Institute</li>
                                <li>/</li>
                                <li><?php echo $inname; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcumb-area end -->

        <!-- about-area start -->
		<section class="about-area ptb-140">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="about-wrap">
							<?php
							echo $indata;
							?>
						</div>
					</div>
                    <div class="col-md-6 col-xs-12" style="background-image:url(assets/images/cal.jpg);background-size:cover;background-position:50% 50%;">
                        <div class="row mt-60">
                            <div class="col-sm-6 col-xs-12 col vhide">
                                <div class="about-items mb-30">
                                    <i class="fa fa-diamond"></i>
                                    <h3>injected humour In The randomised </h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col vhide">
                                <div class="about-items mb-30">
                                    <i class="fa fa-briefcase"></i>
                                    <h3>many variations The  passages</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col vhide">
                                <div class="about-items">
                                    <i class="fa fa-bookmark"></i>
                                    <h3>the majority have To suffered</h3>
                                </div>
                            </div><div class="col-sm-6 col-xs-12 col vhide">
                                <div class="about-items">
                                    <i class="fa fa-database"></i>
                                    <h3>of passages The Lorem Ipsum</h3>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section>
		<!-- about-area end -->
<?php
include "footer.php";
?>