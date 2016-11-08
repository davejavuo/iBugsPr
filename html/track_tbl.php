<?php
	require '../php/startsess.php';
	require '../php/connectdb.php';
	require '../php/tracker.php';
	$_SESSION['flag'] = True;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tracker</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<nav>
		  <div class="container"> 
		    
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header"> <!--start HEADER-->
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		      <a class="navbar-brand" href="#">iBugs</a> </div>
		    
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse">
		       <?php require 'menu.php'; ?>
		    </div>
		    <!-- /.navbar-collapse --> 
		  </div>
		  <!-- /.container-fluid --> 
		</nav> <!--end HEADER-->
		<div class="container">
		<hr>
		</div>
		<hr>
		<h2 class="text-center">Purchase Request Tracker</h2>
		<h3>PR No. 2016101</h3>
		<hr>
		<div class="container">
			<div class="table-responsive">
				<table class="table">
					<thead>
					<tr>
					<th style="text-align: center">Office Head</th>
					<th style="text-align: center">Budget Office</th>
					<th style="text-align: center">Asso. Dean for Admin</th>
					<th style="text-align: center">Accounting Office</th>
					<th style="text-align: center">Dean</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td class=<?php pr_color(1); ?> style="text-align: center"> <?php pr_status(10, 1); ?> </td>
					<td class=<?php pr_color(2); ?> style="text-align: center"> <?php pr_status(11, 2); ?> </td>
					<td class=<?php pr_color(3); ?> style="text-align: center"> <?php pr_status(12, 3); ?> </td>
					<td class=<?php pr_color(4); ?> style="text-align: center"> <?php pr_status(13, 4); ?> </td>
					<td class=<?php pr_color(5); ?> style="text-align: center"> <?php pr_status(14, 5); ?> </td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
		<hr>
		<?php require 'footer.php' ?>
		<script src="js/jquery-1.11.2.min.js"></script> 
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>