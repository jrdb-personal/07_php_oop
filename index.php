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
							<form action="ow_action_login.php" method="POST">
								<div class="form-group">
									<div class="col-md-4">	
									</div>
									<div class="col-md-4 col-md-offset-10">
										<label>Email:</label>
										<input type="text" name="email" class="form-control">
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-4">
									</div>

									<div class="col-md-4 col-md-offset-10">
										<label>Password:</label>
										<input type="Password" name="password" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-5">
										<label></label>
									</div>
									<div class="col-md-5 col-md-offset-10">
										<input type="submit" value="Log In" name="login" class="btn default">
										<button class="btn default"><a href="ow_page_register.php">Register</a></button>	
									</div>
								</div>
							</form>	
						</div>

						<!-- carousel -->
						<div class="col-md-12">
							<center><h2>Events and Promos</h2></center>
			                <div id="myCarousel" class="carousel slide" data-ride="carousel">
			                    <!-- Indicators -->
			                    <ol class="carousel-indicators">
			                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			                        <li data-target="#myCarousel" data-slide-to="1"></li>
			                        <li data-target="#myCarousel" data-slide-to="2"></li>
			                    </ol>

			                    <!-- Wrapper for slides -->
			                    <div class="carousel-inner">
			                        <div class="item active">
			                            <img src="img/1.png" alt="Events">
			                        </div>

			                        <div class="item">
			                            <img src="img/1.png" alt="Announcements">
			                        </div>

			                        <div class="item">
			                            <img src="img/1.png" alt="Events">
			                        </div>
			                    </div>

			                    <!-- Left and right controls -->
			                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			                        <span class="glyphicon"></span>
			                        <span class="sr-only">Previous</span>
			                    </a>
			                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			                        <span class="glyphicon"></span>
			                        <span class="sr-only">Next</span>
			                    </a>
			                </div>
		               	</div>
		               	<!-- carousel -->
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('ow_page_footer.php'); ?>
</body>
</html>

