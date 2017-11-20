<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url()."assets/css_setting/"; ?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="<?php echo base_url()."assets/css_setting/"; ?>css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?php echo base_url()."assets/css_setting/"; ?>css/morris.css" type="text/css"/>
	<!-- Graph CSS -->
	<link href="<?php echo base_url()."assets/css_setting/"; ?>css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<script src="<?php echo base_url()."assets/css_setting/"; ?>js/jquery-2.1.4.min.js"></script>
	<!-- //jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/css_setting/"; ?>css/icon-font.min.css" type='text/css' />

	<link href="<?php echo base_url()."assets/css_home/"; ?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo base_url()."assets/css_home/"; ?>css/style.css" type="text/css" rel="stylesheet" media="all">  
	<link href="<?php echo base_url()."assets/css_home/"; ?>css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons --> 
	<link href='<?php echo base_url()."assets/css_home/"; ?>css/simplelightbox.min.css' rel='stylesheet' type='text/css'> <!-- light box css -->   
	<!-- //Custom Theme files -->  
	<!-- js --> 
	<script src="<?php echo base_url()."assets/css_home/"; ?>js/jquery-2.2.3.min.js"></script>  
	<!-- //lined-icons -->
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
						<h1><a href="<?php echo site_url('btraveladmin/settinghome');?>">SETTING</a></h1>

					</div>
					<div class="logo-w3-agile">
						<h1><a href="<?php echo site_url('btravel/home');?>">HOME</a></h1>

					</div>

					<?php
					if(!empty($this->session->userdata('usernameadmin'))){
						?>
						<div class="profile_details w3l">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><img src="<?php echo base_url()."assets/css_setting/"; ?>images/in4.jpg" alt=""> </span> 
											<div class="user-name">

												<p><?php echo $this->session->userdata('usernameadmin')?></p>
												<span>Administrator</span>
											</div>
											<i class="fa fa-angle-down"></i>
											<i class="fa fa-angle-up"></i>
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul>
								</li>
							</ul>
						</div>
						<?php
					}else
					{
						?>
						<div class="profile_details w3l">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><img src="<?php echo base_url()."assets/css_setting/"; ?>images/in4.jpg" alt=""> </span> 
											<div class="user-name">

												<p><?php echo $this->session->userdata('username')?></p>
												<span>Member</span>
											</div>
											<i class="fa fa-angle-down"></i>
											<i class="fa fa-angle-up"></i>
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
										<li> <a href="<?php echo site_url('Btravelmember/update/'.$this->session->userdata('username')); ?>"><i class="fa fa-sign-out"></i> Pengaturan</a> </li>
									</ul>
								</li>
							</ul>
						</div>
						<?php
					}
					?>

					<div class="clearfix"> </div>	
				</div>
				<!--heder end here-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
				</ol>
				<!--four-grids here-->
				



				<!--//photoday-section-->	
				<!--w3-agileits-pane-->	

				<!--//w3-agileits-pane-->	
				<!-- script-for sticky-nav -->
				<script>
					$(document).ready(function() {
						var navoffeset=$(".header-main").offset().top;
						$(window).scroll(function(){
							var scrollpos=$(window).scrollTop(); 
							if(scrollpos >=navoffeset){
								$(".header-main").addClass("fixed");
							}else{
								$(".header-main").removeClass("fixed");
							}
						});

					});
				</script>
				<!-- /script-for sticky-nav -->
				<!--inner block start here-->
				<div class="inner-block">

				</div>
				<!--inner block end here-->
				<!--copy rights start here-->
				<div class="copyrights">
					<p>© 2016 Pooled. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>	
				<!--COPY rights end here-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo1">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
			</header>
			<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
			<div class="menu">
				<ul id="menu" >
					<?php 
					if(!empty($this->session->userdata('usernameadmin'))){
						?>
						<li><a href="<?php echo site_url('btraveladmin/settinghome');?>"><i class="fa fa-tachometer"></i> <span>Home</span><div class="clearfix"></div></a></li>

						<li><a href=""><i class="fa fa-table"></i>  <span>List</span><span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
							<ul>
								<li><a href="<?php echo site_url('btraveladmin/settingpaketlist');?>">Paket</a></li>
								<li><a href="<?php echo site_url('btraveladmin/settingbookinglist');?>">Booking</a></li>
								<li><a href="<?php echo site_url('btraveladmin/settingkomentarlist');?>">Komentar</a></li>
								<li><a href="<?php echo site_url('btraveladmin/settingmemberlist');?>">Member</a></li>
								<li><a href="<?php echo site_url('btraveladmin/settingkonfirmasilist');?>">Konfirmasi</a></li>
							</ul>
						</li>
						<?php
					}else
					{
						?>
						<li><a href="<?php echo site_url('btraveladmin/settinghome');?>"><i class="fa fa-tachometer"></i> <span>Home</span><div class="clearfix"></div></a></li>

						<li><a href="<?php echo site_url('btravelbooking/indexuser/'.$this->session->userdata('username')); ?>"><i class="fa fa-table"></i>  <span>Booking</span><div class="clearfix"></div></a>
						</li>

						<?php
					}
					?>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>		
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {                
			if (toggle)
			{
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({"position":"absolute"});
			}
			else
			{
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({"position":"relative"});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<script src="<?php echo base_url()."assets/css_setting/"; ?>js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url()."assets/css_setting/"; ?>js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url()."assets/css_setting/"; ?>js/bootstrap.min.js"></script>
	<!-- /Bootstrap Core JavaScript -->	   
	<!-- morris JavaScript -->	
	<script src="<?php echo base_url()."assets/css_setting/"; ?>js/raphael-min.js"></script>
	<script src="<?php echo base_url()."assets/css_setting/"; ?>js/morris.js"></script>
	<script>
		$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
		jQuery('.small-graph-box').hover(function() {
			jQuery(this).find('.box-button').fadeIn('fast');
		}, function() {
			jQuery(this).find('.box-button').fadeOut('fast');
		});
		jQuery('.small-graph-box .box-close').click(function() {
			jQuery(this).closest('.small-graph-box').fadeOut(200);
			return false;
		});

	    //CHARTS
	    function gd(year, day, month) {
	    	return new Date(year, month - 1, day).getTime();
	    }

	    graphArea2 = Morris.Area({
	    	element: 'hero-area',
	    	padding: 10,
	    	behaveLikeLine: true,
	    	gridEnabled: false,
	    	gridLineColor: '#dddddd',
	    	axes: true,
	    	resize: true,
	    	smooth:true,
	    	pointSize: 0,
	    	lineWidth: 0,
	    	fillOpacity:0.85,
	    	data: [
	    	{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
	    	{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
	    	{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
	    	{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
	    	{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
	    	{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
	    	{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
	    	{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
	    	{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
	    	{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
	    	],
	    	lineColors:['#ff4a43','#a2d200','#22beef'],
	    	xkey: 'period',
	    	redraw: true,
	    	ykeys: ['iphone', 'ipad', 'itouch'],
	    	labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
	    	pointSize: 2,
	    	hideHover: 'auto',
	    	resize: true
	    });


	});
</script>
</body>
</html>