<?php
include 'vzhledy/sablony/headofpage.php';
$id = $_GET['id'];
if (!is_numeric($id)) {
ocp('SQL Injection!');
echo "<p align='center'>".$jazyk['web_390']."</p>";
zcp();
} 
else {
$vyber=mysql_query("SELECT * FROM members where member_id='$id'");
$pocet = mysql_num_rows($vyber);
if ($pocet>0) {
$dotaz3=mysql_query("SELECT * FROM members where member_id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz3))
{
ocp("".$vypsat['login']." - ".$jazyk['admin_075']." ".$vypsat['member_id']."");
echo "<table><tr><td width='100'>";
$avt=$vypsat['avatar'];
if(empty($avt)) {
echo "<img border='0' width='100' height='100' src='".$url."/obrazky/bez_avataru.png' />";
}
else {
echo "<img border='0' width='100' height='100' src='".$vypsat['avatar']."' />";
}
echo "</td><td valign='top'>";
echo "".$jazyk['web_345'].": ".$vypsat['firstname']." <br />".$jazyk['web_346'].": ".$vypsat['lastname']." <br />".$jazyk['web_347'].": ".$vypsat['login']." <br />".$jazyk['web_350'].": ".$vypsat['mail']."";
if($vypsat['admin']>0) {
echo "<br />".$jazyk['web_371'].": ".$vypsat['admin']."";
}
if($_SESSION['SESS_ADMIN']>1) {
echo "<br />".$jazyk['web_395']."".$vypsat['ip']."";
}
echo "</td></tr></table>";
zcp();
}}
else {
ocp(''.$jazyk['web_396'].'');
echo "<p align='center'>".$jazyk['web_397']."</p>";
zcp();
}}
include 'vzhledy/sablony/footerofpage.php';
?>
