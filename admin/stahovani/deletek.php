<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_247'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM katstah where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
mysql_query("DELETE FROM katstah WHERE id='$id'") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_248']."</p>";
echo "<p align='center'><a href='kat_stah.php'><span style='color: black;'>".$jazyk['admin_249']."</span></a></p>";
}
include '../zapati.php';
?>
