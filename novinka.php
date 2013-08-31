<?php
include 'vzhledy/sablony/headofpage.php';
$a = $_GET['id'];
$ip=$_SERVER['REMOTE_ADDR'];
if (isset($_POST['ano2'])) {
$plus = $_POST['ano2'];
}
if (isset($_POST['text2'])) {
$pluss=mysql_real_escape_string($_POST["text2"]);
}
if (isset($_POST['ano3'])) {
$plus2 = $_POST['ano3'];
}
if (isset($_POST['kom_id2'])) {
$plus3 = $_POST['kom_id2'];
}
if (isset($plus2)) {
if ($plus2=='1') {
if ((!empty($plus2)) && (!empty($plus3))) {
mysql_query("DELETE FROM nov_kom WHERE id='$plus3'") or die (mysql_error());
}}}
if (isset($_SESSION['SESS_ID'])) {
$name=$_SESSION['SESS_ID'];
}
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
if (isset($plus)) {
if ($plus=='1') {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$datum = StrFTime("%d.%m.%Y", Time());
if ((!empty($plus)) && (!empty($pluss))) {
if (time()-30<=$_SESSION["cas"]){
echo('<script>alert("'.$jazyk['web_389'].'");</script>');
}
else {
mysql_query("INSERT INTO `nov_kom` (`nov_id`, `clen_id`, `cas`, `kom`) values ('$a', '$name','$datum','$pluss')");
$_SESSION["cas"] = time();
}
}}}
if (!is_numeric($a)) { 
ocp('SQL Injection!');
echo "<p align='center'>".$jazyk['web_390']."</p>";
zcp();
}
else {
$dotaz=mysql_query("SELECT * FROM novinky where id='$a'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
ocp($vypsat['nazev']);
$vyber55=mysql_query("select * from nov_kom where nov_id='$a'");
$pocet55 = mysql_num_rows($vyber55);
$shledn1 =  ''.$vypsat["shlednuto"].'';
$shledn = $shledn1 + 1;
mysql_query("UPDATE `novinky` SET `shlednuto` = '$shledn' WHERE id = '$a'") or die(mysql_error());
echo nl2br("".$vypsat['text']."");
echo "<table align='center' width='95%'><tr><td align='left'>".$jazyk['web_387'].": ".$vypsat['pridal']."</td><td align='center'>".$jazyk['web_388'].": $pocet55</td><td align='right' width='170'>";
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
ocp('Komentáře');
if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
echo "<p align='center'>".$jazyk['web_463']."</p>";
}
else {
if (!empty($plus)) {
if (empty($pluss))  {
echo "<p align='center'>".$jazyk['web_391']."</p>";
}}
echo '<div align="center"><form method="POST" action="#"><p align="center">'.$jazyk['web_392'].':</p><textarea class="textbox2" name="text2" style="width: 300px; height: 100px;"></textarea><p><input type="text" value="1" name="ano2" style="display: none;" size="20"></p><p><input type="submit" value="'.$jazyk['web_304'].'" class="tlacitko"></form></p></div>';
}
if ($pocet55=='0') {
echo "<p align='center'><br /><span style='color: red;'>".$jazyk['web_393']."</span></p>";
}
$dotaz2=mysql_query("SELECT * FROM nov_kom where nov_id='$a' order by id desc");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{
$clen_id=$vypsat2['clen_id'];
$dotaz3=mysql_query("SELECT * FROM members where member_id='$clen_id'");
while ($vypsat3=mysql_fetch_assoc($dotaz3))
{
$clen_jm=$vypsat3['login'];
$clen_avt=$vypsat3['avatar'];
if (empty($clen_avt)) {
$clen_avt=$url.'obrazky/bez_avataru.png';
}}
echo "<br /><table width='97%' align='center' class='kom'><tr><td width='55' class='kom_border' valign='top'>";
echo "<p align='center'><a href='profil.php?id=$clen_id'><strong>".$clen_jm."</strong></a></p>";
echo "<img src='".$clen_avt."' border='0' width='50' height='50' alt='Avatar' />";
if ($vypsat2['clen_id']==$_SESSION['SESS_ID'] or $_SESSION['SESS_ADMIN']>0) {
echo '<form method="POST" action="#"><input type="text" value="1" name="ano3" style="display: none;" size="20">
<input type="text" value="'.$vypsat2["id"].'" name="kom_id2" style="display: none;" size="20">';
echo '<p align="center"><input value="'.$jazyk['web_394'].'" type="submit" style="background: transparent;text-decoration: underline;cursor: pointer;border:0px;"></p></form>';
}
    $vypsat2["kom"] = stripslashes($vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':D', '&nbsp;<img src="'.$url.'obrazky/smajlici/grin.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':)', '&nbsp;<img src="'.$url.'obrazky/smajlici/smile.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':(', '&nbsp;<img src="'.$url.'obrazky/smajlici/sad.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(';)', '&nbsp;<img src="'.$url.'obrazky/smajlici/wink.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':O', '&nbsp;<img src="'.$url.'obrazky/smajlici/shock.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace('8)', '&nbsp;<img src="'.$url.'obrazky/smajlici/cool.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':*', '&nbsp;<img src="'.$url.'obrazky/smajlici/pusa.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':srdce:', '&nbsp;<img src="'.$url.'obrazky/smajlici/3.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':@', '&nbsp;<img src="'.$url.'obrazky/smajlici/angry.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace('(y)', '&nbsp;<img src="'.$url.'obrazky/smajlici/like.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':P', '&nbsp;<img src="'.$url.'obrazky/smajlici/pfft.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':|', '&nbsp;<img src="'.$url.'obrazky/smajlici/frown.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':d', '&nbsp;<img src="'.$url.'obrazky/smajlici/grin.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':o', '&nbsp;<img src="'.$url.'obrazky/smajlici/shock.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace(':p', '&nbsp;<img src="'.$url.'obrazky/smajlici/pfft.png" border="0" alt="smajlik" />&nbsp;', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace('&lt;br /&gt;', '<br />', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace('[URL]', '<a href="', $vypsat2["kom"]);
    $vypsat2["kom"] = str_replace('[/URL]', '" target="_blank"><strong>'.$jazyk['admin_113'].'</strong></a>', $vypsat2["kom"]);
echo "</td><td valign='top'><p>".$vypsat2['kom']."</p></td></tr></table>";
}
zcp(); 
}
}
include 'vzhledy/sablony/footerofpage.php';
?>