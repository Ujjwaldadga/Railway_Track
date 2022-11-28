<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<style>
		.rating {
  
  position: relative;
  height: 100px;
  line-height: 100px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}
</style>
		<title>Contact Us</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<header id="header" class="skel-layers-fixed">
				<nav class="nav">
				<div class="container">
	    <div class="navbar-header">
<!--	    	<a href="#" class="pull-left ">
	    <div id="logo" alt="TheAppleTalks Logo"></div>	-->
	    </a>
	    <div class="navbar-brand">
	    </div></div></div></nav>
				<nav id="nav" class="">
					<ul>
						<li><strong><?php if ($_SESSION['Admin'] == '0') {?>
              <a href="../Admin/admin.php">DASHBOARD</a>
						<?php } elseif ($_SESSION['Admin'] == '1') {?>
              <a href="../dashboard/dashboard.php">DASHBOARD</a>
            <?php } else {?><a href="index.php">HOME</a>
            <?php }?></strong></li>
						<li><strong><a href="statusretriever.php">LIVE STATUS</a></strong></li>

						</div></strong></li>
						<li><strong><a href="About.php">ABOUT</a></strong></li>
						<li><strong><a href="Team.php" >TEAM</a></strong></li>
						<li><strong><a href="contact.php" class="selected">CONTACT</a></strong></li>
					</ul>
				</nav>
			</header>
		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Contact us</h2>
					<p>Blaze-Train tracking and time prediction system</p>
				</header>
				<div class="container">
					<section>
						<h3>Please Review our Website:<span class="rating">
							<form class="rating">
  <label>
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</form>

						</span></h3><br>
						<h3>If you have any <strong><font color=black>Complaints/Requests</font></strong> Please Login and Click here:</h3><a target="_blank" href="User/complaint_form.php" class="button special">Complaint/Request</a>
						<br><br>
						<h3>You can also Contact us at <strong><font color=black>blaze@pm.me</font></strong>.</h3>
            <h3>To buy a<strong><font color=black> premium subscription</font> </strong>Login and Click below:</h3><a target="_self" href="payment.php" class="button special">Buy premium subscription</a>
						<br><br>
					</section>
						</div>
						<hr>
						<div align="center">&copyBlaze.All Rights Reserved.</div>
			</section>

			<script type="text/javascript" src="js/script.js"></script>

	</body>
</html>
