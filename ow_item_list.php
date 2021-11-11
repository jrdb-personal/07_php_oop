<!DOCTYPE html>
<html>
<head>
	<title>My Online Store</title>
	<link rel="stylesheet" type="text/css" href=css/bootstrap.css>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>

<?php include "ow_actionload_item.php" ?>
<body>
<div class="container">
<h1><label>My Online Store</label></h1>
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

					<div class="col-md-12">
						<h3><label>Item List</label></h3>
					</div>
					<div class="col-md-12">	
						<table class="table table-bordered">
							<colgroup>
								<col style="width: 10%;"/>
								<col style="width: 25%;"/>
								<col style="width: 5%;"/>
								<col style="width: 15%;"/>
								<col style="width: 15%;"/>
								<col style="width: 15%;"/>
								<col style="width: 15%;"/>
							</colgroup>
							<thead>
								<tr class="tablesorter-headerRow">
									<td>Name</td>
									<td>Description</td>
									<td>Price</td>
									<td>Image</td>
									<td colspan="2" align="center">ACTION</td>
								</tr>
							<thead>
							<tbody>
							<?php 								
								if(count($result)>0)
								{
									foreach ($result as $item) {
							?>
									<tr>
									<td><?php echo $item["ItemName"]; ?></td>
									<td><?php echo $item["ItemDescription"]; ?></td>
									<td><?php echo $item["ItemPrice"]; ?></td>
									<td><img src="<?php echo $item['ItemImage'];?>" width='100' height='100' ></td>
									<td><a href="ow_item_edit.php?edt_id=<?php echo $item["ItemID"]; ?>">EDIT</a></td>
									<td><a href="ow_item_delete.php?del_id=<?php echo $item["ItemID"]; ?>">DELETE</a></td>
									</tr>
							<?php
									}
								}
								else
								{
							?>
									<tr><td colspan="5">No Records Found</td></tr><?php
								}
							?>
								<tr>
									<td colspan="7">
										<button class="btn"><a href="ow_item_add.php">ADD NEW</a></button>
										<button class="btn"><a href="ow_page_home.php">BACK</a></button>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr><td colspan="7">
									Total Records: <?php echo count($result); ?>
								</td></tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</html>