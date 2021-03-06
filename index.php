<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="ankit_adv";
$table_name="services";
$connection=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$connection){
    die('Could not connect: ');
}
// echo 'Successfully Connected<br>';
$quer="select * from $table_name";
$res=mysqli_query($connection, $quer);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<title>ASTC</title>
	<!-- icon -->
    <link rel="icon" type="image/ico" href="./img/astc_logo.png" />

	<!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- StyleSheets -->
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/sideNavBar.css">

	<!-- JavaScript -->
	<script src="./js/sideNav.js"></script>

	<!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Chango&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<!-- Google icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Fontawesome icons -->
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>

</head>
<body>
		<!-- Navigation bar -->
		<header id="header">
			<div id="bottom-nav">
				<div class="container">
					<nav class="navbar-expand-sm" id="nav">
						<ul class="main-nav nav navbar-nav">
							<li><a href="#">Home</a></li>
							<li><a href="#aboutus">About Us</a></li>
							<li><a href="#contactus">Contact</a></li>
							<li><a href="#ourservices">Services</a></li>
							<li>
								<a>
									<i class="fas fa-mobile-alt"></i>
									+91-90275-28580
								</a>					
							</li>
							<li>
								<a>
									<i class="far fa-envelope"></i>
									ankit.g332@gmail.com
								</a>					
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
			
		<!-- side Nav Menu icon -->
		<span id="sideNavMenu" style="cursor: pointer;" onclick="openNav()">
			<div class="sideNav-icon">
				<div></div>
			</div>			
		</span>
		<!-- END side Nav Menu icon -->

		<!-- side Nav Menu-->
		<div id="mySidenav" class="sidenav" onclick="closeNav()">
			<a href="#" onclick="closeNav()">Home</a>
			<a href="#aboutus" onclick="closeNav()">About Us</a>
			<a href="#ourservices" onclick="closeNav()">Services</a>
			<a href="#contactus" onclick="closeNav()">Contact</a>
		</div>
		<!-- END side Nav Menu -->
		<!-- END Navigation bar -->

		<!-- Home -->
		<div id="home" class="banner-area">
			<!-- Backgound Image -->
			<div class="home-bg-image home-bg-parallax overlay" style="background-image:url(./img/justice.jpg)"></div>
			<div class="home-wrapper">
				<div class="text-center">
					<div class="home-content">
						<h1 class="text-light">Getting it Done</h1>
						<h4 class="primary-color">JUSTICE . EQUALITY . TRUST</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- END Home -->
	
	<!-- About Us -->
	<div id="aboutus" class="about-us-section container">
		<div class="section-head about-us-section-head">
			<h1>About <span class="primary-color"> Us</span></h1>
		</div>
		<div class="section-content about-us-section-content row">
			<div class="col-lg-5 aboutus-image"></div>
			<div class="col-lg-7 order-2">
				<div class="about-us-section-content-head">
					<h3>
						ANKIT SANGAL
					</h3>
				</div>
				<p class="about-us-section-content-desc">
					I am an experienced Taxation Consultant working as a professional
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto harum officiis accusantium? Numquam architecto repudiandae deserunt adipisci magni harum accusantium quo eos libero sed saepe earum itaque, blanditiis voluptatem placeat beatae sint dicta ducimus cupiditate vero, ab veritatis enim. Cum possimus saepe dolorum expedita sapiente totam. Sed dolores iure ut!

				</p>
				<ul class="about-us-section-content-list">
					<li>More than 5 years of experience</li>
					<li>Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet.</li>
					<li>Lorem ipsum dolor sit amet.</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- END About Us -->

	<!-- Why us  -->
	<div id="#whyus" class="whyus-section container">
		<div class="section-head">
			<h1>Why <span class="primary-color"> Us ?</span></h1>
		</div>
		<div class="section-content row">
			<!-- Features -->
			<div class="col-md-4">
				<div class="info info-horizontal">
				  <div class="icon icon-primary icon-circle">
					<i class="fas fa-users-cog primary-color"></i>
				  </div>
				  <div class="description">
					<h4 class="info-title">Best Team</h4>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, possimus?</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info info-horizontal">
				  <div class="icon icon-primary icon-circle">
					<i class="fas fa-rupee-sign primary-color"></i>
				  </div>
				  <div class="description">
					<h4 class="info-title">Low Cost</h4>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui, voluptates?</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="info info-horizontal">
				  <div class="icon icon-primary icon-circle">
					<i class="fas fa-gavel primary-color"></i>
				  </div>
				  <div class="description">
					<h4 class="info-title">Best Strategy</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, adipisci.</p>
				  </div>
				</div>
			</div>
			<!--END Features  -->
		</div>
	</div>
	<!-- END why us -->

	<!-- Our Services  -->
	<div id="#ourservices" class="services-section container">
		<div class="section-head">
			<h1><span class="primary-color"> Services</span> We Provide</h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="lead text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, iste ipsa. Provident.</p>
			</div>
		</div>
			
			<!-- row1 -->
			<div class="service-row row accordion">
				
				<?php
				$i="a";
				while ($row = mysqli_fetch_assoc($res)) {
					print '<div class="service-col col-sm-6 col-md-3">';
						print '<div class="service text-center" role="button" data-toggle="collapse" data-target="#'.$i.'" aria-expanded="false">';
							echo $row['service_head'];
						print '</div>';
						print "<div id='".$i."' class='service-desc collapse'>";
							echo $row['service_desc'];
						print "</div>";
					print "</div>";
					$i++;
				}
				$i="a";
				?>
			</div>
			
	</div>
	<!--END Our Services  -->


	<!-- Meetus -->
	<div id="contactus" class="meetus-section container">
		<div class="section-head">
			<h1><span class="primary-color">Meet</span> Us At</h1>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<p class="lead text-center mb-0">
					<i class="fas fa-mobile-alt"></i>
					+91-90275-28580
				</p>
			</div>
			<div class="col-lg-9">
				<p class="lead text-center">
					<i class="fas fa-map-marker-alt "></i>
					Anupam Vihar lane-2, New Patel Nagar, Dehradun- 248001
				</p>
			</div>
		</div>

		<div class="mt-1 mb-5 row">
			<div class="col-lg-4 mx-auto mb-3 mb-lg-0 text-center">
			  <h3 class="mt-0">
				  Ready to get started?
			  </h3>
		  </div>
		  <div class="col-lg-5 ">
			  <input type="email" class="form-control" placeholder="Enter your email...">
		  </div>
		  <div class="col-lg-3 mt-lg-0 mt-3 text-right text-lg-left">
			  <button type="submit" class="contact-button btn ">Contact us!</button>
		  </div>
	  </div>


		<!-- Map -->
		<div class="map-responsive mb-5">
			<!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" frameborder="0" style="border:0" allowfullscreen></iframe> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3444.477592422408!2d78.01218281512138!3d30.308930381786
			855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092a26057f9c07
			%3A0xa9b3387594dfa7fc!2sShakti%20Enclave%2C%20Kaonli%2C%20Dehradun%2C%20Uttarakhand%20248146
			!5e0!3m2!1sen!2sin!4v1581518472582!5m2!1sen!2sin" 
			 frameborder="0" allowfullscreen="true">
			</iframe>
		</div>
		<!-- END Map -->
		
	</div>
  	<!-- END Meetus -->

	  <!-- Footer -->
	  <footer class="footer">
		<div class="container">
		  <div class="footer-row row">
			<div class="footer-col-icons col-md-6 text-center order-md-2 mb-sm-5 text-lg-right ">
			  <ul class="contact-icons list-inline">
				<li class="list-inline-item mr-5 ">
					<a href="mailto:ankitg332">
						<i class="fab fa-google fa-2x"></i>	
					</a>
				</li>
				<li class="list-inline-item mr-5">
					<a href="https://www.facebook.com/ankit.sangal.71">
					  <i class="fab fa-facebook-f fa-2x"></i>
					</a>
				</li>
				<li class="list-inline-item mr-5">
				  <a href="#">
					<i class="fab fa-linkedin-in fa-2x"></i>
				  </a>
				</li>
			  </ul>
			</div>
			<div class="col-md-6 text-center order-md-1 text-lg-left">
				<ul class="list-inline ">
				  <li class="list-inline-item">
					<a href="#">About</a>
				  </li>
				  <li class="list-inline-item">&sdot;</li>
				  <li class="list-inline-item">
					<a href="#">Terms of Use</a>
				  </li>
				  <li class="list-inline-item">&sdot;</li>
				  <li class="list-inline-item">
					<a href="#">Privacy Policy</a>
				  </li>
				</ul>
			  </div>  
		  </div>
		<div class="col-12 text-center">
			<p class="text-muted small">&copy; ASTC 2020. All Rights Reserved.</p>
		</div>
	  </div>
	</footer>
	


    <!-- Bootstrap cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- Bootstrap cdn -->
	
	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript" src="js/google-map.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>