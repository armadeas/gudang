<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Metronic | Pages - Coming Soon</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo base_url() ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/pages/coming-soon.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
   <div class="container">
      <div class="row">
         <div class="col-md-12 coming-soon-header">
            <a class="brand" href="index.html">
            <img src="<?php echo base_url() ?>assets/img/logo-big.png" alt="logo" />
            </a>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 coming-soon-content">
            <h1>
            <?php if ($this->uri->segment(2)=='login') {
               echo "Login Success!";
            }
            ?>
            </h1>
            <p>
            <?php if ($this->uri->segment(2)=='login') {
               echo "Thank You for Your login to SMK Taruna Bhakti forum, Please keep scure your Acount";
               br();
               echo "You will redirect to your page in this Second";
            }

             ?>.</p>
            <br>
            <form class="form-inline" action="#">
               <div class="input-group input-large">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                  <button class="btn blue" type="button"><span>Subscribe</span> <i class="m-icon-swapright m-icon-white"></i></button>
                  </span>
               </div>
            </form>
            <ul class="social-icons margin-top-20">
               <li><a href="#" data-original-title="Feed" class="rss"></a></li>
               <li><a href="#" data-original-title="Facebook" class="facebook"></a></li>
               <li><a href="#" data-original-title="Twitter" class="twitter"></a></li>
               <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
               <li><a href="#" data-original-title="Pinterest" class="pintrest"></a></li>
               <li><a href="#" data-original-title="Linkedin" class="linkedin"></a></li>
               <li><a href="#" data-original-title="Vimeo" class="vimeo"></a></li>
            </ul>
         </div>
         <div class="col-md-6 coming-soon-countdown">
            <div id="defaultCountdown"></div>
         </div>
      </div>
      <!--/end row-->
      <div class="row">
         <div class="col-md-12 coming-soon-footer">
            2013 &copy; Metronic. Admin Dashboard Template.
         </div>
      </div>
   </div>
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="<?php echo base_url() ?>assets/plugins/respond.min.js"></script>
   <script src="<?php echo base_url() ?>assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="<?php echo base_url() ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="<?php echo base_url() ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <!--<script src="<?php //echo base_url() ?>assets/plugins/countdown/plugin/jquery.countdown-id.js" type="text/javascript"></script>-->
   <script src="<?php echo base_url() ?>assets/plugins/countdown/jquery.countdown.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo base_url() ?>assets/scripts/app.js" type="text/javascript"></script>        
   <!-- END PAGE LEVEL SCRIPTS --> 
   <script>
      jQuery(document).ready(function() {     
        App.init();
        //ComingSoon.init();
        $.backstretch([
                 "<?php echo base_url() ?>assets/img/bg/1.jpg",
                 "<?php echo base_url() ?>assets/img/bg/2.jpg",
                 "<?php echo base_url() ?>assets/img/bg/3.jpg",
                 "<?php echo base_url() ?>assets/img/bg/4.jpg"
                 ], {
                   fade: 1000,
                   duration: 10000
             });
            //$.countdown.setDefaults($.countdown.regionalOptions['id']);
            $('#defaultCountdown').countdown({until: +5,expiryUrl: '<?php echo site_url(); ?>'});  
      });
       
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>