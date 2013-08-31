<?php
include '../vzhledy/sablony/headofpage.php';
ocp(''.$jazyk['admin_094'].'');
echo "<p align='center'>".$jazyk['web_447'].":<br></p>";
$vyber55=mysql_query("select * from katclan");
$pocet55 = mysql_num_rows($vyber55);
if ($pocet55=='0') {
echo "<p align='center'><br><bold><span style='color: red;'>".$jazyk['web_448']."</span></bold></p>";
}
$dotaz=mysql_query("select * from katclan order by id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<table align='center' class='gal_kat'><tr><td style='font-size: 10px;'><p align='center'><a href='clanky.php?str=1&kat=".$vypsat['id']."'>".$vypsat['nazev']."</a></p></td></tr></table><br />";
}
zcp();
include '../vzhledy/sablony/footerofpage.php';
?>