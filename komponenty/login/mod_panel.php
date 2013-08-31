<?php
if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
include_once(dirname(__FILE__).'/login-form.php');
} 
else {
include_once(dirname(__FILE__).'/member-index.php');
 }
?>