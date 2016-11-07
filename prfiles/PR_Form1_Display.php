<?php
	
	require '../php/startsess.php';
	require '../php/connectdb.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Purchase Request</title>
<style type="text/css">

#inputfield {
font-size:12px;
font-family:'Consolas';
position: static; 
size: 10px;
border: 1px solid #000;}

#input[type="text"]{
height:20px; 
vertical-align:top;}

.field_wrapper div{
margin-bottom:120%;
}

.add_button{
margin-top:10px;
margin-left:10px;
vertical-align: text-bottom;}

.remove_button{ 
margin-top:10px; 
margin-left:10px;
vertical-align: text-bottom;}

#inputsfont{
font-size:14px;
font-family:'Consolas';
font-weight: bold;
}

</style>
<!-- start: CSS -->
    <link rel="stylesheet" href="../css/generate.css">
    <link id="bootstrap-style" href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="../css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="../css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
	
	<style type="text/css"> a {text-decoration:none;} </style>

    <!-- start: JavaScript-->

        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/jquery-migrate-1.0.0.min.js"></script>
    
        <script src="../js/jquery-ui-1.10.0.custom.min.js"></script>
    
        <script src="../js/jquery.ui.touch-punch.js"></script>
    
        <script src="../js/modernizr.js"></script>
    
        <script src="../js/bootstrap.min.js"></script>
    
        <script src="../js/jquery.cookie.js"></script>
    
        <script src='../js/fullcalendar.min.js'></script>
    
        <script src='../js/jquery.dataTables.min.js'></script>

        <script src="../js/excanvas.js"></script>
        <script src="../js/jquery.flot.js"></script>
        <script src="../js/jquery.flot.pie.js"></script>
        <script src="../js/jquery.flot.stack.js"></script>
        <script src="../js/jquery.flot.resize.min.js"></script>
    
        <script src="../js/jquery.chosen.min.js"></script>
    
        <script src="../js/jquery.uniform.min.js"></script>
        
        <script src="../js/jquery.cleditor.min.js"></script>
    
        <script src="../js/jquery.noty.js"></script>
    
        <script src="../js/jquery.elfinder.min.js"></script>
    
        <script src="../js/jquery.raty.min.js"></script>
    
        <script src="../js/jquery.iphone.toggle.js"></script>
    
        <script src="../js/jquery.uploadify-3.1.min.js"></script>
    
        <script src="../js/jquery.gritter.min.js"></script>
    
        <script src="../js/jquery.imagesloaded.js"></script>
    
        <script src="../js/jquery.masonry.min.js"></script>
    
        <script src="../js/jquery.knob.modified.js"></script>
    
        <script src="../js/jquery.sparkline.min.js"></script>
    
        <script src="../js/counter.js"></script>
    
        <script src="../js/retina.js"></script>

        <script src="../js/custom.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
        $('#carousel').cycle({ 
            fx:     'scrollHorz', 
            timeout: 0, 
            easing: 'easeInOutBack',
            next:   '#next', 
            prev:   '#prev'
        });
        </script>
		
		<script type="text/javascript">
		$(document).ready(function(){
			var maxField = 10; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="../js/remove-icon.png"/></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function(){ //Once add button is clicked
				if(x < maxField){ //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});
		</script>

    <!-- end: JavaScript-->
</head>

<body>
<!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid"">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>iBugs</span></a>
                                
                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                               
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span> 
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                               
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>   
                                
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                yesterday
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                Jul 25, 2012
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>   
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> Katrina Anne S. Panerio
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->
                
            </div>
        </div>
    </div>
    <!-- start: Header -->

    <div class="container-fluid-full">

        <div class="row-fluid">
                
            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="HomePage.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home</span></a></li>   
                        <li><a href="generatePR.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Generate</span></a></li>
                        <li><a href="HomePage.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Track</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->
        </div><!--end:row-fluid-->
		
<!-- ---- E D I T A B L E  P A R T ------- -->		

<!--START:CONTENT-->
<div id="content" class="span10">
	<div style="width: 900px; height: 1200px; position: static;">
	<img src="../img/f1.png" vspace="1%" hspace="12%"/></div>

	<!-- name -->			
	<div id="inputsfont" style="position:absolute; left: 280px; top: 318px;">
		<?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];
			
			$result = pg_query($dbconn, "select pr_name from purchase where pr_number1 = $pr1 and pr_number2 = $pr2;");
			if(!$result) {
				$errormessage = pg_last_error();
				echo "Error with query: ". $errormessage;
				exit();
			}else {
				$chkarr = pg_fetch_array($result);
				echo $chkarr[0];
			}
		?>
	</div>
	
	<!-- cluster -->
	<div id="inputsfont" style="position:absolute; left: 695px; top: 318px;">
		<?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];
			
			$result = pg_query($dbconn, " select office_name from office where office_num = (select pr_cluster from purchase where pr_number1 = $pr1 and pr_number2 = $pr2);");
			if(!$result) {
				$errormessage = pg_last_error();
				echo "Error with query: ". $errormessage;
				exit();
			}else {
				$chkarr = pg_fetch_array($result);
				echo $chkarr[0];
			}
		?>
	</div>
	
	<!-- office -->
	<div id="inputsfont" style="position:absolute; left: 190px; top: 390px;">
		<?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];
			
			$result = pg_query($dbconn, " select office_name from office where office_num = (select pr_office from purchase where pr_number1 = $pr1 and pr_number2 = $pr2);");
			if(!$result) {
				$errormessage = pg_last_error();
				echo "Error with query: ". $errormessage;
				exit();
			}else {
				$chkarr = pg_fetch_array($result);
				echo $chkarr[0];
			}
		?>
	</div>
	
	<!-- prnumber -->
	<div style="position:absolute; left: 530px; top: 355px; font-size:14px; font-family:'Consolas'; font-weight: bold;">
		<?php
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];			
			echo $pr1.$pr2;
		?>
	</div>

	<!-- date -->
	<div style="position:absolute; left: 839px; top: 378px; font-size:14px; font-family:'Consolas'; font-weight: bold;">
		<?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];
			
			$result = pg_query($dbconn, " select pr_date from purchase where pr_number1 = $pr1 and pr_number2 = $pr2;");
			if(!$result) {
				$errormessage = pg_last_error();
				echo "Error with query: ". $errormessage;
				exit();
			}else {
				$chkarr = pg_fetch_array($result);
				echo $chkarr[0];
			}
		?>
	</div>
	
	<!-- rscode -->
	<div id="inputsfont" style="position:absolute; left: 650px; top: 390px;"> 
		<?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];
			
			$result = pg_query($dbconn, "select re_title from rescenter where re_code = (select pr_rcencode from purchase where pr_number1 = $pr1 and pr_number2 = $pr2);");
			if(!$result) {
				$errormessage = pg_last_error();
				echo "Error with query: ". $errormessage;
				exit();
			}else {
				$chkarr = pg_fetch_array($result);
				echo $chkarr[0];
			}
		?>
	</div>
	
	
	<!-- ITEMS PART -->
	
	<!-- Stock -->
	<div style="position:absolute; left: 210px; top: 470px; width:82px;">
	   <?php
            foreach ($_SESSION['stock'] as $value) {
                echo $value . '<br><br>';
            }
        ?>
    </div>
	
	<!-- Unit of Issue -->
	<div style="position:absolute; left: 310px; top: 470px; width:63px;">
	   <?php
            foreach ($_SESSION['unit'] as $value) {
                echo $value . '<br><br>';
            }
        ?>
    </div>
	
	<!-- Item Description -->
	<div style="position:absolute; left: 370px; top: 470px; width:318px;">
	   <?php
            foreach ($_SESSION['desc'] as $value) {
                echo $value . '<br><br>';
            }
        ?>
    </div>
	
	<!-- Quantity -->
	<div style="position:absolute; left: 725px; top: 470px; width:60px;">
	   <?php
            foreach ($_SESSION['qty'] as $value) {
                echo $value . '<br><br>';
            }
        ?>
    </div>
	
	<!-- Estimated Unit Cost -->
	<div style="position:absolute; left: 805px; top: 470px; width:82.8px;">
	   <?php
            foreach ($_SESSION['ucost'] as $value) {
                echo $value . '<br><br>';
            }
        ?>
    </div>
	
	<!-- Estimated Total Cost -->
	<div style="position:absolute; left: 915px; top: 470px; width:83px;">
	   <?php
            foreach ($_SESSION['tcost'] as $value) {
                echo $value . '<br><br>';
            }
        ?>
    </div>
	
	<!-- End of Items part -->
	
	<!-- Purpose -->
	<div id="inputsfont" style="position:absolute; left: 250px; top: 834px;">
		<?php 
			$pr1 = $_SESSION['pr1'];
			$pr2 = $_SESSION['pr2'];
			
			$result = pg_query($dbconn, "select pr_purpose from purchase where pr_number1 = $pr1 and pr_number2 = $pr2;");
			if(!$result) {
				$errormessage = pg_last_error();
				echo "Error with query: ". $errormessage;
				exit();
			}else {
				$chkarr = pg_fetch_array($result);
				echo $chkarr[0];
			}
		?></div>
	
	<!-- nameofofficer -->
	<div id="inputsfont" style="position:absolute; left: 350px; top: 950px;">
		Katrina Anne Panerio
	</div>
	
	<form action="../php/purchasereq.php" method="POST">
		<!-- Edit button -->
		<div style="position:absolute; left: 520px; top: 1220px;">
		<input name="edit" type="submit" id="button" value="EDIT" /></input></div>
		
		<!-- Next button -->
		<div style="position:absolute; left: 560px; top: 1220px;">
		<input name="next" type="submit" id="button" value="NEXT" /></input></div>
	</form> 

</div><!--end:CONTENT-->


<!-- ---- E N D  E D I T A B L E  P A R T ------- -->	

 <!--MODAL THING-->
        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        
        <div class="clearfix"></div>  
    </div><!--end:fuid-container-->       

  <footer>
        <p>
            <span style="text-align:left;float:left;">&copy; 2016 iBugs Purchase Request Tracker</span>
        </p>

    </footer>

</body>
</html>

