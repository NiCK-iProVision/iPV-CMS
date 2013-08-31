<?php
$dotaz2=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{
include(dirname(__FILE__).'/../../jazyk/'.$vypsat2["jazyk"].'/index.php');
}
op(''.$jazyk['web_489'].'');
echo "<br />";
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
    $vyber=mysql_query("select * from odkazy order by id");
    while ($vysledek=mysql_fetch_assoc($vyber))
   {
    echo "&nbsp;&nbsp;· <a href='".$vysledek['odk']."'>".$vysledek['nazev']."</a><br /><br />";
    }
$vyber=mysql_query("select * from odkazy");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<p align='center'>".$jazyk['web_490']."</p>";
}
zp();
?>