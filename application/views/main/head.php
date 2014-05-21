<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <title><?php echo $judul ?></title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <?php //echo ajax()->init();?>        
   <link href="<?php echo base_url() ?>assets/css/pace2.css" rel="stylesheet" />
   <script data-pace-options='{ "ajax": false }' src="<?php echo base_url() ?>assets/scripts/pace.js"></script>
   <link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/bootstrap-toastr/toastr.min.css" /><link href="<?php echo base_url() ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url() ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/data-tables/DT_bootstrap.css" />
   <link href="<?php echo base_url() ?>assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />


   <!-- END PAGE LEVEL PLUGIN STYLES -->
 
   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo base_url() ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>   
   <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/pages/lock.css" rel="stylesheet" type="text/css" />
   <!-- END THEME STYLES -->
 
   <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="page-header-fixed page-sidebar-fixed">
<div class="page-lock hide" style="z-index:9999999">
 <div class="page-logo">
   <a class="brand" href="index.html">
   <img src="<?php echo base_url() ?>assets/img/logo-big.png" alt="logo" />
   </a>
 </div>
 <div class="page-body">
   <img class="page-lock-img" src="<?php echo base_url() ?>assets/img/profile/profile.jpg" alt="">
   <div class="page-lock-info">
     <h1>Bob Nilson</h1>
     <span class="email">bob@keenthemes.com</span>
     <span class="locked">Locked</span>
     <form class="form-inline" onsubmit="unlock();return false;">
       <div class="input-group input-medium">
         <input type="text" class="form-control" placeholder="Password">
         <span class="input-group-btn">        
         <button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
         </span>
       </div>
       <!-- /input-group -->
       <!-- <div class="relogin">
         <a href="login.html">Not Bob Nilson ?</a>
       </div> -->
     </form>
   </div>
 </div>
 <div class="page-footer">
   2014 &copy; PT.Control System. WareHouse Menagement BETA (Armadeas).
 </div>
</div>
<div class="isi-page">