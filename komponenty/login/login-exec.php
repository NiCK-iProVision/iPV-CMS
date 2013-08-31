<?php	
ob_start();
session_start();
require(dirname(__FILE__).'/../../vision.php');
include_once(dirname(__FILE__).'/../../strankovanie.php');
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>\n";
echo "<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='cs' lang='cs'>\n";
echo "<head>\n";
echo "<title>".$vypsat['nazev']."</title>\n";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />\n";
echo "<meta name='description' content='".$vypsat['popis']."' />\n";
echo "<meta name='keywords' content='".$vypsat['klic_slova']."' />\n";
echo "<meta name='author' content='".$vypsat['autor']."' />\n";
echo "<meta name='robots' content='index,follow' />\n";
echo "<link rel='stylesheet' href='".$url."vzhledy/".$vypsat['vzhled']."/styl.css' type='text/css' media='screen' />\n";
echo "<link rel='shortcut icon' href='".$url."obrazky/ikona.ico' type='image/x-icon' />\n";
echo "<link rel='stylesheet' href='".$url."komponenty/lightbox/css/lightbox.css' type='text/css' media='screen' />\n";
echo "<script src='".$url."komponenty/lightbox/js/jquery-1.7.2.min.js'></script>\n";
echo "<script src='".$url."komponenty/lightbox/js/lightbox.js'></script>\n";
echo "<script src='".$url."komponenty/jquery/jquery.min.js'></script>\n";
echo "</head>\n";
echo "<body>\n";
echo "<table width='1000' align='center' style='padding-top: 400px;'><tr><td class='log_tabulka'>";
}
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
		$login = clean($_POST['login']);
	$password = clean($_POST['password']);
	if($login == '') {
		$errmsg_arr[] = ''.$jazyk['web_379'].'';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = ''.$jazyk['web_380'].'';
		$errflag = true;
	}
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
			echo '<p align="center">'.$jazyk['login_3'].'<br />'.$jazyk['login_1'].'<a href="'.$url.'">'.$jazyk['login_2'].'</a>.<br /><br /><br />'.$jazyk['admin_021'].'</p>';    
			echo '<meta http-equiv="refresh" content="3;url='.$url.'">';
		exit();
	}
	
	$qry="SELECT * FROM members WHERE passwd='".md5($_POST['password'])."' AND login='".$login."'";
	$result=mysql_query($qry);
	
  if($result) {
		if(mysql_num_rows($result) == 1) {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);          
			$_SESSION['SESS_ID'] = $member['member_id'];
			$_SESSION['SESS_JMENO'] = $member['firstname'];
			$_SESSION['SESS_PRIJMENI'] = $member['lastname'];
			$_SESSION['SESS_LOGIN'] = $member['login'];
			$_SESSION['SESS_ADMIN'] = $member['admin'];
			$_SESSION['SESS_MAIL'] = $member['mail'];
			session_write_close();
			echo '<p align="center">'.$jazyk['web_381'].'<br />'.$jazyk['login_1'].'<a href="'.$url.'">'.$jazyk['login_2'].'</a>.<br /><br /><br />'.$jazyk['admin_021'].'</p>';
			echo '<meta http-equiv="refresh" content="3;url='.$url.'">';
		}else {
			echo '<p align="center">'.$jazyk['web_382'].'<br />'.$jazyk['login_1'].'<a href="'.$url.'">'.$jazyk['login_2'].'</a>.<br /><br /><br />'.$jazyk['admin_021'].'</p>';
			echo '<meta http-equiv="refresh" content="3;url='.$url.'">';
		}
	}else {
		die(''.$jazyk['web_383'].'<br /><br />'.$jazyk['login_1'].'<a href="'.$url.'">'.$jazyk['login_2'].'</a>.');
			echo '<meta http-equiv="refresh" content="3;url='.$url.'">';
	}
echo "</td></tr></table>";
echo "</body>\n";
echo "</html>\n";
ob_end_flush();
?>