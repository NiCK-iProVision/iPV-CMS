<?php
$dotaz=mysql_query("SELECT * FROM prave_p where aktiv='1' ORDER BY poradi");

while ($vypsat=mysql_fetch_assoc($dotaz))
{
	
	
	if (($slozka = strstr($vypsat['text'], "MOD_")) !== FALSE && is_file(dirname(__FILE__).'/../../komponenty/'.substr($slozka, 4).'/mod_panel.php')){
		include(dirname(__FILE__).'/../../komponenty/'.substr($slozka, 4).'/mod_panel.php');
	}else{
    op("".$vypsat['nazev']."");
		echo $vypsat['text'];
    zp();
	}

}
?>