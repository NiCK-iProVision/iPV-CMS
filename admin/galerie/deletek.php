<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_159'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM katgal where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
mysql_query("DELETE FROM katgal WHERE id='$id'") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_160']."</p>";
echo "<p align='center'><a href='kat_gal.php'><span style='color: black;'>".$jazyk['admin_161']."</span></a></p>";
}
include '../zapati.php';
?>
