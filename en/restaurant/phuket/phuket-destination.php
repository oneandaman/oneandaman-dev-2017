<?php

$path = "../..";

$dID = $_REQUEST['did'];

//echo $dID;
//contect db
include_once($path.'/model/connect.php');

$query = "SELECT * FROM `destination` LEFT JOIN (`district` LEFT JOIN `province` ON `district`.`province_id` = `province`.`province_id`) 
            ON `destination`.`destination_district_id` = `district`.`district_id` WHERE `destination`.`destination_id` = '".$dID."'";
			
$query = "SELECT * FROM `destination` WHERE `destination_id` = '".$dID."'";
//echo $strSQL;

$result = mysqli_query($link, $query);

/* associative array */
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);			

$destination_id = $row['destination_id'];

$destination_geo_x = $row['destination_geo_x'];
$destination_geo_y = $row['destination_geo_y'];
$destination_info_tel = $row['destination_info_tel'];
$destination_info_fax = $row['destination_info_fax'];
$destination_info_email = $row['destination_info_email'];
$destination_info_website = $row['destination_info_website'];
$destination_social_facebook = $row['destination_social_facebook'];
$destination_social_instragram = $row['destination_social_instragram'];
$destination_social_youtube = $row['destination_social_youtube'];

$destination_cat = $row['destination_cat'];
$destination_name = $row['destination_name'];
$destination_address = $row['destination_address'];
$destination_details_80 = $row['destination_details_80'];
$destination_details_200 = $row['destination_details_200'];
$destination_details_long = $row['destination_details_long'];
$destination_open_hour = $row['destination_open_hour'];
$destination_fee = $row['destination_fee'];
$destination_visit_season = $row['destination_visit_season'];
$destination_content_ref_short = $row['destination_content_ref_short'];
$destination_content_ref_long = $row['destination_content_ref_long'];

$destination_update = $row['destination_update'];
$date = new DateTime($destination_update);
$destination_update_str = date_format($date,"F d, Y");


/* free result set */
mysqli_free_result($result);

/* close connection */
mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>OneAndaman | Amazing Southern Thailand : Andaman Coast Region</title>        
        <meta name="description" content="Things to do in phuket thailand, Phang nga thailand holidays, Trang thailand vacation, Krabi thailand holidays, Ranong amazing thailand">
        <meta name="keywords" content="Phuket holiday packages,Phang nga tourism, Trang travel, Krabi island, Ranong amazing thailand, Thaifood, Vacation packages, Phuket extreme sports, Thailand ecotourism">
        <meta charset="utf-8">
        <meta name="author" content="OneAndaman Team, PSU Phuket">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo $path; ?>/img/icons/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo $path; ?>/img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $path; ?>/img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $path; ?>/img/icons/apple-touch-icon-114x114.png">

        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/core/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/core/animate.min.css">

        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/main/main.css">
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/main/setting.css">
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/main/hover.css">

        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/magnific/magic.min.css">        
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/magnific/magnific-popup.css">              
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/magnific/magnific-popup-zoom-gallery.css">

        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/owl-carousel/owl.transitions.css">

        <!-- Load Color CSS 
        ===================================== -->
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/color/blue.css">

        <!-- Load Fontbase Icons 
        =====================================  --> 
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/icon/font-awesome.css">
        <link rel="stylesheet" href="<?php echo $path; ?>/assets/css/icon/et-line-font.css">
		
		<link rel="stylesheet" href="<?php echo $path; ?>/assets/css/main/modify.css">
		
		
        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">

<?php
include($path."/header.php")

