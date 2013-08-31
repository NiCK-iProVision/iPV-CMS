<?php
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8"); 
$dotaz2=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{
include(dirname(__FILE__).'/../../jazyk/'.$vypsat2["jazyk"].'/index.php');
$url=$vypsat2['url'];
}
op ("".$_SESSION['SESS_JMENO']."");
$dotaz3=mysql_query("SELECT * FROM members where member_id='".$_SESSION['SESS_ID']."'");
while ($vypsat3=mysql_fetch_assoc($dotaz3))
{$avt=$vypsat3['avatar'];}
if(empty($avt)) {
echo "<p align='center'><img height='100' width='100' border='0' src='".$url."/obrazky/bez_avataru.png' alt='Avatar' /></p>";
}
else {
echo "<p align='center'><img height='100' width='100' border='0' src='$avt' alt='Avatar' /></p>";
}
if ($_SESSION['SESS_ADMIN']>0) {
echo "<br />".$jazyk['admin_005']." ".$_SESSION['SESS_ADMIN']."<br />";
}
echo ''.$jazyk['web_481'].' '.$_SESSION["SESS_ID"].'<br />'.$jazyk['web_482'].' '.$_SERVER["REMOTE_ADDR"].'<br /><br />';
if ($_SESSION['SESS_ADMIN']>0) {
echo '<a href="'.$url.'admin/">'.$jazyk['web_485'].'</a><br />';
}
echo '<a href="'.$url.'komponenty/login/upravit.php">'.$jazyk['web_483'].'</a><br /><a href="'.$url.'komponenty/login/logout.php">'.$jazyk['web_484'].'</a>';
zp(); 
?>
