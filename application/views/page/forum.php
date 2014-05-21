<link href="<?php echo base_url() ?>assets/css/pages/news.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/css/pages/blog.css" rel="stylesheet" type="text/css"/>
<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->   
	<div class="page-container">
		<!-- BEGIN EMPTY PAGE SIDEBAR -->
		
		<!-- END EMPTY PAGE SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<!-- <div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler"></div>
				<div class="toggler-close"></div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>THEME COLOR</span>
						<ul>
							<li class="color-black current color-default" data-style="default"></li>
							<li class="color-blue" data-style="blue"></li>
							<li class="color-brown" data-style="brown"></li>
							<li class="color-purple" data-style="purple"></li>
							<li class="color-grey" data-style="grey"></li>
							<li class="color-white color-light" data-style="light"></li>
						</ul>
					</div>
					<div class="theme-option">
						<span>Layout</span>
						<select class="layout-option form-control input-small">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>Header</span>
						<select class="header-option form-control input-small">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>Sidebar</span>
						<select class="sidebar-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>Footer</span>
						<select class="footer-option form-control input-small">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div> -->
			<!-- END STYLE CUSTOMIZER -->  
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-9">
					<!-- BEGIN PAGE HEADER-->
					<div class="row">
						<div class="col-md-12">
						 <div id="myCarousel" class="carousel image-carousel slide">
                        
                        <div class="carousel-inner">
								<div class="active item">
									<div class="row">
										<div class="col-md-7 margin-bottom-20 margin-top-20 animated rotateInUpRight">
											<h1>Welcome to Metronic..</h1>
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
											<a href="index.html" class="btn red btn-lg m-icon-big">
											Take a tour <i class="m-icon-big-swapright m-icon-white"></i>                                
											</a>
										</div>
										<div class="col-md-5 animated rotateInDownLeft">
											<a href="index.html"><img src="assets/img/pages/img1.png" alt="" class="img-responsive"></a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row">
										<div class="col-md-5 animated rotateInUpRight">
											<a href="index.html"><img src="assets/img/pages/img1_2.png" alt="" class="img-responsive"></a>
										</div>
										<div class="col-md-7 margin-bottom-20 animated rotateInDownLeft">
											<h1>Buy Metronic Today..</h1>
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
											<a href="index.html" class="btn green btn-lg m-icon-big">
											But it today
											<i class="m-icon-big-swapright m-icon-white"></i>                                
											</a>
										</div>
									</div>
								</div>
							</div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev" style="background-image:none">
                        <i class="m-icon-big-swapleft m-icon-white"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next" style="background-image:none">
                        <i class="m-icon-big-swapright m-icon-white"></i>
                        </a>
                        <ol class="carousel-indicators">
                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                           <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                     </div>
							<!-- BEGIN PAGE TITLE & BREADCRUMB-->
							<h3 class="page-title margin-top-20">
								Last Forum Thread <small>Postingan Forum terakhir</small>
							</h3>
							<ul class="page-breadcrumb breadcrumb">
								<li class="btn-group">
									<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
									<span>Actions</span> <i class="icon-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
								<!-- <li>
									<i class="icon-home"></i>
									<a href="index.html">Home</a> 
									<i class="icon-angle-right"></i>
								</li>
								<li>
									<a href="#">Layouts</a>
									<i class="icon-angle-right"></i>
								</li>
								<li><a href="#">Horizontal Menu 2</a></li> -->
								<?php echo $breadcrumb; ?>
							</ul>
							<!-- END PAGE TITLE & BREADCRUMB-->
						</div>
					</div>
					<!-- END PAGE HEADER-->
					<!-- BEGIN PAGE CONTENT-->
					<div class="row margin-bottom-20">				                 
						<div class="col-md-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet box purple">
								<div class="portlet-title line">
									<div class="caption"><i class="icon-comments"></i>Account</div>
									<div class="tools">
										<a href="javascript:;" class="collapse"></a>
										<a href="#portlet-config" data-toggle="modal" class="config"></a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="note note-success" style="overflow:hidden">
				                        <h3 class="block" style="vertical-align:middle"><span class="glyphicon glyphicon-bullhorn" style="font-size:30px"></span> Forum SMK TB</h3>
				                        <p style="width:50%; float:left">
				                           Tempat diskusiin apaan aja disini membahas berbagai topik, saling bertukar ilmu dan saling sharing atar satu sama lain
				                        </p>
				                        <p style="width:45%; float:right">
				                           <strong>Moderators(2)</strong><br>
				                           <a href="" title="" class="text-success">Armadeas Wijaya</a>, <a href="" title="" class="text-info">Administrator</a>
				                       	</p>
				                     </div>
									<h4>Login Form</h4>
									<form action="<?php echo site_url('login') ?>" method="POST">
										<div class="form-group">
											<div class="input-icon">
												<i class="icon-user"></i>
												<input type="text" class="form-control" placeholder="Username/Email" />
											</div>
										</div>
										<div class="form-group">
											<div class="input-icon">                                          
												<i class="icon-lock"></i>
												<input type="password" class="form-control" placeholder="Password" />
											</div>
										</div>
										<div class="form-group">
											<label class="checkbox">
											<input type="checkbox" /> Remember Me
											</label>
										</div>
										<button type="submit" class="btn blue">Login</button>
									</form>
								</div>

							</div>
							<!-- END PORTLET-->                    
						</div>
					</div>
									
				</div>
				<div class="col-md-3 sidebar-content ">
					<ul class="ver-inline-menu tabbable margin-bottom-25">
						<li class="active">
							<a href="#tab_1" data-toggle="tab">
							<i class="icon-briefcase"></i> 
							General Questions
							</a> 
							<span class="after"></span>                                    
						</li>
						<li><a href="#tab_2" data-toggle="tab"><i class="icon-group"></i> Membership</a></li>
						<li><a href="#tab_3" data-toggle="tab"><i class="icon-leaf"></i> Terms Of Service</a></li>
						<li><a href="#tab_1" data-toggle="tab"><i class="icon-info-sign"></i> License Terms</a></li>
						<li><a href="#tab_2" data-toggle="tab"><i class="icon-tint"></i> Payment Rules</a></li>
						<li><a href="#tab_3" data-toggle="tab"><i class="icon-plus"></i> Other Questions</a></li>
						<li><a href="#tab_3" data-toggle="tab"><i class="icon-tasks"></i> Taks & Resources</a></li>
						<li><a href="#tab_3" data-toggle="tab"><i class="icon-user"></i> User Management</a></li>
					</ul>
					<!-- BEGIN PORTLET-->
					<div class="portlet box red">
						<div class="portlet-title line">
							<div class="caption"><i class="icon-comments"></i>Account</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
							</div>
						</div>
						<div class="portlet-body">
							<h4>Login Form</h4>
							<form action="<?php echo site_url('login') ?>" method="POST">
								<div class="form-group">
									<div class="input-icon">
										<i class="icon-user"></i>
										<input type="text" class="form-control" placeholder="Username/Email" />
									</div>
								</div>
								<div class="form-group">
									<div class="input-icon">                                          
										<i class="icon-lock"></i>
										<input type="password" class="form-control" placeholder="Password" />
									</div>
								</div>
								<div class="form-group">
									<label class="checkbox">
									<input type="checkbox" /> Remember Me
									</label>
								</div>
								<button type="submit" class="btn blue">Login</button>
							</form>
						</div>

					</div>
					<!-- END PORTLET-->
					<div class="space20"></div>
                     <h3>Recent Twitts</h3>
                     <div class="blog-twitter">
                        <div class="blog-twitter-block">
                           <a href="">@keenthemes</a> 
                           <p>At vero eos et accusamus et iusto odio.</p>
                           <a href="#"><em>http://t.co/sBav7dm</em></a> 
                           <span>2 hours ago</span>
                           <i class="icon-twitter blog-twiiter-icon"></i>
                        </div>
                        <div class="blog-twitter-block">
                           <a href="">@keenthemes</a> 
                           <p>At vero eos et accusamus et iusto odio.</p>
                           <a href="#"><em>http://t.co/sBav7dm</em></a> 
                           <span>5 hours ago</span>
                           <i class="icon-twitter blog-twiiter-icon"></i>
                        </div>
                        <div class="blog-twitter-block">
                           <a href="">@keenthemes</a> 
                           <p>At vero eos et accusamus et iusto odio.</p>
                           <a href="#"><em>http://t.co/sBav7dm</em></a> 
                           <span>7 hours ago</span>
                           <i class="icon-twitter blog-twiiter-icon"></i>
                        </div>
                     </div>
                     <h3>Top Forum Entiries</h3>
                     <div class="top-news">
                        <a href="#" class="btn red">
                        <span>Metronic News</span>
                        <em>Posted on: April 16, 2013</em>
                        <em>
                        <i class="icon-tags"></i>
                        Money, Business, Google
                        </em>
                        <i class="icon-briefcase top-news-icon"></i>
                        </a>
                        <a href="#" class="btn green">
                        <span>Top Week</span>
                        <em>Posted on: April 15, 2013</em>
                        <em>
                        <i class="icon-tags"></i>
                        Internet, Music, People
                        </em>
                        <i class="icon-music top-news-icon"></i>                             
                        </a>
                        <a href="#" class="btn blue">
                        <span>Gold Price Falls</span>
                        <em>Posted on: April 14, 2013</em>
                        <em>
                        <i class="icon-tags"></i>
                        USA, Business, Apple
                        </em>
                        <i class="icon-globe top-news-icon"></i>                             
                        </a>
                        
                     </div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
		<!-- END PAGE -->    
	</div>
	<!-- END CONTAINER -->