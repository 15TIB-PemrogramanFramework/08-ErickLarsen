<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Tabels :: w3layouts</title>
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
	<!-- tables -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css_setting/"; ?>css/table-style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css_setting/"; ?>css/basictable.css" />
	<script type="text/javascript" src="<?php echo base_url()."assets/css_setting/"; ?>js/jquery.basictable.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').basictable();

			$('#table-breakpoint').basictable({
				breakpoint: 768
			});

			$('#table-swap-axis').basictable({
				swapAxis: true
			});

			$('#table-force-off').basictable({
				forceResponsive: false
			});

			$('#table-no-resize').basictable({
				noResize: true
			});

			$('#table-two-axis').basictable();

			$('#table-max-height').basictable({
				tableWrapper: true
			});
		});
	</script>
	<!-- //tables -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

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
						<h1><a href="<?php echo site_url('btraveladmin/settinghome'); ?>">SETTING</a></h1>
						
					</div>
					<div class="logo-w3-agile">
						<h1><a href="<?php echo site_url('btravel/home'); ?>">HOME</a></h1>
						
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
										<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
										<li> <a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
					<li class="breadcrumb-item"><a href="<?php echo site_url('btraveladmin/settinghome');?>">Home</a><i class="fa fa-angle-right"></i>Paket</li>
				</ol>
				<div class="agile-grids">	
					<!-- tables -->
					
					<div class="agile-tables">
						<div class="w3l-table-info">
							<h2>LIST PAKET</h2>

							<div class="row">
								<div class="col-md-12 text-right">
									<a href="<?php echo site_url('btravel/tambah'); ?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px"><i class="fa fa-plus"></i> Tambah</a>
								</div>	
							</div>

							<table id="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama paket</th>
										<th>Harga paket</th>
										<th>Rincian</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($btravel as $key => $value) {
										?>
										<tr>
											<td><?php echo $value->id_paket; ?></td>
											<td><?php echo $value->nama_paket; ?></td>
											<td><?php echo $value->harga_paket; ?></td>
											<td><?php echo $value->rincian_paket; ?></td>
											<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url()?>assets/uploads/<?php echo $value->gambar; ?>"></td>
											<td>
												<a href="<?php echo site_url('btravel/delete/'.$value->id_paket); ?> " class="btn btn-danger">
													<B>HAPUS</B>
												</a>

												<a href="<?php echo site_url('btravel/update/'.$value->id_paket); ?> " class="btn btn-warning">
													<b>EDIT</b>
												</a>
											</td>
										</tr>
										<?php } ?>

									</tbody>
								</table>
							</div>
							<!-- //tables -->
						</div>
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
							<p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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

		</body>
		</html>