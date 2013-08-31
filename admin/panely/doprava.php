<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
$id=$_GET['id'];
panel(''.$jazyk['admin_267'].'');
$dotaz=mysql_query("SELECT * FROM leve_p where id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
$obsah=$vypsat['text'];
$akt=$vypsat['aktiv'];
$nazev=$vypsat['nazev'];
$dotaz2=mysql_query("SELECT * FROM prave_p ORDER BY poradi desc limit 1");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{$por=$vypsat2['poradi']+1;}
mysql_query("INSERT INTO `prave_p` (`nazev`, `text`, `poradi`, `aktiv`) values ('$nazev', '$obsah', '$por', '$akt')");
$smazane_poradi=$vypsat['poradi'];
mysql_query("DELETE FROM leve_p WHERE id='$id'") or die (mysql_error());
mysql_query("UPDATE leve_p SET poradi = (poradi - 1) WHERE poradi > $smazane_poradi") or die (mysql_error());
}
echo "<p align='center'>".$jazyk['admin_270']."</p>";
?>
<script>
window.location.href="index.php";
</script>
<?
include '../zapati.php';
?>
