<?php 

	echo '
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="home.php">Home</a></li>';

		if(!empty(isset($_SESSION['user']))) {
			echo	'<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Purchase Request <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="track_tbl.php">View Status</a></li>
							<li class="active"><a href="sidebar-right.php">Create New PR</a></li>
							<li class="active"><a href="sidebar-right.php">Search PR</a></li>
						</ul>
					</li>';
		}

		echo '
					<li><a href="contact.php">Contact</a></li>';

		if(!isset($_SESSION['user']) || empty($_SESSION['user'])) {
			echo	'<li><a class="btn" href="signin.html">SIGN IN </a></li>';
		}else {
			echo 	'<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $_SESSION['username'] . '<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="sidebar-right.php">Account Settings</a></li>
							<li class="active"><a href="sidebar-right.php">Logout</a></li>
						</ul>
					</li>';
		}
		
		echo	'</ul>
			</div>';

?>