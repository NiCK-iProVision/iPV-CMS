<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_107'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM shoutbox where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
mysql_query("DELETE FROM shoutbox WHERE id='$id'") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_108']." <strong>".$vypsat['nazev']."</strong> ".$jazyk['admin_109']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_110']."</span></a></p>";
}
include '../zapati.php';
?>
