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
   <title>Metronic | Login Options - Login Form 2</title>
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
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/select2/select2_metro.css" />
   <!-- END PAGE LEVEL SCRIPTS -->
   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo base_url() ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo base_url() ?>assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
   <!-- BEGIN LOGO -->
   <div class="logo">
      <!-- <img src="<?php echo base_url() ?>assets/img/logo-big.png" alt="" /> --> 
      <a href="<?php echo base_url() ?>"><h3><span style="color:white">FORUM</span><span style="color:red">TB.com</span></h3></a>
   </div>
   <!-- END LOGO -->
   <!-- BEGIN LOGIN -->
   <div class="content">
      <!-- BEGIN LOGIN FORM -->
      <form class="login-form" id="form" method="post" onsubmit="login_ajax(this);return false">
         <h3 class="form-title">Login to your account</h3>
         <div class="alert alert-danger red hide" id="nontif">
            <button class="close" data-dismiss="alert"></button>
            <span>Your username or password is incorect</span>
         </div>
         
         <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
               <i class="icon-user"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" id="username" placeholder="Username or Email" name="username" />
            </div>
         </div>
         <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
               <i class="icon-lock"></i>
               <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" id="password" name="password"/>
            </div>
         </div>
         <div class="form-actions">
            <label class="checkbox">
            <input type="checkbox" name="remember" value="1"/> Remember me
            </label>
            <button type="submit" data-loading-text="<img src='<?php echo site_url() ?>assets/img/ajax-loading.gif' width=16> Loading..." class="demo-loading-btn btn btn-primary pull-right">
               Login <i class="m-icon-swapright m-icon-white"></i>
            </button>
            <!-- <button type="submit" class="btn blue pull-right">
            Login <i class="m-icon-swapright m-icon-white"></i>
            </button>    -->         
         </div>
         <div class="forget-password">
            <h4>Forgot your password ?</h4>
            <p>
               no worries, click <a href="javascript:;"  id="forget-password">here</a>
               to reset your password.
            </p>
         </div>
         <div class="create-account">
            <p>
               Don't have an account yet ?&nbsp; 
               <a href="javascript:;" id="register-btn" >Create an account</a>
            </p>
         </div>
      </form>
      <!-- END LOGIN FORM -->        
      <!-- BEGIN FORGOT PASSWORD FORM -->
      <form class="forget-form" action="index.html" method="post">
         <h3 >Forget Password ?</h3>
         <p>Enter your e-mail address below to reset your password.</p>
         <div class="form-group">
            <div class="input-icon">
               <i class="icon-envelope"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
            </div>
         </div>
         <div class="form-actions">
            <button type="button" id="back-btn" class="btn">
            <i class="m-icon-swapleft"></i> Back
            </button>
            <button type="submit" class="btn blue pull-right">
            Submit <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
      </form>
      <!-- END FORGOT PASSWORD FORM -->
      <!-- BEGIN REGISTRATION FORM -->
      
      <!-- END REGISTRATION FORM -->
   </div>
   <!-- END LOGIN -->
   <!-- BEGIN COPYRIGHT -->
   <div class="copyright">
      2013 &copy; Metronic - Admin Dashboard Template.
   </div>
   <!-- END COPYRIGHT -->
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
   <script src="<?php echo base_url() ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo base_url() ?>assets/scripts/app.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets/scripts/login-soft.js" type="text/javascript"></script>      
   <script src="<?php echo base_url() ?>assets/scripts/formQueryBuilder.js" type="text/javascript"></script>      
   <!-- END PAGE LEVEL SCRIPTS --> 
   <script>
      jQuery(document).ready(function() {     
         App.init();
         Login.init();
         $('#username').focus();     
         $('.login-form').keypress(function (e) {
               if (e.which == 13) login_ajax(this);
        });     
      });
      function login_ajax(form){
         var json = jsonQuery2(form);
         if($("#username").val()=='' || $("#password").val()=='') return false;
         $('.demo-loading-btn').button('loading');
         //console.log(json);
         //alert('deas');
         $('#nontif').addClass("hide")
         $.ajax({
            type  : 'post',
            url   : 'login/cek_login',
            data  : json,
            cache : false,
            dataType:'json',
            success : function(status_result){
               if(status_result.status_login == 'berhasil'){
                  //alert(status_result.status_login==);
                  //window.location('<?php echo base_url() ?>');
                  location="<?php echo base_url('redirect/login') ?>";
               }else{
                  $('#nontif').removeClass("hide");
               }
               //console.log(status_result.status_login);
               $('.demo-loading-btn').button('reset');
               //alert('deas');
            }
         });
      }
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>