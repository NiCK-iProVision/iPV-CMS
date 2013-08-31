<?php
include 'vzhledy/sablony/headofpage.php';
$ip=$_SERVER['REMOTE_ADDR'];
$vyber55=mysql_query("select * from novinky");
$pocet55 = mysql_num_rows($vyber55);
if ($pocet55=='0') {
ocp(''.$jazyk['web_385'].'');
echo "<p align='center'><span style='color: red;'>".$jazyk['web_384']."</span></p>";
zcp();
}
$dotaz=mysql_query("SELECT * FROM novinky ORDER BY id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{

$vyber55=mysql_query("select * from nov_kom where nov_id='".$vypsat['id']."'");
$pocet55 = mysql_num_rows($vyber55);
ocp($vypsat['nazev']);
echo nl2br("".$vypsat['popis']."");
echo "<table align='center' width='95%'><tr><td><a href='novinka.php?id=".$vypsat['id']."'>".$jazyk['web_386']."</a></td><td align='center'>".$jazyk['web_387'].": ".$vypsat['pridal']."</td><td align='center'>".$jazyk['web_388'].": $pocet55</td><td align='right' width='170'>";
$id_nov=$vypsat['id'];
?>
<script>
$(document).ready(function(){
  $("#like<?php echo $id_nov; ?>").click(function(){
    $("#sql<?php echo $id_nov; ?>").load("komponenty/jquery/novinky_like.php?id=<?php echo $vypsat["id"]; ?>&ip=<?php echo $ip; ?>");
  });
});

$(document).ready(function(){
  $("#dislike<?php echo $id_nov; ?>").click(function(){
    $("#sql<?php echo $id_nov; ?>").load("komponenty/jquery/novinky_dislike.php?id=<?php echo $vypsat["id"]; ?>&ip=<?php echo $ip; ?>");
  });
});
</script>
<?php
$dotaz2=mysql_query("SELECT * FROM nov_like where id_nov='$id_nov' AND ip='$ip'");
$pocet = mysql_num_rows($dotaz2);
$dotaz3=mysql_query("SELECT * FROM nov_like where id_nov='$id_nov'");
$pocet2 = mysql_num_rows($dotaz3);
if ($pocet>0) {
?>
<table><tr><td>
<div onclick="document.getElementById('dislike<?php echo $id_nov; ?>').style.display = 'none';document.getElementById('like<?php echo $id_nov; ?>').style.display = 'block';" id="dislike<?php echo $id_nov; ?>"><img border='0' src='obrazky/like_out.png' alt='like' /><span style='position: relative; top: -9px;'>&nbsp;<?php echo $jazyk['web_478']; ?></span></div>
<div onclick="document.getElementById('like<?php echo $id_nov; ?>').style.display = 'none';document.getElementById('dislike<?php echo $id_nov; ?>').style.display = 'block';" class="dnone" id="like<?php echo $id_nov; ?>"  style="position: relative; top: -9px;"><img border='0' src='obrazky/like.png' alt='like' /><span>&nbsp;<?php echo $jazyk['web_477']; ?></span></div>
<?php
echo "</td><td valign='top'>[<span id='sql$id_nov'>$pocet2</span>]</td></tr></table>";
}
else {
?>
<table><tr><td>
<div onclick="document.getElementById('dislike<?php echo $id_nov; ?>').style.display = 'none';document.getElementById('like<?php echo $id_nov; ?>').style.display = 'block';" class="dnone" id="dislike<?php echo $id_nov; ?>"><img border='0' src='obrazky/like_out.png' alt='like' /><span style='position: relative; top: -9px;'>&nbsp;<?php echo $jazyk['web_478']; ?></span></div>
<div onclick="document.getElementById('like<?php echo $id_nov; ?>').style.display = 'none';document.getElementById('dislike<?php echo $id_nov; ?>').style.display = 'block';" id="like<?php echo $id_nov; ?>"  style="position: relative; top: -9px;"><img border='0' src='obrazky/like.png' alt='like' /><span>&nbsp;<?php echo $jazyk['web_477']; ?></span></div>
<?php
echo "</td><td valign='top'>[<span id='sql$id_nov'>$pocet2</span>]</td></tr></table>";
}
echo "</td></tr></table>";
zcp();
}
include 'vzhledy/sablony/footerofpage.php';
?>