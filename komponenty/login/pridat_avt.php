<?php	
include_once(dirname(__FILE__).'/../../vzhledy/sablony/headofpage.php');
ocp('Pridať/Zmeniť avatar');
echo "<table align='center' width='100%'><tr><td width='33%' class='uprav_prof'><a href='".$url."komponenty/login/zh.php'>".$jazyk['web_317']."</a></td><td width='33%' align='center' class='uprav_prof'><a href='".$url."komponenty/login/ze.php'>".$jazyk['web_318']."</a></td><td width='33%' align='right' class='uprav_prof'><a href='".$url."komponenty/login/pridat_avt.php'>".$jazyk['web_319']."</a></td></tr></table>";

?>
<table align='center'><tr><td>
<form enctype="multipart/form-data" method="post" action="nahrat_avt.php">
<?php echo $jazyk['web_364']; ?>:
<input name="file1" class="tlacitko" type="file" /><br /><br />
<input onclick="document.getElementById('wait').style.display='block';" class="tlacitko" type="submit" value="<?php echo $jazyk['web_365']; ?>" /><br /><br /><div id='wait' style='display: none;'>
<img border='0' src='<? echo $url; ?>komponenty/login/nacitani.gif'></div>
</form></td></tr></table>
<?php
zcp();
include_once(dirname(__FILE__).'/../../vzhledy/sablony/footerofpage.php');
?>