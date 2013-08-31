<?php
ob_start();
session_start();
include_once(dirname(__FILE__).'/../vision.php');
include 'fckeditor/fckeditor.php';
function panel($nz) {
echo "<p align='center'><strong>$nz</strong></p>";
}
$myvalue="";
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>\n";
echo "<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='cs' lang='cs'>\n";
echo "<head>\n";
echo "<title>".$vypsat['nazev']."</title>\n";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />\n";
echo "<meta name='description' content='".$vypsat['popis']."' />\n";
echo "<meta name='keywords' content='".$vypsat['klic_slova']."' />\n";
echo "<meta name='author' content='".$vypsat['autor']."' />\n";
echo "<meta name='robots' content='index,follow' />\n";
echo "<link rel='stylesheet' href='".$url."admin/css.css' type='text/css' media='screen' />\n";
echo "<link rel='shortcut icon' href='".$url."obrazky/ikona.ico' type='image/x-icon' />\n";
echo "</head>\n";
echo "<body>\n";
$logo_adm=$vypsat['logo'];
}
if ($_SESSION['SESS_ADMIN']<1) {
?>
<p align='center'><?php echo $jazyk['admin_002']; ?>
<meta http-equiv="refresh" content="3;url=<?php echo $url; ?>">
</p>
</body>
</html>
<?php
exit();
}
?>
<table width='100%' height='80' class='c'>
<tr>
<td>
<table width='1000' align='center' class='e'>
<tr>
<td>
<a href='#'><img src='<?php echo $logo_adm; ?>' border='0' height='40' /></a>
</td>
<td align='right'>
<span class='fs15'><?php echo $jazyk['admin_003']; ?></span><br /><br /><?php echo $jazyk['admin_004']; ?> <strong><?php echo $_SESSION['SESS_LOGIN']; ?></strong><br /><?php echo $jazyk['admin_005']; ?> <strong><?php echo $_SESSION['SESS_ADMIN']; ?></strong> 
</td>
</tr>
</table>
</td>
</tr>
</table>
<table width='1000' align='center' class='pdt'>
<tr>
<td valign='top'>
<table width='250' class='lp' align='center'>
<tr>
<td valign='top'>
<p align='center'><span class='tdec'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class='bold'><?php echo $jazyk['admin_006']; ?></span><span class='tdec'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<a href='<?php echo $url; ?>admin/novinky/' class='mlink'><?php echo $jazyk['admin_007']; ?></a>
<a href='<?php echo $url; ?>admin/clanky/' class='mlink'><?php echo $jazyk['admin_008']; ?></a>
<a href='<?php echo $url; ?>admin/stahovani/' class='mlink'><?php echo $jazyk['admin_009']; ?></a>
<a href='<?php echo $url; ?>admin/sb/' class='mlink'><?php echo $jazyk['admin_010']; ?></a>
<a href='<?php echo $url; ?>admin/vl_stranky/' class='mlink'><?php echo $jazyk['admin_011']; ?></a>
<a href='<?php echo $url; ?>admin/galerie/' class='mlink'><?php echo $jazyk['admin_012']; ?></a>
<a href='<?php echo $url; ?>admin/navigace/' class='mlink'>٠ <?php echo $jazyk['web_489']; ?></a>
<?php
if ($_SESSION['SESS_ADMIN']>1) {
?>
<p align='center'><span class='tdec'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class='bold'><?php echo $jazyk['admin_018']; ?></span><span class='tdec'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<a href='<?php echo $url; ?>admin/hl_nast/' class='mlink'><?php echo $jazyk['admin_013']; ?></a>
<a href='<?php echo $url; ?>admin/strankovanie/' class='mlink'>٠ <?php echo $jazyk['web_473']; ?></a>
<a href='<?php echo $url; ?>admin/vzhledy/' class='mlink'><?php echo $jazyk['admin_014']; ?></a>
<a href='<?php echo $url; ?>admin/panely/' class='mlink'><?php echo $jazyk['admin_015']; ?></a>
<a href='<?php echo $url; ?>admin/uzivatele/' class='mlink'><?php echo $jazyk['admin_016']; ?></a>
<a href='<?php echo $url; ?>admin/blok_prist/' class='mlink'><?php echo $jazyk['admin_017']; ?></a>
<a href='<?php echo $url; ?>admin/jazyk/' class='mlink'><?php echo $jazyk['admin_291']; ?></a>
<p align='center'><span class='tdec'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class='bold'><?php echo $jazyk['admin_019']; ?></span><span class='tdec'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<?php
$vyber=mysql_query("select * from modifikace");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
?>
<a href='#' class='mlink'><?php echo $jazyk['admin_020']; ?></a>
<?php
}
$dotaz=mysql_query("SELECT * FROM modifikace");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<a href='".$url."admin/".$vypsat['url']."/' class='mlink'>٠ ".$vypsat['nazev']."</a>";
}
 } ?>
</td>
</tr>
</table>
</td>
<td width='750' valign='top'>
<table width='730' class='pro' align='center'>
<tr>
<td valign='top'>
<table width='715' class='pro2' align='center'>
<tr>
<td valign='top'>