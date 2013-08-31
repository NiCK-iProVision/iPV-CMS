<?php
include ('mysql.php');
//DB
if (!isset($pokracovat)) {
header('Location: instalace/krok_1.php');
}
$mysql_pripojeni=mysql_connect(DB_HOST,DB_UZIV,DB_HESLO);
mysql_select_db(DB_DATABAZE, $mysql_pripojeni);
//Nastav URL
$dotaz=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
$url=$vypsat['url'];
include('jazyk/'.$vypsat["jazyk"].'/index.php');
}
//Zablokovaný IP
$dotaz2=mysql_query("SELECT * FROM blokovani");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{
$ip11=$vypsat2['ip'];
$ip22=$_SERVER['REMOTE_ADDR'];
if ($ip11==$ip22) {
header('Location: http://www.google.com/');
}}
//Sys. čas,datum
$cas=StrFTime("%H:%M", Time());
$datum=StrFTime("%d.%m.%Y", Time());
//Ne/Přihlášen
if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
$prihlasen='0';
} 
else {
$prihlasen='1';
$cas2=Time()-400;
$datum2=$datum=StrFTime("%H:%M %d.%m.%Y", Time());;
$uziv_id2=$_SESSION['SESS_ID'];
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `members` SET `cas` = '$cas2' WHERE member_id = '$uziv_id2'") or die(mysql_error());
mysql_query("UPDATE `members` SET `datum` = '$datum2' WHERE member_id = '$uziv_id2'") or die(mysql_error());
$idm=$_SESSION['SESS_ID']; 
$vyber=mysql_query("select * from members where member_id='$idm'");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
	unset($_SESSION['SESS_ID']);
	unset($_SESSION['SESS_JMENO']);
	unset($_SESSION['SESS_PRIJMENI']);
	unset($_SESSION['SESS_LOGIN']);
	unset($_SESSION['SESS_ADMIN']);
	unset($_SESSION['SESS_MAIL']);
}
 }
?>
