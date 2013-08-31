<?php
$obj_md =& new MDB2();
	if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
		header("location: logout.php");
		exit();
	}
?>