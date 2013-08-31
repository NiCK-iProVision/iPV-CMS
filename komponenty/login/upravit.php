<?php	
include_once(dirname(__FILE__).'/../../vzhledy/sablony/headofpage.php'); 
ocp(''.$jazyk['web_336'].'');
echo "<table align='center' width='100%'><tr><td width='33%' class='uprav_prof'><a href='".$url."komponenty/login/zh.php'>".$jazyk['web_317']."</a></td><td width='33%' align='center' class='uprav_prof'><a href='".$url."komponenty/login/ze.php'>".$jazyk['web_318']."</a></td><td width='33%' align='right' class='uprav_prof'><a href='".$url."komponenty/login/pridat_avt.php'>".$jazyk['web_319']."</a></td></tr></table>";
echo "<p align='center'><strong><br />".$jazyk['web_337']."</strong></p>";
zcp();
include_once(dirname(__FILE__).'/../../vzhledy/sablony/footerofpage.php');
?>