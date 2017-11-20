<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>BTRAVEL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Passengers Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url()."assets/css_home/"; ?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url()."assets/css_home/"; ?>css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="<?php echo base_url()."assets/css_home/"; ?>css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->  
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>  
	<!-- banner -->
	<div class="agileits-banner">
		<div class="bnr-agileinfo"> 
			<!-- navigation -->
			<div class="top-nav w3-agiletop">
				<div class="container">
					<div class="navbar-header w3llogo">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>  
						<h1><a href="index.html">BTRAVEL</a></h1> 
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-right">
							<ul class="nav navbar">
								<li><a href="<?php echo site_url('btravel/home');?>">Home</a></li>
								<li><a href="<?php echo site_url('btravel/about');?>">About</a></li> 
								<li><a href="<?php echo site_url('btravel/paket');?>">Paket</a></li> 
								<li><a href="<?php echo site_url('btravel/contact');?>" class="active">Contact</a></li> 
								<?php
								$member = $this->session->userdata('username');
								$admin = $this->session->userdata('usernameadmin');
								if(empty($member) && empty($admin)){
									?>
									<li><a href="#" data-toggle="modal" data-target="#myModal1">Login</a></li>
									<li><a href="#" data-toggle="modal" data-target="#myModal2">Register</a></li>
									<?php
								}else if(!empty($member))
								{
									?>
									<li><a href="<?php echo site_url('btraveladmin/settinghome');?>"><?php echo $this->session->userdata('username');?> (Setting)</a></li>
									<li><a href="<?php echo site_url('login/logout'); ?>"onclick="myFunction()" >Log out</a></li>
									<?php
								}else
								{
									?>
									<li><a href="<?php echo site_url('btraveladmin/settinghome');?>"><?php echo $this->session->userdata('usernameadmin');?> (Setting)</a></li>
									<li><a href="<?php echo site_url('login/logout'); ?>" onclick="myFunction()">Log out</a></li>
									<?php
								}?>
							</ul>
							<script>
								function myFunction() {
									alert("Anda berhasil log out!");
								}
							</script>
						</div> 
						<div class="clearfix"> </div>  
					</div>
				</div>	
			</div>	
			<!-- //navigation -->
			<!-- banner-text -->
			<div class="banner-text agileinfo about-bnrtext"> 
				<div class="container">
					<h2><a href="index.html">Home</a> / Contact</h2> 
				</div>
			</div>
			<!-- //banner-text -->   
		</div>
	</div>
	<!-- //banner --> 
	<!-- contact -->
	<div class="contact agileits">
		<div class="container">  
			<div class="agileits-title">
				<h3>Kontak Kami</h3>
			</div>  
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-form wthree">
					<form action="<?php echo site_url('btravelkomentar/tambah_aksi')?>" method="post">
						
						<textarea placeholder="Message" name="isi_komentar" required></textarea>
						<input type="hidden" name="username_member" value="<?php echo $this->session->userdata('username');?>">
						<?php
						if(!empty($this->session->userdata('username')) || !empty($this->session->userdata('usernameadmin')) ){
						?>
						<input type="submit" value="SUBMIT">
						<?php
					}else
					{
						?>
						<br>
						<h5>Anda harus login terlebih dahulu untuk dapat men-submit</h5>
						<?php
					}
					?>
					</form>
				</div>
				<div class="col-md-4 contact-right wthree">
					<div class="contact-text w3-agileits">
						<h4>ALAMAT</h4>
						<p><i class="fa fa-map-marker"></i>Jalan blablabla No.4A</p>
						<p><i class="fa fa-phone"></i> Telepon : 0761 888 88</p>
						<p><i class="fa fa-fax"></i> Fax : 0761 888 88</p>
						<p><i class="fa fa-envelope-o"></i> Email : <a href="mailto:example@mail.com">btravel@gmail.com-</a></p> 
					</div> 
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //map -->   
	<!-- subscribe -->
	<div class="subscribe jarallax">
		<div class="container">
			<div class="agileits-title title2">
				<h3>SEKILAS TENTANG KAMI</h3>
			</div>   
			<p>Kami adalah sebuah agen tour yang memberikan paket perjalanan kepada anda yang berkhususkan di daerah bali.</p>
			<p>Harga paket yang kami tawarkan jauh lebih murah dari paket perjalanan di agen tour lainnya</p>
			
		</div>
	</div>

	<!-- //subscribe -->
	<!-- features -->
