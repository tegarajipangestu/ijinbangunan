<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Ijin Mendirikan Bangunan</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<script src="admin/js/jquery-1.9.1.min.js"></script>
	<script src="admin/js/jquery.progressTimer.js"></script>

	<!-- start: CSS -->
	<link id="bootstrap-style" href="admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="admin/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="admin/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="admin/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="admin/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="home"><span>Ijin Mendirikan Bangunan</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> 
								<?php 
									$cookie_name = "username";
									if(!isset($_COOKIE[$cookie_name])) {
										header('Location: '.'login');
									} else {
										if ($_COOKIE[$cookie_name]!='admin')
										{
											echo "Huba";
											header('Location: '.'login');											
										}
										else
										{
											echo "Habu";
										    echo $_COOKIE[$cookie_name];											
										}
									}
								 ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="logout"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<!-- <li><a href="adminmessages"><i class="icon-envelope"></i><span class="hidden-tablet"> Permohonan</span></a></li> -->
<!-- 						<li><a href="admincalendar"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="admintasks"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
						<li><a href="adminui"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="adminwidgets"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="adminsubmenu"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="adminsubmenu"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="adminsubmenu"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li><a href="adminform"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="adminchart"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="admintypography"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="admingallery"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li> -->
						<li><a href="admintable"><i class="icon-align-justify"></i><span class="hidden-tablet"> Permohonan</span></a></li>
						<li><a href="bangunantable"><i class="icon-align-justify"></i><span class="hidden-tablet"> Peruntukan Bangunan</span></a></li>
<!-- 						<li><a href="adminfile-manager"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="adminicon"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="adminlogin"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="home">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#"></a></li>
			</ul>

	@yield('content')    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2015 Deadliner Corp.</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

	<script src="admin/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="admin/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="admin/js/jquery.ui.touch-punch.js"></script>
	
		<script src="admin/js/modernizr.js"></script>
	
		<script src="admin/js/bootstrap.min.js"></script>
	
		<script src="admin/js/jquery.cookie.js"></script>
	
		<script src='admin/js/fullcalendar.min.js'></script>
	
		<script src='admin/js/jquery.dataTables.min.js'></script>

		<script src="admin/js/excanvas.js"></script>
		<script src="admin/js/jquery.flot.js"></script>
		<script src="admin/js/jquery.flot.pie.js"></script>
		<script src="admin/js/jquery.flot.stack.js"></script>
		<script src="admin/js/jquery.flot.resize.min.js"></script>
	
		<script src="admin/js/jquery.chosen.min.js"></script>
	
		<script src="admin/js/jquery.uniform.min.js"></script>
		
		<script src="admin/js/jquery.cleditor.min.js"></script>
	
		<script src="admin/js/jquery.noty.js"></script>
	
		<script src="admin/js/jquery.elfinder.min.js"></script>
	
		<script src="admin/js/jquery.raty.min.js"></script>
	
		<script src="admin/js/jquery.iphone.toggle.js"></script>
	
		<script src="admin/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="admin/js/jquery.gritter.min.js"></script>
	
		<script src="admin/js/jquery.imagesloaded.js"></script>
	
		<script src="admin/js/jquery.masonry.min.js"></script>
	
		<script src="admin/js/jquery.knob.modified.js"></script>
	
		<script src="admin/js/jquery.sparkline.min.js"></script>
	
		<script src="admin/js/counter.js"></script>
	
		<script src="admin/js/retina.js"></script>

		<script src="admin/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
