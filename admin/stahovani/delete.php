<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_244'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM stahovani where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
mysql_query("DELETE FROM stahovani WHERE id='$id'") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_245']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_246']."</span></a></p>";
}
include '../zapati.php';
?>
