<?php
include '../vzhledy/sablony/headofpage.php';
ocp(''.$jazyk['web_453'].'');
echo "<p align='center'>".$jazyk['web_455'].":<br></p>";
$vyber55=mysql_query("select * from katgal");
$pocet55 = mysql_num_rows($vyber55);
if ($pocet55=='0') {
echo "<p align='center'><br><bold><span style='color: red;'>".$jazyk['web_456']."</span></bold></p>";
}
$dotaz=mysql_query("SELECT * FROM katgal order by id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<table align='center' class='gal_kat'><tr><td style='font-size: 10px;'><p align='center'><a href='galerie.php?str=1&kat=".$vypsat['id']."'>".$vypsat['nazev']."</a><br /><br /><a href='galerie.php?str=1&kat=".$vypsat['id']."'><img src='".$vypsat['adresa']."' style='max-width:400px; max-height:400px;' border='0'></a></p></td></tr></table><br />";
}
zcp();
include '../vzhledy/sablony/footerofpage.php';
?>