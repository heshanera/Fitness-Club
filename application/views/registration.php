<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from projects.pulsarmedia.ca/energy/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:38:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.html">

    <title>Fitness Club</title>
    
    <link href="<?php echo base_url(); ?>bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- main css -->
    <link href="<?php echo base_url(); ?>css/master.css" rel="stylesheet">
    
    <!-- mobile css -->
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    
    <!-- FontAwesome Support -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fontawesome/font-awesome.min.css" />
    <!-- FontAwesome Support -->
    
    <!-- Superfish menu -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/superfish/superfish.css" />
    <!-- Superfish menu -->
    
    <!-- Theme Color selector -->
    <link href="<?php echo base_url(); ?>js/theme-color-selector/theme-color-selector.css" type="text/css" rel="stylesheet">
    <!-- Theme Color selector -->
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.css" />
    <!-- Owl Carousel -->
    
    <!-- Typicons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/typicons/typicons.min.css" />
    <!-- Typicons -->
    
    <!-- WOW animations -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/wow/css/libs/animate.css" />
    <!-- WOW animations -->
    
    <!-- Pulse Slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/pulse/pm-slider.css" />
    <!-- Pulse Slider -->
    
    <!-- MeanMenu (mobile) -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/meanmenu/meanmenu.css" />
    <!-- MeanMenu (mobile) -->
    
    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/flexslider/flexslider-post.css" />
    <!-- Flexslider -->
    
    <!-- PrettyPhoto -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/prettyphoto/css/prettyPhoto.css" />
    <!-- PrettyPhoto -->
        
    <!-- Development Google Fonts -->
    <link href='fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700%7COpen+Sans:400,800italic,800,700italic,700,600italic,400italic,300italic,300,600%7COswald:400,300,700%7CLato:400,900,900italic,700italic,400italic,700,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
    <!-- Development Google Fonts -->
    
  </head>

  <body>
    
 
    

	<div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->
    
    	
    
    	<!-- Sub-Menu -->
    	<?php require_once ("submenu.php");?>
        
        <!-- SUB-HEADER -->
        
        <div class="pm-sub-header-container">
        
            <div class="pm-sub-header-title-container">
            
                <div class="pm-sub-header-title-bg">
                
                    <p class="pm-sub-header-title">REGISTRATION</p>
                    <p class="pm-sub-header-message">become a member and get special benefits</p>
                
                </div>
                
                <div class="pm-sub-header-breadcrumbs">
                
                    <div class="pm-sub-header-breadcrumb-bg"></div>
                    
                    <div class="pm-sub-header-breadcrumb-list-container">
                        <ul class="pm-sub-header-breadcrumb-list">
                            <li><a href="index-2.html">Home</a> &nbsp; <i class="fa fa-angle-right"></i></li>
                            <li>Register</li>
                        </ul>
                    </div>
                
                </div>
                
            </div>
        
        </div>
        
        <!-- SUB-HEADER end -->
        
        <!-- BODY CONTENT starts here -->
        

        <form action="../PHP/registration.php" method="POST" id="pm-contact-form">

            <div class="pm-column-container pm-parallax-panel" style="background-color:#182433; background-image:url(img/Women-Fitness-High-Resolution-Wallpapers.jpg); height: 1200px" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">

                <div class="container pm-containerPadding100">

                    <div class="row pm-column-spacing">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4>REGISTRATION FORM</h4>
                            <h5>PERSONAL INFOMATION</h5>
                            <div class="pm-title-divider"></div>
                        </div>

                    </div>

                    <div class="row">



                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input name="name" id="pm_s_first_name" class="pm-form-textfield" type="text" placeholder="Name *" required>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input name="address" id="pm_s_last_name" class="pm-form-textfield" type="text" placeholder="Address *" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="bday" id="pm_s_email_address" class="pm-form-textfield" type="text" placeholder="BIRTH DAY *    (YYYY/MM/DD)  " required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="nic" class="pm-form-textfield" type="text" placeholder="NIC ">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="phone" id="pm_s_email_address" class="pm-form-textfield" type="text" placeholder="PHONE NUMBER *" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="email" class="pm-form-textfield" type="email" placeholder="EMAIL * " required>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input name="gender" class="pm-form-textfield" type="text" placeholder="GENDER *    (MALE/FEMALE) " required>
                        </div>

                    </div>
                    <br><br>
                    <div class="row pm-column-spacing">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <h5>PACKAGE INFOMATION</h5>
                            <div class="pm-title-divider"></div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <font color="white" size="3px">Select Class</font>
                            <select name="class">
                                <option>Weight lose</option>
                                <option>Body building</option>
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <font color="white" size="3px">Select Package</font>
                            <select name="package">
                                <option>Daily</option>
                                <option>Monthly</option>
                                <option>Annualy</option>
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <div class="row pm-column-spacing">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <h5>LOGIN INFOMATION</h5>
                            <div class="pm-title-divider"></div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="pass" id="pm_s_email_address" class="pm-form-textfield" type="password" placeholder="PASSWORD * " required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="re_password" class="pm-form-textfield" type="password" placeholder="RE ENTER PASSWORD * ">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 pm-center">
                            <input type="submit" value="Register" name="pm-form-submit-btn" class="pm-form-submit-btn" id="pm-contact-form-btn">
                            <div id="pm-contact-form-response"></div>
                            <p class="pm-required">Fields marked with * are required</p>
                        </div>

                        <input type="hidden" name="pm_s_email_address_contact" value="info@pulsarmedia.ca" />

                    </div>

                </div>

                

        </div>
        <br><br>
        
                       
        
        </div>
        
        
        
        <!-- BODY CONTENT end -->
        
        <div class="pm-fat-footer pm-parallax-panel" data-stellar-background-ratio="0.5">
        	
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">
                    
                    	<p class="pm-fat-footer-sub-title">stay up to date</p>
                    	<h6 class="pm-fat-footer-title">subscribe to our newsletter</h6>
                        <div class="pm-fat-footer-title-divider"></div>
                        
                        <p>Receive weekly e-mail notifications from Energy Fitness and stay up to date on news, events and specials classes.</p>
                        
                        <br />
                        
                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        
                        	<input name="MERGE1" type="text" class="pm-mailchimp-field reset-pulse-sizing" id="MERGE1" placeholder="first name">
                            
							<input name="MERGE0" type="email" class="pm-mailchimp-field reset-pulse-sizing" id="MERGE0" placeholder="email address">
                            
							<input name="subscribe" id="mc-embedded-subscribe" type="submit" value="subscribe" class="pm-mailchimp-submit">
                        
                        </form>
                        
                        <p class="pm-center"><a href="#">Click here</a> to unsubscribe</p>
                        
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">
                    
                        <p class="pm-fat-footer-sub-title">follow @energyfitness</p>
                    	<h6 class="pm-fat-footer-title">our latest tweets</h6>
                        <div class="pm-fat-footer-title-divider"></div>
                        
                        <div id="pm-twitter-news" class="pm-tweet-list"></div>
                        
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">
                    
                        <p class="pm-fat-footer-sub-title">fueling the fire</p>
                    	<h6 class="pm-fat-footer-title">latest from our gallery</h6>
                        <div class="pm-fat-footer-title-divider"></div>
                        
                        <ul class="pm-gallery-widget-items">
                        	<li style="background-image:url(<?php echo base_url(); ?>img/gallery-widget/img1.jpg);">
                            	<a href="<?php echo base_url(); ?>img/gallery-widget/img1-lg.jpg" data-rel="prettyPhoto[gallery-widget]" class="pm-gallery-widget-item-expand fa fa-expand expand lightbox"></a>
                            </li>
                            <li style="background-image:url(<?php echo base_url(); ?>img/gallery-widget/img2.jpg);">
                            	<a href="<?php echo base_url(); ?>img/gallery-widget/img2-lg.jpg" data-rel="prettyPhoto[gallery-widget]" class="pm-gallery-widget-item-expand fa fa-expand expand lightbox"></a>
                            </li>
                            <li style="background-image:url(<?php echo base_url(); ?>img/gallery-widget/img3.jpg);">
                            	<a href="<?php echo base_url(); ?>img/gallery-widget/img3-lg.jpg" data-rel="prettyPhoto[gallery-widget]" class="pm-gallery-widget-item-expand fa fa-expand expand lightbox"></a>
                            </li>
                            <li style="background-image:url(<?php echo base_url(); ?>img/gallery-widget/img4.jpg);">
                            	<a href="<?php echo base_url(); ?>img/gallery-widget/img4-lg.jpg" data-rel="prettyPhoto[gallery-widget]" class="pm-gallery-widget-item-expand fa fa-expand expand lightbox"></a>
                            </li>
                        </ul>
                        
                        <br />
                        
                        <p class="pm-right-align"><a href="gallery.html" class="pm-gallery-widget-view-more">View Gallery &nbsp;<i class="fa fa-angle-right"></i></a></p>
                        
                    </div>
                </div>	
            </div>
            
        </div>
        
        <footer>

            
            <div class="pm-footer-triangle-data">
            
                
                <ul class="pm-footer-social-icons">
                    <li title="Twitter" class="pm_tip_static_top tw">
                    	<div class="pm-social-icon-diamond"></div>
                    	<a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li title="Facebook" class="pm_tip_static_top fb">
                    	<div class="pm-social-icon-diamond"></div>
                    	<a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li title="Google Plus" class="pm_tip_static_top gp">
                    	<div class="pm-social-icon-diamond"></div>
                    	<a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li title="Linkedin" class="pm_tip_static_top linked">
                    	<div class="pm-social-icon-diamond"></div>
                    	<a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li title="YouTube" class="pm_tip_static_top yt">
                    	<div class="pm-social-icon-diamond"></div>
                    	<a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li title="StumbleUpon" class="pm_tip_static_top st">
                    	<div class="pm-social-icon-diamond"></div>
                    	<a href="#"><i class="fa fa-stumbleupon"></i></a>
                    </li>
                </ul>
                <h6>Connect with us!</h6>
                
                <a class="fa fa-chevron-up" id="pm-back-to-top"></a>
            
            </div>

                
        </footer>
                
        <div class="pm-footer-copyright">
        	
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 pm-footer-copyright-col">
                    	<a href=""><img src="img/energy-fitness.png" class="img-responsive pm-header-logo" alt="Energy Fitness Studio"></a>
                        <p>© 2014 Energy - Designed &amp; Developed by <a href="www.pulsarmedia.ca/" target="_blank">Pulsar Media</a></p>
                    </div>
                </div>
            </div>
            
        </div>
    
    <!-- /pm_layout-wrapper -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.viewport.mini.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>
    <script src="<?php echo base_url(); ?>js/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.tooltip.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.hoverPanel.js"></script>
    <script src="<?php echo base_url(); ?>js/superfish/superfish.js"></script>
    <script src="<?php echo base_url(); ?>js/superfish/hoverIntent.js"></script>
    <script src="<?php echo base_url(); ?>js/stellar/jquery.stellar.js"></script>
    <script src="<?php echo base_url(); ?>js/theme-color-selector/theme-color-selector.js"></script>
    <script src="<?php echo base_url(); ?>js/pulse/jquery.PMSlider.js"></script>
    <script src="<?php echo base_url(); ?>js/meanmenu/jquery.meanmenu.min.js"></script>
    <script src="<?php echo base_url(); ?>js/flexslider/jquery.flexslider.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.testimonials.js"></script>
    <script src="<?php echo base_url(); ?>js/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-migrate-1.1.1.js"></script>
    <script src="<?php echo base_url(); ?>js/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>js/ajax-trial-form/ajax-trial-form.js"></script>
    <script src="<?php echo base_url(); ?>js/twitter-post-fetcher/twitterFetcher_min.js"></script>
    <!--<p id="back-top" class="visible-lg visible-md visible-sm"> </p>-->
    
  </body>

<!-- Mirrored from projects.pulsarmedia.ca/energy/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2016 13:44:06 GMT -->
</html>
