<?php
include '../vzhledy/sablony/headofpage.php';
ocp(''.$jazyk['web_294'].'');
$vyber55=mysql_query("select * from stranky");
$pocet55 = mysql_num_rows($vyber55);
if ($pocet55=='0') {
echo "<p align='center'><br /><span style='color: red;'>".$jazyk['web_295']."</span></p>";
}
$PZS = $settings2['stranky']; 
$str = 1;  
if(isset($_GET["str"]) && $_GET["str"] > 0) {$str = $_GET["str"];} 
$start = ($str - 1) * $PZS;
$query = "SELECT * FROM stranky ORDER BY id DESC ";
$pocetVysledku = mysql_num_rows(mysql_query($query)); 
$query .= " LIMIT $PZS OFFSET $start";
$mysql = mysql_query($query);
while ($vypsat=mysql_fetch_assoc($mysql))
{
echo "<br /><table align='center' class='gal_clan'><tr><td><p align='center'><strong><a href='stranka.php?id=".$vypsat['id']."'>".$vypsat['nazev']."</a></strong></p></td></tr></table>";
}

if ($pocetVysledku>$PZS)  {
$pocetStran = (($pocetVysledku % $PZS)> 0) ? (int)($pocetVysledku / $PZS) + 1 : $pocetVysledku / $PZS;    
echo     "<br class='clear'>";
echo     "<p align='center'><bold><span class='pageofpage'>".$jazyk['web_296']." $str z $pocetStran</span><br /><br /></bold></p>";
echo "<div align='center' id='tnt_pagination' >";
if (!isset($_GET["str"]) or ($_GET["str"])==1 or ($_GET["str"])==2)    {echo "<span class='disabled_tnt_pagination'>«&nbsp;".$jazyk['web_297']." | </span>";} else {echo "<a href='?str=1&'>«&nbsp;".$jazyk['web_297']." | </a>";      }
if (!isset($_GET["str"]) or ($_GET["str"])==1)    {echo "<span class='disabled_tnt_pagination'>".$jazyk['web_298']."</span>&nbsp;&nbsp;&nbsp;";} else {echo "<a href='?str=".($str> 1 ? $str - 1 : "1")."'>".$jazyk['web_298']."</a>&nbsp;&nbsp;&nbsp;";      } 
for ($i = 1; $i <= $pocetStran; $i++) {
    if ($i != $str) {
        echo "<a href='?str=".$i."'>&nbsp;&nbsp;".$i."&nbsp;&nbsp;</a>";
    } else {
        echo "<span class='active_page'>&nbsp;&nbsp;<bold>".$i."</bold>&nbsp;&nbsp;</span>";
    }
 }
if (($_GET["str"])==$pocetStran or $pocetStran==1)    {echo "&nbsp;&nbsp;&nbsp;<span class='disabled_tnt_pagination'>".$jazyk['web_299']." | </span>";} else {echo "&nbsp;&nbsp;&nbsp;<a href='?str=".(($str <$pocetStran) ? $str + 1 : $pocetStran) ."'>".$jazyk['web_299']." | </a>"; 
}$predposledni = $pocetStran-1;
if (($_GET["str"])==$predposledni or ($_GET["str"])==$pocetStran or $pocetStran==1)    {echo "<span class='disabled_tnt_pagination'>".$jazyk['web_300']."&nbsp;»</span>";} else {echo "<a href='?str=$pocetStran'>".$jazyk['web_300']."&nbsp;»</a>";      }
echo "</div>";
}                                                                                                                                                                                              
else {}


zcp();
include '../vzhledy/sablony/footerofpage.php';
?>