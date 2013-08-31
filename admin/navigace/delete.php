<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_313'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM odkazy where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
mysql_query("DELETE FROM odkazy WHERE id='$id'") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_314']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_315']."</span></a></p>";
}
include '../zapati.php';
?>
