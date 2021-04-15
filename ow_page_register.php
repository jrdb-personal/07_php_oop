<!DOCTYPE html>
<html>
<head>
	<title>My Online Webstore</title>
	<link rel="stylesheet" type="text/css" href=css/bootstrap.css>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>

<div class="container">
<h1><label>My Online Webstore</label></h1>
</div>

<div class="container">
	<div class="row">
		<div class="container"> 
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-10">	
					<form action="ow_action_register.php" method="POST">		
						<div class="form-group">
							<div class="col-md-4">	
							</div>
							<div class="col-md-4 col-md-offset-10">
								<label>Email</label>
								<input type="text" name="email" class="form-control">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-4">	
							</div>
							<div class="col-md-3 col-md-offset-10">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-4">
							</div>

							<div class="col-md-3 col-md-offset-10">
								<label>Confirm Password:</label>
								<input type="Password" name="cpassword" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-5">
								<label></label>
							</div>
							<div class="col-md-5 col-md-offset-10">
								<input type="submit" value="Register" name="register" class="btn default">
								<button class="btn default"><a href="index.php">Cancel</a></button>	
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('ow_page_footer.php'); ?>

</body>
</html>

