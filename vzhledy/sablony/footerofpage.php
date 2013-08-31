<?php
$dotaz=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
include_once(dirname(__FILE__)."/../".$vypsat['vzhled']."/vzhled.php");
}
$dotaz=mysql_query("SELECT * FROM prostr_p where aktiv='1' ORDER BY poradi desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
ocp("".$vypsat['nazev']."");
echo "".$vypsat['text']."";
zcp();
}
footerofpage();
echo "</body>\n";
echo "</html>\n";
ob_end_flush();
?>
