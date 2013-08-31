<?php
include '../vzhledy/sablony/headofpage.php';
$a = $_GET['id'];
if (!is_numeric($a)) {
ocp('SQL Injection!');
echo "<p align='center'>".$jazyk['web_390']."</p>";
zcp();
}
else {
$dotaz=mysql_query("SELECT * FROM stranky where id='$a'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
ocp(''.$vypsat["nazev"].'');
echo nl2br("".$vypsat['text']."");
zcp();
}
}
include '../vzhledy/sablony/footerofpage.php';
?>