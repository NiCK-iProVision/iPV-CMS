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
$cas2=Time()-1000;
$uziv_id2=$_SESSION['SESS_ID'];
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `members` SET `cas` = '$cas2' WHERE member_id = '$uziv_id2'") or die(mysql_error());
	unset($_SESSION['SESS_ID']);
	unset($_SESSION['SESS_JMENO']);
	unset($_SESSION['SESS_PRIJMENI']);
	unset($_SESSION['SESS_LOGIN']);
	unset($_SESSION['SESS_ADMIN']);
	unset($_SESSION['SESS_MAIL']);
	echo '<p align="center">'.$jazyk['web_378'].'<br />'.$jazyk['login_1'].'<a href="'.$url.'">'.$jazyk['login_2'].'</a>.<br /><br /><br />'.$jazyk['admin_021'].'</p>';
			echo '<meta http-equiv="refresh" content="3;url='.$url.'">';
echo "</td></tr></table>";
echo "</body>\n";
echo "</html>\n";
ob_end_flush();
?>