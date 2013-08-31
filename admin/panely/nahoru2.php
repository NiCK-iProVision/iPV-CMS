<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
$id=$_GET['id'];
panel(''.$jazyk['admin_267'].'');
$dotaz=mysql_query("SELECT * FROM prave_p where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
$stare_poradi=$vypsat['poradi'];
$nove_poradi=$vypsat['poradi']+1;
$nove_poradi2=$vypsat['poradi'];
$nazev=$vypsat['nazev'];
}
$dotaz=mysql_query("SELECT * FROM prave_p where poradi='$nove_poradi'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$id2=$vypsat['id'];}
mysql_query("UPDATE prave_p SET poradi = $nove_poradi WHERE id = $id AND poradi = $stare_poradi");
mysql_query("UPDATE prave_p SET poradi = $nove_poradi2 WHERE id = $id2");
echo "<p align='center'>".$jazyk['admin_287']."</p>";
?>
<script>
window.location.href="index.php";
</script>
<?
include '../zapati.php';
?>
