<?php 
      session_start();
      include '../jazyk/'.$_SESSION["jazyk"].'/index.php';    
?>  
 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='cs' lang='cs'>
<head>
<title>iPV CMS (Výchozí) WVS Beta v1.2</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='description' content='iPV CMS (Výchozí) WVS Beta v1.2' />
<meta name='keywords' content='cms, vision, iprovision, pro, i, system, rs' />
<meta name='author' content='iProVision.eu' />
<meta name='robots' content='index,follow' />
<link rel='stylesheet' href='styl.css' type='text/css' media='screen' />
<link rel='shortcut icon' href='ikona.ico' type='image/x-icon' /> 
</head>
<body>
<p align='center'><img border='0' src='logo.png' /></p>
<table width='1000' align='center'><tr><td valign='top' width='200' class='bold'>
<?php echo $jazyk['web_476']; ?>: <br /><br />
• <?php echo $jazyk['web_398']; ?><br /><br />
<span class='aktivni'>• <?php echo $jazyk['web_399']; ?></span><br /><br />
• <?php echo $jazyk['web_400']; ?><br /><br />
• <?php echo $jazyk['web_401']; ?><br /><br />
• <?php echo $jazyk['web_402']; ?>
</td><td width='800' valign='top'>
<table width='800' class='tabulka'><tr><td>
<?php
$dbhost = $_POST['dbhost'];
$dblog = $_POST['dblog'];
$dbpass = $_POST['dbpass'];
$dbname = $_POST['dbname'];
$db = mysql_connect("$dbhost","$dblog","$dbpass") or die ("".$jazyk['web_418'].""); 
mysql_select_db("$dbname", $db) or die ("".$jazyk['web_419'].""); 
include 'dotazy.php';
$soubor = fopen("../mysql.php", "w"); 
fwrite($soubor, '<?php 
if (!defined("DB_HOST")) {
define("DB_HOST", "'.$dbhost.'");
define("DB_UZIV", "'.$dblog.'");
define("DB_HESLO", "'.$dbpass.'");
define("DB_DATABAZE", "'.$dbname.'");
}
$pokracovat=1;
?>'); 
fclose($soubor);
?>
<p align='center'><?php echo $jazyk['web_420']; ?></p><br /><p align='center'><input type="button" value="<?php echo $jazyk['web_412']; ?>" class="tlacitko" onclick="location.href='krok_3.php'"></p> 
</td></tr></table>
</body>
</html>