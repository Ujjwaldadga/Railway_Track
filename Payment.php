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
							
							<li>
								<a href="index.php">Go back</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div style="background-color:#57B7DF; text-align: center; margin-top: 51px; margin-bottom: 15px; padding: 4px;"><strong>Initiate Payment to BlazeTrak</strong></div>
			<div class="container">
				<form role="form" class="form-horizontal text-left" action="Thankyou.php" method="post" name="paygate_initiate_form">
					<div class="form-group">
						<label for="PAYGATE_ID" class="col-sm-3 control-label">PayGate ID</label>
						<div class="col-sm-6">
							<input type="text" name="PAYGATE_ID" id="PAYGATE_ID" class="form-control" value="10011072130" />
						</div>
					</div>
					
					<div class="form-group">
						<label for="AMOUNT" class="col-sm-3 control-label">Amount</label>
						<div class="col-sm-6">
							<input type="text" name="AMOUNT" id="AMOUNT" class="form-control" value="99" />
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="TRANSACTION_DATE" class="col-sm-3 control-label">Transaction Date</label>
						<div class="col-sm-6">
							<input type="text" name="TRANSACTION_DATE" id="TRANSACTION_DATE" class="form-control" value="15-04-2021" />
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="EMAIL" class="col-sm-3 control-label">Customer Email</label>
						<div class="col-sm-6">
							<input type="text" name="EMAIL" id="EMAIL" class="form-control" value="example:srmist@isrmist.edu.in" />
						</div>
					</div>
					<br>
					
					<div class="form-group">
						<label for="BHIM_ID" class="col-sm-3 control-label">Enter Bhim/UPI ID</label>
						<div class="col-sm-6">
							<input type="text" name="BHIM_ID" id="BHIM_ID" class="form-control" value="example:blaze@okicici" />
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class=" col-sm-offset-4 col-sm-4">
							<input type="submit" name="btnSubmit" class="btn btn-success btn-block" value="Comfirm Payment" />
						</div>
					</div>
					<br>
				</form>
			</div>
	
		</div>

		
			
	</body>
</html>