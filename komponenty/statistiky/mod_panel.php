<?php
$dotaz2=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{
include(dirname(__FILE__).'/../../jazyk/'.$vypsat2["jazyk"].'/index.php');
}
op(''.$jazyk['web_491'].'');
  $onmemid1=0;
  $onmemid2=0;
    $cas5=time();
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_connection=utf8");
    mysql_query("SET character_set_results=utf8");
    $vyber55=mysql_query("select * from members");
    $pocet55 = mysql_num_rows($vyber55);
echo "".$jazyk['web_492']." $pocet55<br />".$jazyk['web_493']."";
    $vyber=mysql_query("select * from members order by member_id desc limit 1");
    while ($vysledek=mysql_fetch_assoc($vyber))
    {
echo "&nbsp;<a href='".$url."profil.php?id=".$vysledek['member_id']."'>".$vysledek['login']."</a><br />";
    }
echo "".$jazyk['web_494']." <br />";
    $vyber=mysql_query("select * from members where (cas+1000>=$cas5) limit 10");
    while ($vysledek=mysql_fetch_assoc($vyber))
    {
echo "&nbsp;&nbsp;· <a href='".$url."profil.php?id=".$vysledek['member_id']."'>".$vysledek['login']."</a><br />";
    $onmemid=$vysledek['member_id'];
    }
    
    $vyber555=mysql_query("select * from members where (cas+1000>=$cas5)");
    $pocet555 = mysql_num_rows($vyber555);
    if ($pocet555<1) {
echo "".$jazyk['web_495']."<br />";
    }
    if ($pocet555>10) {
echo "".$jazyk['web_496']."<br />";
    }


echo "<br />".$jazyk['web_497']." <br />";
    $vyber=mysql_query("select * from members order by cas desc limit 5");
    while ($vysledek=mysql_fetch_assoc($vyber))
    {
    $onmemid1=$vysledek['member_id'];
    $vyber2=mysql_query("select * from members where  (cas+1000>=$cas5) and member_id=$onmemid1");
    while ($vysledek2=mysql_fetch_assoc($vyber2))
    {$onmemid2=$vysledek2['member_id'];}
    if ($onmemid1==$onmemid2) {
    $cas10=$cas5-$vysledek['cas']-400;
echo "&nbsp;&nbsp;· <a href='".$url."profil.php?id=".$vysledek['member_id']."'>".$vysledek['login']."</a> (";
if ($cas10<60) {
echo "Online";
} else {
echo $cas10." Sek.";
}
echo")<br />";
    }
    else {
    $cas10=$cas5-$vysledek['cas']-1000;
echo "&nbsp;&nbsp;· <a href='".$url."profil.php?id=".$vysledek['member_id']."'>".$vysledek['login']."</a> (".$cas10." Sek.)<br />";    
    }}
zp();
?>