?>	

		<!-- Subheader Area
        ===================================== -->
        <header class="bg-grad-stellar mt80">
            <div class="container">
                <div class="row mt60 mb20 ml10">
                    <div class="col-md-6 text-left">
                        <h3 class="font-montserrat color-light"><?php echo $destination_name; ?>
							<span class="glyphicon glyphicon-star color-red" aria-hidden=true></span>
							<span class="glyphicon glyphicon-star color-red" aria-hidden=true></span>
						</h3>
						<h5 class="color-light alpha7"><?php echo $destination_details_80; ?></h5>
                    </div>
                    <div class="col-md-6 text-right color-light pt30">
						Page last updated: <b><?php echo $destination_update_str; ?></b>
                    </div>
                </div>
            </div>
        </header>
		
		<div id="phuket-destintions" class="bg-light pt25">
            <div class="container">
                <div class="row">
					<!-- Left Container
					===================================== -->
                    <div class="col-lg-8">
						<!-- Destination Image Slide
						===================================== -->
						<div id="destination-slide" class="row carousel slide ml5 mr5" data-ride="carousel"  data-interval="10000">
							<!-- Indicators -->
							  <ol class="carousel-indicators">
								<li data-target="#destination-slide" data-slide-to="0" class="active"></li>
								<li data-target="#destination-slide" data-slide-to="1"></li>
								<li data-target="#destination-slide" data-slide-to="2"></li>
								<li data-target="#destination-slide" data-slide-to="3"></li>
								<li data-target="#destination-slide" data-slide-to="4"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner">
								<div class="item active">
								  <img src="<?php echo $path; ?>/img/destination/phuket-d00230-kamala-beach-1.jpg" alt="Los Angeles">
								</div>
								<div class="item">
								  <img src="<?php echo $path; ?>/img/destination/phuket-d00230-kamala-beach-2.jpg" alt="Chicago">
								</div>
								<div class="item">
								  <img src="<?php echo $path; ?>/img/destination/phuket-d00230-kamala-beach-3.jpg" alt="New York">
								</div>
								<div class="item">
								  <img src="<?php echo $path; ?>/img/destination/phuket-d00230-kamala-beach-4.jpg" alt="New York">
								</div>
								<div class="item">
								  <img src="<?php echo $path; ?>/img/destination/phuket-d00230-kamala-beach-5.jpg" alt="New York">
								</div>
							  </div>

							  <!-- Left and right controls -->
							  <a class="left carousel-control" href="#destination-slide" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#destination-slide" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							  </a>
						</div>
						
						<!-- Destination Description
						===================================== -->
						<div class="row text-left ml5 mr5">
							<h4>
								<?php echo $destination_details_200; ?>
								<small class="heading heading-solid"></small>
							</h4>
							<p>
								<?php echo $destination_details_long; ?>
							</p>
							<div class="text-right content-ref">
							<?php 
								$ref_short_array = explode("|", $destination_content_ref_short);
								$ref_long_array = explode("|", $destination_content_ref_long);
								for( $i=0; $i < count($ref_short_array); $i++) {
							?>
								<a href="<?php echo $ref_long_array[$i]?>" target="_blank" rel="nofollow"><?php echo $ref_short_array[$i]?></a><br />
							<?php 
								}
							?>
							</div>
						</div>

						<!-- Tags
						===================================== -->
						<div id="tag-container" class="row pr10 pl10 clearfix">
							<h5 class="mt5">
								Tags
							</h5>
							<ul class="tag">
								<li><a href="">beaches</a></li>
								<li><a href="">street food</a></li>
								<li><a href="">shopping & flea markets</a></li>
								<li><a href="">performances & entertainment</a></li>
							</ul>
						</div>
						
						<!-- Events
						===================================== -->
						<div class="bg-gray row mt50 pb25">
							<h4 class="text-center pt20 mb20">
								What's on Around <?php echo $destination_name; ?>
								<small class="heading heading-solid-icon center-block">
									<span>&nbsp;</span>
									<i class="fa fa-check"></i>
									<span>&nbsp;</span>
								</small>
							</h4>
							<div id="event-container" class="ml10 mr10">
									<div class="event-item bb-dashed-1">
										<blockquote class="mb5 mt5">
											<a href="#"><span class="badge badge-pasific pull-right">Jan 12</span></a>
											<p>
												<a href="#"><b>Kamala Steed Food Festinval</b></a>&nbsp;<i class="fa fa-at fa-fw"></i>
												name of place
											</p>
										</blockquote>
									</div>
									<div class="event-item bb-dashed-1">
										<blockquote class="mb5 mt5">
											<a href="#"><span class="badge badge-pasific pull-right">Nov 12</span></a>
											<p>
												<a href="#"><b>Food Festinval</b></a>&nbsp;<i class="fa fa-at fa-fw"></i>
												name of place
											</p>
										</blockquote>
									</div>
									<div class="event-item bb-dashed-1">
										<blockquote class="mb5 mt5">
											<a href="#"><span class="badge badge-pasific pull-right">January 12</span></a>
											<p>
												<a href="#"><b>Kamala Steed Food Festinval</b></a>&nbsp;<i class="fa fa-at fa-fw"></i>
												name of place
											</p>
										</blockquote>
									</div>
									<div class="event-item bb-dashed-1">
										<blockquote class="mb5 mt5">
											<a href="#"><span class="badge badge-pasific pull-right">June 12</span></a>
											<p>
												<a href="#"><b>Kamala Steed Food Festinval</b></a>&nbsp;<i class="fa fa-at fa-fw"></i>
												name of place
											</p>
										</blockquote>
									</div>
									
							</div>                    		
						</div>
						
						
						
						<!-- Hotel Suggestion
						===================================== -->
						<div class="row pt50 pb50">
								<h4 class="text-center pt20 mb50">
									Near By Accommodation
									<small class="heading heading-solid-icon center-block">
										<span>&nbsp;</span>
										<i class="fa fa-suitcase"></i>
										<span>&nbsp;</span>
									</small>
								</h4>
								<div id="owlHotelSuggested-left" class="owl-carousel">
									<!-- suggested-hotel Item -->
									<div class="suggested-hotel suggested-hotel-left">
										<div class="suggested-hotel-header">
											<a href=""><img src="<?php echo $path; ?>/assets/img/other/photo-1.jpg" alt="" class="img-responsive img-rounded hover-wobble-vertical"></a>
										</div>
										<div class="suggested-hotel-body">
											<p>
												Pasific template is the best template so far. So easy to customize and clean code. Recommended!
											</p>
										</div>
									</div>
									
									
									<!-- suggested-hotel Item -->
									<div class="suggested-hotel suggested-hotel-left">
										<div class="suggested-hotel-header">
											<a href=""><img src="<?php echo $path; ?>/assets/img/other/photo-1.jpg" alt="" class="img-responsive img-rounded hover-wobble-vertical"></a>
										</div>
										<div class="suggested-hotel-body">
											<p>
												Pasific template is the best template so far. So easy to customize and clean code. Recommended!
											</p>
										</div>
									</div>
									
									<!-- suggested-hotel Item -->
									<div class="suggested-hotel suggested-hotel-left">
										<div class="suggested-hotel-header">
											<a href=""><img src="<?php echo $path; ?>/assets/img/other/photo-1.jpg" alt="" class="img-responsive img-rounded hover-wobble-vertical"></a>
										</div>
										<div class="suggested-hotel-body">
											<p>
												Pasific template is the best template so far. So easy to customize and clean code. Recommended!
											</p>
										</div>
									</div>
									
									<!-- suggested-hotel Item -->
									<div class="suggested-hotel suggested-hotel-left">
										<div class="suggested-hotel-header">
											<a href=""><img src="<?php echo $path; ?>/assets/img/other/photo-1.jpg" alt="" class="img-responsive img-rounded hover-wobble-vertical"></a>
										</div>
										<div class="suggested-hotel-body">
											<p>
												Pasific template is the best template so far. So easy to customize and clean code. Recommended!
											</p>
										</div>
									</div>
									
									<!-- suggested-hotel Item -->
									<div class="suggested-hotel suggested-hotel-left">
										<div class="suggested-hotel-header">
											<a href=""><img src="<?php echo $path; ?>/assets/img/other/photo-1.jpg" alt="" class="img-responsive img-rounded hover-wobble-vertical"></a>
										</div>
										<div class="suggested-hotel-body">
											<p>
												Pasific template is the best template so far. So easy to customize and clean code. Recommended!
											</p>
										</div>
									</div>
									
									<!-- suggested-hotel Item -->
									<div class="suggested-hotel suggested-hotel-left">
										<div class="suggested-hotel-header">
											<a href=""><img src="<?php echo $path; ?>/assets/img/other/photo-1.jpg" alt="" class="img-responsive img-rounded hover-wobble-vertical"></a>
										</div>
										<div class="suggested-hotel-body">
											<p>
												Pasific template is the best template so far. So easy to customize and clean code. Recommended!
											</p>
										</div>
									</div>                       
								</div>                     
						</div>
						
					</div>
					
					<!-- Right Container
					===================================== -->
					<div id="sidebar" class="col-md-4 pl15">  
						<!-- Map
						===================================== -->
						<div class="pr10 pl10 clearfix">
							<h5 class="text-left">
								Phuket Map
								<div class="pr20" style="float: right;">
									<a id="static-map-show" title="show Phuket map"><i class="fa fa-map-o fa-lg fa-fw color-red" ></i></a>
								</div>
								<div class="pr10" style="float: right;">
									<a id="dynamic-map-show" href="" title="show Kamala Beach on map"><i class="fa fa-map-marker fa-lg fa-fw color-red" ></i></a>
								</div>
                                <span class="heading-divider mt10"></span>
                            </h5>
							<div id="phuket-map" class="item-hide">
								<img src="<?php echo $path; ?>/img/map/phuket-map-256x760.png"  alt="phuket map" class="img-responsive img-float-center">
							</div>
						</div>
						
						<!-- Desination Infor
						===================================== -->
						<div class="pr10 pl10 pb25 clearfix">
							<h5 class="mt25 text-left">
								Local Infomation
                                <span class="heading-divider mt10"></span>
                            </h5>
							<div id="local-info">
								<i class="fa fa-clock-o fa-fw"></i>&nbsp;Hours
								<div class="pl25 infor-text"><?php echo is_null($destination_open_hour) ?  "-" : $destination_open_hour;?></div>
								<br>
								<i class="fa fa-money fa-fw"></i>&nbsp;Fees
								<div class="pl25 infor-text"><?php echo is_null($destination_fee) ?  "-" : $destination_fee;?></div>
								<br>
								<i class="fa fa-thumbs-o-up fa-fw"></i>&nbsp;Best Time to Visit
								<div class="pl25 infor-text"><?php echo is_null($destination_visit_season) ?  "-" : $destination_visit_season;?></div>
								<br>
								<i class="fa fa-map-marker fa-fw"></i>&nbsp;GPS :
								<a href="http://maps.google.com/maps?q=<?php echo $destination_geo_x;?>,<?php echo $destination_geo_y;?>" target="_blank" rel="nofollow"><span class="infor-text"><?php echo $destination_geo_x;?>, <?php echo $destination_geo_y;?></span>&nbsp;<i class="fa fa-external-link"></i></a>
								<br>
							</div>
						</div>
						
						<!-- Contact
						===================================== -->
						<div class="pr10 pl10 pb25 clearfix">
							<h5 class="mt25 text-left">
								Contact
                                <span class="heading-divider mt10"></span>
                            </h5>
							<div id="contact-info">
								<i class="fa fa-envelope-o fa-fw"></i>&nbsp;Address
								<div class="pl25 infor-text"><?php echo is_null($destination_address) ?  $destination_district_name." ".$destination_province_name : $destination_address;?></div>
								<br>
								<i class="fa fa-phone fa-fw"></i>&nbsp;Telephone
								<div class="pl25 infor-text"><?php echo is_null($destination_info_tel) ?  "-" :  str_replace("|", "<br>", $destination_info_tel);?></div>
								<br>
								<i class="fa fa-fax fa-fw"></i>&nbsp;Fax
								<div class="pl25 infor-text"><?php echo is_null($destination_info_fax) ?  "-" :  str_replace("|", "<br>", $destination_info_fax);?></div>
								<br>
								<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;Website
								<div class="pl25 infor-text">
									<?php 	if (is_null($destination_info_website)) {
												echo "-";
											} else {
												$www_array = explode("|", $destination_info_website);
												for($i=0; $i < count($www_array); $i++){
									?>
									<a href="<?php echo $www_array[$i];?>" target="_blank" rel="nofollow"><?php echo $www_array[$i]?>&nbsp;<i class="fa fa-external-link"></i></a> <?php echo($i == count($www_array)-1) ? '' : '<br/>' ?>
									<?php
												}
											}
									?>
								</div>
								<br>
								<i class="fa fa-at fa-fw"></i>&nbsp;Email
								<div class="pl25 infor-text">naong@gmail.com<br/> noppachai.w@phuket.psu.ac.th</div>
								<br>
								<?php if( !is_null($destination_social_facebook) || !is_null($destination_social_instragram) || !is_null($destination_social_youtube) ){ ?>
								<i class="fa fa-comment-o fa-fw"></i>&nbsp;Social
								<br>
								<div class="social social-one" style="margin-top: 10px; float: left">
									<?php echo is_null($destination_social_facebook) ?  '' :  '<a href="'.$destination_social_facebook.'" target="_blank"><i class="fa fa-facebook color-primary"></i></a>' ?>
									<?php echo is_null($destination_social_instragram) ?  '' :  '<a href="'.$destination_social_instragram.'" target="_blank"><i class="fa fa-youtube-play color-red"></i></a>' ?>
									<?php echo is_null($destination_social_youtube) ?  '' :  '<a href="'.$destination_social_youtube.'" target="_blank"><i class="fa fa-instagram color-dark"></i></a>' ?>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
<?php
include($path."/footer.php")

?>		
       

        <!-- JQuery Core
        =====================================-->
        <script src="<?php echo $path; ?>/assets/js/core/jquery.min.js"></script>
        <script src="<?php echo $path; ?>/assets/js/core/bootstrap.min.js"></script>

        <!-- Magnific Popup
        =====================================-->
        <script src="<?php echo $path; ?>/assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo $path; ?>/assets/js/magnific-popup/magnific-popup-zoom-gallery.js"></script>

        <!-- Progress Bars
        =====================================-->
        <script src="<?php echo $path; ?>/assets/js/progress-bar/bootstrap-progressbar.js"></script>
        <script src="<?php echo $path; ?>/assets/js/progress-bar/bootstrap-progressbar-main.js"></script>

        <!-- JQuery Main
        =====================================-->
        <script src="<?php echo $path; ?>/assets/js/main/jquery.appear.js"></script>
        <script src="<?php echo $path; ?>/assets/js/main/isotope.pkgd.min.js"></script>
        <script src="<?php echo $path; ?>/assets/js/main/parallax.min.js"></script>
        <script src="<?php echo $path; ?>/assets/js/main/jquery.countTo.js"></script>
        <script src="<?php echo $path; ?>/assets/js/main/owl.carousel.min.js"></script>
        <script src="<?php echo $path; ?>/assets/js/main/ion.rangeSlider.min.js"></script>
        <script src="<?php echo $path; ?>/assets/js/main/jquery.sticky.js"></script>
        <script src="<?php echo $path; ?>/assets/js/main/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo $path; ?>/assets/js/main/main.js"></script>   
		<script>
		$(document).ready(function() {

			//Hotel Suggestion Slide
			var owlTestimonialLeft = $("#owlHotelSuggested-left");

			owlTestimonialLeft.owlCarousel({
				autoPlay: 5000,
				items : 2,  
				itemsDesktop : [1000,3],  
				itemsDesktopSmall : [900,2],  
				itemsTablet: [600,1],  
				itemsMobile : false  

			});
			
		
			$('#static-map-show').click(function() {
			  $('#phuket-map').toggle("slow");
			  $(this).children('i').toggleClass( "fa-map" );
			  if($(this).attr( "title" ) === "show Phuket map"){
				  $(this).attr( "title", "hide Phuket map")
			  } else {
				  $(this).attr( "title", "show Phuket map")
			  }
			});
			


		});
		</script>
    </body>
</html>