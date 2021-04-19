<!DOCTYPE html>
<html>
<head>
	<title>My Online Webstore</title>
	<link rel="stylesheet" type="text/css" href=css/bootstrap.css>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<?php include "ow_actionload_profile.php" ?>
<body> 

	<div class="container">
		<h1><label>My Online Webstore</label></h1>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="container"> 
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-12 col-md-offset-9">	
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
										<a class="dropdown-toggle" data-toggle="dropdown" href="ow_home.php">Account<span class="caret"></span></a>
										<ul class="dropdown-menu">
									  		<li><a href="ow_page_profile.php">Profile</a></li>
									  		<li><a href="#">Settings</a></li>
									  		<li><a href="#">Logout</a></li>
										</ul>
								  	</li>
								  
								  	<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="ow_itemlist">Products<span class="caret"></span></a>
										<ul class="dropdown-menu">
									  		<li><a href="ow_itemlist.php">View all Items</a></li>
									  		<li><a href="#">Promo Items</a></li>
									  		<li><a href="#">Search by Category</a></li>
										</ul>
									</li>
									
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="ow_transaction">Transactions<span class="caret"></span></a>
										<ul class="dropdown-menu">
										  <li><a href="ow_itemlist.php">Track My Orders</a></li>
										  <li><a href="#">Transaction History</a></li>
										  <li><a href="#">Request Item Return</a></li>
										</ul>
								  	</li>
								</ul>
							  </div>
							</nav>
						</div>
						<!-- navigation bar -->

						<!--form body -->
						<div class="col-md-10">	
							<span><h4>My Profile</h4></span>
							<form action="ow_action_profile.php" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<div class="col-md-4">
										<label>First Name</label>
										<input type="text" name="firstname" class="form-control" value="<?php echo $result['UserFirstName']; ?>">


									</div>
								</div>


								<div class="form-group">
									<div class="col-md-4">
										<label>Last Name</label>
										<input type="text" name="lastname" class="form-control" value="<?php echo $result['UserLastName']; ?>" >
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-4">
										<label>Item Image</label>
										<input type="file" name="userimage">
										<img src="<?php echo $result['UserImage'] ?>" width='100' height='100' >
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-5">
										<label>Birdthdate</label>
										<input type="text" name="birthdate" class="form-control" value="<?php echo $result['UserBirthdate']; ?>">
									</div>
								</div>


								<div class="form-group">
									<div class="col-md-3">
										<label>Gender</label>
										<select name="gender" class="form-control">
											<option value="Male" <?php echo $result['UserGender'] == "Male" ? "selected" : ""; ?>>Male</option>
											<option value="Female"<?php echo $result['UserGender'] == "Female" ? "selected" : ""; ?>>Female</option>
										</select>
									</div>
								</div>

								<div class="col-md-10"><hr></div>

								<div class="form-group">
									<div class="col-md-10">
										<label>Delivery Address</label>
										<textarea name="address" class="form-control"></textarea>
									</div>
								</div>


								<div class="form-group">
									<div class="col-md-10">
										<label>Billing Address</label>
										<textarea name="address" class="form-control"></textarea>
									</div>
								</div>


								<div class="col-md-10"><hr></div>

								<div class="form-group">
									<div class="col-md-4">
										<label>Email</label>
										<input type="text" name="email" class="form-control" value="<?php echo $_SESSION['UserEmail']; ?>">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-4">
										<label>Password</label>
										<input type="password" name="password" class="form-control" value="<?php echo $_SESSION['UserPassword']; ?>">
									</div>
								</div>

								<div class="col-md-10"><hr></div>


								<div class="form-group">
									<div class="col-md-8 col-md-offset-10">
										<input type="submit" value="Update" name="updateprofile" class="btn default">
										<button class="btn default"><a href="ow_page_home.php">Cancel</a></button>	
									</div>
								</div>
							</form>	
						</div>
						<!--form body -->
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('ow_page_footer.php'); ?>
</body>
</html>
