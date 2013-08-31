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
include_once(dirname(__FILE__)."/../".$vypsat['vzhled']."/vzhled.php");
}
headofpage();
?>