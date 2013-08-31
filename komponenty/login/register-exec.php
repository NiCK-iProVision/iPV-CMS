<?php
include_once(dirname(__FILE__).'/../../vzhledy/sablony/headofpage.php');
ocp(''.$jazyk['web_338'].'');
	$errmsg_arr = array();
	$errflag = false;
	$link = mysql_connect(DB_HOST, DB_UZIV, DB_HESLO);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	$db = mysql_select_db(DB_DATABAZE);
	if(!$db) {
		die("Unable to select database");
	}
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$login = clean($_POST['login']);
	$mail = clean($_POST['mail']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
	if($fname == '') {
		$errmsg_arr[] = "".$jazyk['web_353']."";
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = "".$jazyk['web_354']."";
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = "".$jazyk['web_355']."";
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = "".$jazyk['web_356']."";
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = "".$jazyk['web_357']."";
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = "".$jazyk['web_358']."";
		$errflag = true;
	}
   if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) { unset($_SESSION['security_code']); } else {
		$errmsg_arr[] = "".$jazyk['web_488']."";
		$errflag = true;   
   }
 	if($mail == '') {
		$errmsg_arr[] = "".$jazyk['web_359']."";
		$errflag = true;
	} 
  if (ereg("^.+@.+\\..+$", $mail)) {} 
  else {
    $errmsg_arr[] = "".$jazyk['web_360']."";
		$errflag = true;
  }
	if($login != '') {
		$qry = "SELECT * FROM members WHERE login='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = "".$jazyk['web_361']."";
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("".$jazyk['web_362']."");
		}
	}
	if($mail != '') {
		$qry = "SELECT * FROM members WHERE mail='$mail'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = ''.$jazyk['web_363'].'';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("".$jazyk['web_362']."");
		}
	}
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: register-form.php");
		exit();
	}
    $cas2=Time()-1000;
$datum2=$datum=StrFTime("%H:%M %d.%m.%Y", Time());;
	$qry = "INSERT INTO members(firstname, lastname, login, passwd, admin, avatar, mail, ip, cas, datum) VALUES('$fname','$lname','$login','".md5($_POST['password'])."','0','','$mail','".$_SERVER['REMOTE_ADDR']."','".$cas2."','".$datum2."')";
	$result = @mysql_query($qry);
	if($result) {
			echo '<meta http-equiv="refresh" content="0;url='.$url.'komponenty/login/register-success.php">';
		exit();
	}else {
		die("".$jazyk['web_362']."");
	}
  include_once(dirname(__FILE__).'/../../vzhledy/sablony/footerofpage.php');
?>