<?php 

	$q = 'SELECT track_office, track_status FROM tracking WHERE track_prnum1 = ' . $_SESSION['pr1'] . ' AND track_prnum2 = ' . $_SESSION['pr2'];
	$r = pg_query($dbconn, $q);
	$_SESSION['curr_ofc'] = pg_fetch_result($r, 0, 0);
	$_SESSION['curr_stat'] = pg_fetch_result($r, 1, 0);

	function pr_status($x, $n) {
		$status = 'Pending';
		$ctr = 0;

		while ($x < 5) {
			if($n == $_SESSION['curr_ofc'] && $_SESSION['flag']) {
				$status = $_SESSION['curr_stat'];
				$_SESSION['flag'] = False;
				break;
			}else {
				if($_SESSION['flag']) {
					$status = 'Approved';
				}else {
					break;
				}
			}
			$x++;
		}

		echo $status;
	}

	function pr_color($n) {
		$color = 'active';
		

		echo $color;
	}

?>

<!--
.active		Applies the hover color to the table row or table cell
.success	Indicates a successful or positive action
.info		Indicates a neutral informative change or action
.warning	Indicates a warning that might need attention
.danger		Indicates a dangerous or potentially negative action 
-->