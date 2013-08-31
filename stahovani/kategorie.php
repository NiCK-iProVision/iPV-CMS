<?php
include '../vzhledy/sablony/headofpage.php';
ocp(''.$jazyk['web_457'].'');
echo "<p align='center'>".$jazyk['web_461'].":<br></p>";
$vyber55=mysql_query("select * from katstah");
$pocet55 = mysql_num_rows($vyber55);
if ($pocet55=='0') {
echo "<p align='center'><br><bold><span style='color: red;'>".$jazyk['web_462']."</span></bold></p>";
}
$dotaz=mysql_query("select * from katstah order by id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<table align='center' class='gal_kat'><tr><td style='font-size: 10px;'><p align='center'><a href='soubory.php?str=1&kat=".$vypsat['id']."'>".$vypsat['nazev']."</a></p></td></tr></table><br />";
}
zcp();
include '../vzhledy/sablony/footerofpage.php';
?>