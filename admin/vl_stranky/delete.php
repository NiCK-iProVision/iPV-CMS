<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_127'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM stranky where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
mysql_query("DELETE FROM stranky WHERE id='$id'") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_128']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_129']."</span></a></p>";
}
include '../zapati.php';
?>
