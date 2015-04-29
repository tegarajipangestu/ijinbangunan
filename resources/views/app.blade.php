<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>IjinBangunan | Portal Permohonan IMB</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--  webfonts  -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- // webfonts  -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='admin/js/jquery.dataTables.min.js'></script>
</head>
<body>
<div class="header_bg"><!-- start header -->
	<div class="container">
		<div class="row header">
		<nav class="navbar" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="home"><img src="images/logo.png" alt=""></a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		      	@if($currentpage=='home' || $currentpage=='login')
		        <li class="active"><a href="home">Beranda</a></li>
		        @else
		        <li><a href="home">Beranda</a></li>
		        @endif
		      	@if($currentpage=='ajukanijin' || $currentpage=='retribusi')
		        <li class="active"><a href="ajukanijin">Ajukan ijin</a></li>
		        @else
		        <li><a href="ajukanijin">Ajukan ijin</a></li>
		        @endif
		      	@if($currentpage=='showijin')
		        <li class="active"><a href="showijin">Daftar ijin</a></li>
		        @else
		        <li><a href="showijin">Daftar ijin</a></li>
		        @endif
		      	@if($currentpage=='keluhan')
		        <li class="active"><a href="keluhan">Keluhan</a></li>
		        @else
		        <li><a href="keluhan">Keluhan</a></li>
		        @endif
		      	@if($currentpage=='myijin')
		        <li class="active"><a href="myijin">Permohonan Saya</a></li>
		        @else
		        <li><a href="myijin">Permohonan Saya</a></li>
		        @endif
		      </ul>
		      <div class="navbar-form navbar-right" role="search">
		        <a href=<?php	if(!isset($_COOKIE["username"])) {echo "\"login\"";
				} else {
					echo "\"logout\"";
				}?>><button class="btn btn-default"><?php	if(!isset($_COOKIE["username"])) {echo "Login";
				} else {
					echo "Logout";
				}?></button></a>
		      </div>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
		<div class="row slider text-center">
			<div class="col-md-8">
					<div class="col-md-10 slider_text">
						<h3>Sampurasun 
							<?php	if(!isset($_COOKIE["username"])) {echo "Warga Bandung";
								} else {
									echo $_COOKIE["username"];
								}?>
							!</h3>
						<h2>Mau mendirikan bangunan?</h2>
						<h3>Ijin ke akang dulu, sayang :*</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="slider_img">
						<img src="images/pic1.png" alt="" class="img-responsive"/>
					</div>
				</div>
			</div>
	</div>
</div>

@yield('content')
	
<div class="footer_bg"><!-- start footre -->
	<div class="container">
		<div class="row  footer">
			<div class="col-md-3 span1_of_4">
				<h4>Tentang Kami</h4>
				<p>Dinas Tata Ruang Kota Bandung</p>
				<h5>Alamat</h5>
				<p class="top">Jl.Cianjur No. 34 40195</p>
				<p>Bandung</p>
				<p>Telp. (022) 7217451</p>
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>Permohonan Masuk</h4>
				<span><a href="#"> Rumah Sakit - Jalan Ganeyssia no 50 Kota Bandung </a></span>
				<p>25 April 2013</p>
				<span><a href="#"> Toko/Ruko - Jalan Ganeyssia no 12 Kota Bandung </a></span>
				<p>25 April 2013</p>
				<span><a href="#"> Panti Asuhan - Jalan Ganeyssia no 32 Kota Bandung </a></span>
				<p>25 April 2013</p>
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>Permohonan Diterima</h4>
				<span><a href="#"> Pendidikan - Jalan Ganeyssia no 10 Kota Bandung </a></span>
				<p>25 April 2013</p>
			</div>
			<div class="col-md-3 span1_of_4">
<!-- 				<h4>photostream</h4>
				<ul class="f_nav list-unstyled">
					<li><a href="#"><img src="images/f_pic1.jpg" alt="" class="img-responsive"/></a></li>
					<li><a href="#"><img src="images/f_pic3.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic4.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic5.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic7.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic1.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic6.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic8.jpg" alt="" class="img-responsive"/> </a></li>
					<li><a href="#"><img src="images/f_pic2.jpg" alt="" class="img-responsive"/> </a></li>
				</ul>
 -->			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="footer_btm"><!-- start footer_btm -->
	<div class="container">
		<div class="row  footer1">
			<div class="col-md-5">
				<div class="soc_icons">
					<ul class="list-unstyled">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
						<div class="clearfix"></div>
					</ul>	
				</div>
			</div>
			<div class="col-md-7 copy">
				<p class="link text-right"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>