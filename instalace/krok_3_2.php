<?php 
      session_start();
      include '../jazyk/'.$_SESSION["jazyk"].'/index.php';    
?> 
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='cs' lang='cs'>
<head>
<title>iPV CMS (Výchozí) WVS Beta v1.2</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='description' content='iPV CMS (Výchozí) WVS Beta v1.2' />
<meta name='keywords' content='cms, vision, iprovision, pro, i, system, rs' />
<meta name='author' content='iProVision.eu' />
<meta name='robots' content='index,follow' />
<link rel='stylesheet' href='styl.css' type='text/css' media='screen' />
<link rel='shortcut icon' href='ikona.ico' type='image/x-icon' /> 
</head>
<body>
<p align='center'><img border='0' src='logo.png' /></p>
<table width='1000' align='center'><tr><td valign='top' width='200' class='bold'>
<?php echo $jazyk['web_476']; ?>: <br /><br />
• <?php echo $jazyk['web_398']; ?><br /><br />
• <?php echo $jazyk['web_399']; ?><br /><br />
<span class='aktivni'>• <?php echo $jazyk['web_400']; ?></span><br /><br />
• <?php echo $jazyk['web_401']; ?><br /><br />
• <?php echo $jazyk['web_402']; ?>
</td><td width='800' valign='top'>
<table width='800' class='tabulka'><tr><td>
<?php
include '../mysql.php';
$mysql_pripojeni=mysql_connect(DB_HOST,DB_UZIV,DB_HESLO);
mysql_select_db(DB_DATABAZE, $mysql_pripojeni);
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 $fname = clean($_POST['jmeno']);
	$lname = clean($_POST['prijmeni']);
	$login = clean($_POST['nick']);
	$mail = clean($_POST['mail']);
	$password = clean($_POST['p1']);
	$cpassword = clean($_POST['p2']);
  
  	if($fname == '') {
		$errmsg_arr[] = ''.$jazyk['web_421'].'';
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = ''.$jazyk['web_422'].'';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = ''.$jazyk['web_423'].'';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = ''.$jazyk['web_424'].'';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = ''.$jazyk['web_425'].'';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = ''.$jazyk['web_426'].'';
		$errflag = true;
	}
 	if($mail == '') {
		$errmsg_arr[] = ''.$jazyk['web_427'].'';
		$errflag = true;
	} 
  if (ereg("^.+@.+\\..+$", $mail)) {} 
  else {
    $errmsg_arr[] = ''.$jazyk['web_428'].'';
		$errflag = true;
  }
  if($errflag) {
  		foreach($errmsg_arr as $errmsg_arr2) {
		}
  echo "<p align='center'>$errmsg_arr2 </br><a href='krok_3.php'>".$jazyk['web_429']."</a></p>";
  }
  else {
  $cas2=Time()-1000;
$datum2=$datum=StrFTime("%H:%M %d.%m.%Y", Time());;
 mysql_query("INSERT INTO `members` (`firstname`, `lastname`, `login`, `passwd`, `admin`, `avatar`, `mail`, `ip`, `cas`, `datum`) values ('$fname','$lname','$login','".md5($_POST['p1'])."','3','','$mail','".$_SERVER['REMOTE_ADDR']."','".$cas2."','".$datum2."')", $mysql_pripojeni);

  ?>
  <p align='center'><?php echo $jazyk['web_430']; ?></p><br /><p align='center'><input type="button" value="<?php echo $jazyk['web_412']; ?>" class="tlacitko" onclick="location.href='krok_4.php'"></p> 
  <?php
  }
?>
</td></tr></table>
</body>
</html>