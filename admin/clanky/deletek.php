<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_079'].'');
$id=$_GET['id'];
$dotaz=mysql_query("SELECT * FROM katclan where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
mysql_query("DELETE FROM katclan WHERE id='$id'") or die (mysql_error());
echo "<p align='center'>".$jazyk['admin_080']." <strong>".$vypsat['nazev']."</strong> ".$jazyk['admin_081']."</p>";
echo "<p align='center'><a href='kat_clan.php'>".$jazyk['admin_082']."</a></p>";
}
include '../zapati.php';
?>
