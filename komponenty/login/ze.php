<?php	
include_once(dirname(__FILE__).'/../../vzhledy/sablony/headofpage.php');
if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
  ocp(''.$jazyk['web_328'].'');
 echo "<p align='center'>Nie ste prihlásený/a!</p>";
 zcp();
}
else {
ocp(''.$jazyk['web_328'].'');
  echo "<table align='center' width='100%'><tr><td width='33%' class='uprav_prof'><a href='".$url."komponenty/login/zh.php'>".$jazyk['web_317']."</a></td><td width='33%' align='center' class='uprav_prof'><a href='".$url."komponenty/login/ze.php'>".$jazyk['web_318']."</a></td><td width='33%' align='right' class='uprav_prof'><a href='".$url."komponenty/login/pridat_avt.php'>".$jazyk['web_319']."</a></td></tr></table>";
?>
<form method="POST" action="zes.php">
<table><tr>
<td><?php echo $jazyk['web_334']; ?>:</td>
<td><input class="log_textbox" type="text" name="pass" size="20" class="textbox"></td>
</tr>
<tr>
<td><?php echo $jazyk['web_335']; ?>:</td>
<td><input class="log_textbox" type="text" name="pass2" size="20" class="textbox"></td>
<td><input type="submit" value="<?php echo $jazyk['web_327']; ?>" class="log_tlacitko"></td></tr></table>
</form>
<?php
zcp();
 }
include_once(dirname(__FILE__).'/../../vzhledy/sablony/footerofpage.php');
?>