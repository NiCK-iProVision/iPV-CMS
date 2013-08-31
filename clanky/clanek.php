<?php
include '../vzhledy/sablony/headofpage.php';
$a = $_GET['id'];
if (!is_numeric($a)) {
ocp('SQL Injection!');
echo "<p align='center'>".$jazyk['web_390']."</p>";
zcp();
}
else {
$PZS = 10; 
$str = 1;  
if(isset($_GET["str"]) && $_GET["str"] > 0) {$str = $_GET["str"];} 
$start = ($str - 1) * $PZS;
$query = "SELECT * FROM clanky where id='$a' ORDER BY id DESC ";
$pocetVysledku = mysql_num_rows(mysql_query($query)); 
$query .= " LIMIT $PZS OFFSET $start";
$mysql = mysql_query($query);
while ($vypsat=mysql_fetch_assoc($mysql))
{
ocp("".$vypsat['nazev']."");
echo nl2br("".$vypsat['clanek']."");
echo "<table width='100%'><tr>
<td align='left' width='100'>".$jazyk['web_451'].": ".$vypsat['pridal']."</td>
<td width='200' align='center'>".$jazyk['web_452'].": ".$vypsat['cas']."</td>
<td width='170' align='right'>";
$id_nov=$vypsat['id'];
$ip=$_SERVER['REMOTE_ADDR'];
?>

<script>
$(document).ready(function(){
  $("#like<?php echo $id_nov; ?>").click(function(){
    $("#sql<?php echo $id_nov; ?>").load("<?php echo $url; ?>komponenty/jquery/clan_like.php?id=<?php echo $vypsat["id"]; ?>&ip=<?php echo $ip; ?>");
  });
});

$(document).ready(function(){
  $("#dislike<?php echo $id_nov; ?>").click(function(){
    $("#sql<?php echo $id_nov; ?>").load("<?php echo $url; ?>komponenty/jquery/clan_dislike.php?id=<?php echo $vypsat["id"]; ?>&ip=<?php echo $ip; ?>");
  });
});
</script>
<?php
$dotaz2=mysql_query("SELECT * FROM clan_like where id_clan='$id_nov' AND ip='$ip'");
$pocet = mysql_num_rows($dotaz2);
$dotaz3=mysql_query("SELECT * FROM clan_like where id_clan='$id_nov'");
$pocet2 = mysql_num_rows($dotaz3);
if ($pocet>0) {
?>
<table><tr><td>
<div onclick="document.getElementById('dislike<?php echo $id_nov; ?>').style.display = 'none';document.getElementById('like<?php echo $id_nov; ?>').style.display = 'block';" id="dislike<?php echo $id_nov; ?>"><img border='0' src='<?php echo $url; ?>obrazky/like_out.png' alt='like' /><span style='position: relative; top: -9px;'>&nbsp;<?php echo $jazyk['web_478']; ?></span></div>
<div onclick="document.getElementById('like<?php echo $id_nov; ?>').style.display = 'none';document.getElementById('dislike<?php echo $id_nov; ?>').style.display = 'block';" class="dnone" id="like<?php echo $id_nov; ?>"  style="position: relative; top: -9px;"><img border='0' src='<?php echo $url; ?>obrazky/like.png' alt='like' /><span>&nbsp;<?php echo $jazyk['web_477']; ?></span></div>
<?php
echo "</td><td valign='top'>[<span id='sql$id_nov'>$pocet2</span>]</td></tr></table>";
}
else {
?>
<table><tr><td>
<div onclick="document.getElementById('dislike<?php echo $id_nov; ?>').style.display = 'none';document.getElementById('like<?php echo $id_nov; ?>').style.display = 'block';" class="dnone" id="dislike<?php echo $id_nov; ?>"><img border='0' src='<?php echo $url; ?>obrazky/like_out.png' alt='like' /><span style='position: relative; top: -9px;'>&nbsp;<?php echo $jazyk['web_478']; ?></span></div>
<div onclick="document.getElementById('like<?php echo $id_nov; ?>').style.display = 'none';document.getElementById('dislike<?php echo $id_nov; ?>').style.display = 'block';" id="like<?php echo $id_nov; ?>"  style="position: relative; top: -9px;"><img border='0' src='<?php echo $url; ?>obrazky/like.png' alt='like' /><span>&nbsp;<?php echo $jazyk['web_477']; ?></span></div>
<?php
echo "</td><td valign='top'>[<span id='sql$id_nov'>$pocet2</span>]</td></tr></table>";
}

echo "</td></td></tr></table>";
zcp();
}

if ($pocetVysledku>$PZS)  {
$pocetStran = (($pocetVysledku % $PZS)> 0) ? (int)($pocetVysledku / $PZS) + 1 : $pocetVysledku / $PZS;    
echo     "<br class='clear'>";
echo     "<p align='center'><bold><span class='pageofpage'>".$jazyk['web_296']." $str z $pocetStran</span><br /><br /></bold></p>";
echo "<div align='center' id='tnt_pagination' >";
if (!isset($_GET["str"]) or ($_GET["str"])==1 or ($_GET["str"])==2)    {echo "<span class='disabled_tnt_pagination'>«&nbsp;".$jazyk['web_297']." | </span>";} else {echo "<a href='?str=1&kat=$a'>«&nbsp;".$jazyk['web_297']." | </a>";      }
if (!isset($_GET["str"]) or ($_GET["str"])==1)    {echo "<span class='disabled_tnt_pagination'>".$jazyk['web_298']."</span>&nbsp;&nbsp;&nbsp;";} else {echo "<a href='?str=".($str> 1 ? $str - 1 : "1")."&kat=$a'>".$jazyk['web_298']."</a>&nbsp;&nbsp;&nbsp;";      } 
for ($i = 1; $i <= $pocetStran; $i++) {
    if ($i != $str) {
        echo "<a href='?str=".$i."&kat=$a'>&nbsp;&nbsp;".$i."&nbsp;&nbsp;</a>";
    } else {
        echo "<span class='active_page'>&nbsp;&nbsp;<bold>".$i."</bold>&nbsp;&nbsp;</span>";
    }
 }
if (($_GET["str"])==$pocetStran or $pocetStran==1)    {echo "&nbsp;&nbsp;&nbsp;<span class='disabled_tnt_pagination'>".$jazyk['web_299']." | </span>";} else {echo "&nbsp;&nbsp;&nbsp;<a href='?str=".(($str <$pocetStran) ? $str + 1 : $pocetStran) ."&kat=$a'>".$jazyk['web_299']." | </a>"; 
}$predposledni = $pocetStran-1;
if (($_GET["str"])==$predposledni or ($_GET["str"])==$pocetStran or $pocetStran==1)    {echo "<span class='disabled_tnt_pagination'>".$jazyk['web_300']."&nbsp;»</span>";} else {echo "<a href='?str=$pocetStran&kat=$a'>".$jazyk['web_300']."&nbsp;»</a>";      }
echo "</div>";
}                                                                                                                                                                                              
else {}
}
include '../vzhledy/sablony/footerofpage.php';
?>