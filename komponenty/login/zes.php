<?php	
include_once(dirname(__FILE__).'/../../vzhledy/sablony/headofpage.php');
if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
  ocp(''.$jazyk['web_328'].'');
 echo "<p align='center'>Nie ste prihlásený/a!</p>";
 zcp();
}
else {
  ocp(''.$jazyk['web_328'].'');
  echo "<table align='center' width='100%'><tr><td width='33%' class='uprav_prof'><a href='".$url."komponenty/login/zh.php'>".$jazyk['web_317']."</a></td><td width='33%' align='center' class='uprav_prof'><a href='".$url."komponenty/login/ze.php'>".$jazyk['web_318']."</a></td><td width='33%' align='right' class='uprav_prof'><a href='".$url."komponenty/login/pridat_avt.php'>".$jazyk['web_319']."</a></td></tr></table>";

	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
  $p1 = clean($_POST['pass']);
  $p2 = clean($_POST['pass2']);
  
  if (ereg("^.+@.+\\..+$", $p1)) {
  
  if ((!empty($p1)) && (!empty($p2))) {
	if( strcmp($p1, $p2) != 0 ) {
  echo "".$jazyk['web_329']."";
  }
  else {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `members` SET `mail` = '".$_POST['pass']."' WHERE member_id = '".$_SESSION['SESS_ID']."'") or die(mysql_error());
echo "<p align='center'><bold>".$jazyk['web_330']." $p1</bold></p>";
}}
if (empty($p1)) {
echo "".$jazyk['web_331']."<br />";
}
if (empty($p2)) {
echo "".$jazyk['web_332']."";
}
}
else {
echo "<p align='center'><bold>".$jazyk['web_333']."</p>";
}
zcp();
}
include_once(dirname(__FILE__).'/../../vzhledy/sablony/footerofpage.php');
?>