<?php
	
	session_name('paygate_payweb3_testing_sample');
	session_start();
	session_destroy();

	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>PayWeb- Initiate</title>
		<link rel="stylesheet" href="css2/bootstrapp.min.css">
		<link rel="stylesheet" href="css2/core.css">
	</head>
	<body>
    
    </div>
		<div class="container-fluid" style="min-width: 320px;">
       	
            <nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
	
						<span style="color: #f4f4f4; font-size: 18px; line-height: 45px; margin-right: 10px;"><strong>PayWeb</strong></span>
					</div>
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="/<?php echo $root; ?>/PayWeb3/index.php">Initiate</a>
							</li>
							
							<li>
								<a href="index.php">Main page</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div style="background-color:#57B7DF; text-align: center; margin-top: 51px; margin-bottom: 15px; padding: 4px;"><strong>Payment received!</strong></div>
			<div class="container">
			<form role="form" class="form-horizontal text-left" action="index.php" method="post" name="paygate_initiate_form">
					<section>
						<centre>
         					<a href="#" class="image fit"><img src="images/Thankyou.png" alt="Image cannot be loaded" width="893.3" height="500" /></a>
						</centre>
					</section>
					<div class="form-group">
					
						<div class=" col-sm-offset-4 col-sm-4">
							<input type="submit" name="btnSubmit" class="btn btn-success btn-block" value="Dashboard" />
						</div>
					</div>
					<br>
				</form>
			</div>
	
		</div>

		
			
	</body>
</html>