<?php
if(!empty($this->session->userdata('username')) || !empty($this->session->userdata('usernameadmin'))){
	?>
	
	<?php
}else
{
	?>

		<div class="features">
		<div class="container">   
			<div class="wthree-features-row">
				<div class="col-md-6 features-w3grid"> 
					<div class="features-row2"> 
						<div class="features-w3lleft">  
							<h4>New User</h4>
							<p>Register here to become a member</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal2">Register</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 features-w3grid">  
					<div class="features-row2"> 
						<div class="features-w3lleft">  
							<h4>Already a Member </h4>
							<p>Please sign in here</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal1">Login</a>
						</div>
						<div class="clearfix"> </div>
					</div> 
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<?php
}
	?>	<!-- //features -->
	<!-- login modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<img src="<?php echo base_url()."assets/css_home/"; ?>images/img5.png" class="img-responsive login-img" alt=""/>
					<h4 class="modal-title">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub"> 
					<h3>Login to your account</h3>
					<div class="register">
						<form action="<?php echo site_url('login');?>" method="post">			
							<input name="username" placeholder="Username" type="text" required="">						
							<input name="password" placeholder="Password" type="password" required="">										
							<div class="sign-up">
								<input type="submit" value="Login"/>
							</div>
						</form>
					</div>  
				</div>
			</div>
		</div>
	</div> 
	<!-- //login modal -->	
	<!-- register modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<img src="<?php echo base_url()."assets/css_home/"; ?>images/img5.png" class="img-responsive login-img" alt=""/>
					<h4 class="modal-title">Don't Wait, Register now!</h4>
				</div>
				<div class="modal-body modal-body-sub"> 
					<div class="modal_body_left modal_body_left1"> 
						<h3>Register to your account</h3>
						<div class="register">
							<form action="<?php echo site_url('btravelregister/tambah_aksi');?>" method="post">			
								<input placeholder="Username" name="username" type="text" required="">
								<input placeholder="Email Address" name="email" type="email" required="">	
								<input placeholder="Password" name="password" type="password" required="">	
								<div class="sign-up">
									<input type="submit" value="Register"/>
								</div>
							</form>
						</div> 		 
					</div>  
				</div>
			</div>
		</div>
	</div> 
	<!-- //register modal -->	
	<!-- footer -->
<div class="footer w3-w3layouts">
		<div class="container"> 
			<div class="footer-agileinfo">
				<div class="col-md-4 col-sm-4 footer-wthreegrid">
					<h3>About Website</h3> 
					<div class=" footerabt-w3text"> 
						<p>Kami adalah sebuah agen tour yang memberikan paket perjalanan kepada anda yang berkhususkan di daerah bali.</p>
						<div class="social-w3licon">
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
						</div>  
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-sm-4 footer-wthreegrid">
					<h3>Motto Kami</h3>
					<ul>
						<li><font color="white">- CEPAT -</font></li>
						<li><font color="white">- MURAH -</font></li>
						<li><font color="white">- BERKUALITAS -</font></li>
						<li><font color="white">- NYAMAN -</font></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-wthreegrid footer-tags">
					<h3>Tag Cloud</h3>
					<ul>
						<li><a href="<?php echo site_url('btravel/home');?>">Home</a></li>
						<li><a href="<?php echo site_url('btravel/about');?>">About</a></li>
						<li><a href="<?php echo site_url('btravel/paket');?>">Paket</a></li>
						<li><a href="<?php echo site_url('btravel/contact');?>">Contact</a></li>
					</ul>
				</div> 
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>
		<div class="copy-right"> 
		<div class="container">
			<p>© 2017 Passengers. All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
		</div> 
	</div> 
	<!-- //footer -->   
	<!-- footer modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="<?php echo base_url()."assets/css_home/"; ?>images/img1.jpg" class="img-responsive" alt=""> 
					<h5>Cras rutrum iaculis enim</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //footer modal -->   
	<!-- js --> 
	<script src="<?php echo base_url()."assets/css_home/"; ?>js/jquery-2.2.3.min.js"></script> 
	<script src="<?php echo base_url()."assets/css_home/"; ?>js/SmoothScroll.min.js"></script>
	<script src="<?php echo base_url()."assets/css_home/"; ?>js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //js -->  
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="<?php echo base_url()."assets/css_home/"; ?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/css_home/"; ?>js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()."assets/css_home/"; ?>js/bootstrap.js"></script>
</body>
</html>