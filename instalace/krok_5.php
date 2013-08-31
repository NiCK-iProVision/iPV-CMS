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
• <?php echo $jazyk['web_399']; ?><br /><br />
• <?php echo $jazyk['web_400']; ?><br /><br />
• <?php echo $jazyk['web_401']; ?><br /><br />
<span class='aktivni'>• <?php echo $jazyk['web_402']; ?></span>
</td><td width='800' valign='top'>
<table width='800' class='tabulka'><tr><td>
<?php
include '../mysql.php';
$mysql_pripojeni=mysql_connect(DB_HOST,DB_UZIV,DB_HESLO);
mysql_select_db(DB_DATABAZE, $mysql_pripojeni);
if (!empty($_POST["nazev"]) and !empty($_POST["popis"]) and !empty($_POST["autor"]) and !empty($_POST["keywords"]) and !empty($_POST["mail"])) {
$datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$name=$_SERVER['SERVER_NAME'];
$url="http://$name/";
mysql_query("INSERT INTO `hlavni` (`nazev`, `popis`, `url`, `logo`, `klic_slova`, `autor`, `vzhled`, `mail`, `jazyk`) values ('".$_POST["nazev"]."', '".$_POST["popis"]."', '$url', '".$url."admin/logo.png', '".$_POST["keywords"]."', '".$_POST["autor"]."', 'ipv', '".$_POST["mail"]."', '".$_SESSION["jazyk"]."')",$mysql_pripojeni);
mysql_query("INSERT INTO `novinky` (`nazev`, `popis`, `text`, `cas`, `pridal`) values ('iProVision CMS', '<p align=center>".$jazyk["web_474"]."<br /><br />".$jazyk["web_475"]."</p>', '<p align=center>".$jazyk["web_474"]."<br /><br />".$jazyk["web_475"]."</p>', '".$datum."', 'iProVision CMS')",$mysql_pripojeni);
mysql_query("INSERT INTO `leve_p` (`nazev`, `text`, `poradi`, `aktiv`) values ('Shoutbox','MOD_shoutbox','1','1')",$mysql_pripojeni);
mysql_query("INSERT INTO `leve_p` (`nazev`, `text`, `poradi`, `aktiv`) values ('Navigace','MOD_ipv_navigace','0','1')",$mysql_pripojeni);
mysql_query("INSERT INTO `prave_p` (`nazev`, `text`, `poradi`, `aktiv`) values ('Login','MOD_login','0','1')",$mysql_pripojeni);
mysql_query("INSERT INTO `prave_p` (`nazev`, `text`, `poradi`, `aktiv`) values ('Statistiky','MOD_statistiky','1','1')",$mysql_pripojeni);
mysql_query("INSERT INTO `strankovanie` (`stranky_meno`, `stranky_hodnota`) values ('novinky','5')",$mysql_pripojeni);
mysql_query("INSERT INTO `strankovanie` (`stranky_meno`, `stranky_hodnota`) values ('clanky','5')",$mysql_pripojeni);
mysql_query("INSERT INTO `strankovanie` (`stranky_meno`, `stranky_hodnota`) values ('stahovanie','5')",$mysql_pripojeni);
mysql_query("INSERT INTO `strankovanie` (`stranky_meno`, `stranky_hodnota`) values ('stranky','5')",$mysql_pripojeni);
mysql_query("INSERT INTO `odkazy` (`nazev`, `odk`) values ('Domů','$url')",$mysql_pripojeni);
mysql_query("INSERT INTO `odkazy` (`nazev`, `odk`) values ('Galerie','$url/galerie/kategorie.php')",$mysql_pripojeni);
mysql_query("INSERT INTO `odkazy` (`nazev`, `odk`) values ('Články','$url/clanky/kategorie.php')",$mysql_pripojeni);
mysql_query("INSERT INTO `odkazy` (`nazev`, `odk`) values ('Stahování','$url/stahovani/kategorie.php')",$mysql_pripojeni);
mysql_query("INSERT INTO `odkazy` (`nazev`, `odk`) values ('Stránky','$url/stranky/stranky.php')",$mysql_pripojeni);
session_destroy();
?>
<p align='center'><strong><?php echo $jazyk['web_438']; ?>
<p align='center'><input type="button" value="<?php echo $jazyk['web_439']; ?>" class="tlacitko" onclick="location.href='<?php echo $url; ?>'"></p> 
<?php
}
else {
echo "<p align='center'>".$jazyk['web_440']."</p>";
echo "<p align='center'><a href='krok_4.php'><span style='color: black;'>".$jazyk['web_429']."</span></a></p>";
}
?>
</td></tr></table>
</body>
</html>