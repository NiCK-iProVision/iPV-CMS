<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_200'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM members where member_id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
mysql_query("DELETE FROM members WHERE member_id='$id'") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_201']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_202']."</span></a></p>";
}
include '../zapati.php';
?>
