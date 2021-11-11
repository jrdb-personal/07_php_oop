<!DOCTYPE html>
<html>
<head>
	<title>My Online Webstore</title>
	<link rel="stylesheet" type="text/css" href=css/bootstrap.css>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body> <?php session_start(); ?>

	<div class="container">
		<h1><label>My Online Store</label></h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="container"> 
				<div class="panel panel-default">
					<div class="panel-body">
						
						<div class="col-md-6 col-md-offset-9">	
							<?php echo "User: ".$_SESSION['UserEmail']; ?>
						</div>

						<!--navigation bar -->
						<div class="col-md-12">
							<nav class="navbar navbar-inverse">
							  <div class="container-fluid">
								<div class="navbar-header">
								  <a class="navbar-brand" href="#">LOGO</a>
								</div>
								<ul class="nav navbar-nav">
								  <li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="ow_page_profile.php">Profile</a></li>
									  <li><a href="#">Settings</a></li>
									  <li><a href="ow_action_logout.php">Logout</a></li>
									</ul>
								  </li>
								  
								  <li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">Products<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="ow_item_list.php">View all Items</a></li>
									  <li><a href="#">Promo Items</a></li>
									  <li><a href="#">Search by Category</a></li>
									</ul>
								  </li>
								  <li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">Transactions<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="#">Track My Orders</a></li>
									  <li><a href="#">Transaction History</a></li>
									  <li><a href="#">Request Item Return</a></li>
									</ul>
								  </li>
								</ul>
							  </div>
							</nav>
						</div>
						<!-- navigation bar -->

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