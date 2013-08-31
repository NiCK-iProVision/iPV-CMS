<?php 
$dotaz2=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{
$url=$vypsat2['url'];
include(dirname(__FILE__).'/../../jazyk/'.$vypsat2["jazyk"].'/index.php');
}
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
  op('Chyba');
		echo '<p align="center"><span style="font-weight: bold;font-size: 10px;">Formulář nebyl vyplněn!</span><br />';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		}
		echo '<br />Zkuste to znovu<p>';
		unset($_SESSION['ERRMSG_ARR']);
    zp();
	}  
op ("".$jazyk['web_480']."");
?>
<form id="loginForm" name="loginForm" method="post" action="<?php echo $url; ?>komponenty/login/login-exec.php">
  <table width="220" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><strong><?php echo $jazyk['web_347']; ?></strong></td>
      <td width="188"><input name="login" type="text" class="log_textbox" id="login" placeholder="&nbsp;<?php echo $jazyk['web_347']; ?>" /></td>
    </tr>
    <tr>
      <td><strong><?php echo $jazyk['web_348']; ?></strong></td>
      <td><input name="password" type="password" class="log_textbox" id="password" placeholder="&nbsp;<?php echo $jazyk['web_348']; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" class="log_tlacitko" name="Submit" value="<?php echo $jazyk['web_480']; ?>" />&nbsp;<input type="button" class="log_tlacitko" onclick="window.location.href='<?php echo $url; ?>komponenty/login/register-form.php'" value="<?php echo $jazyk['web_338']; ?>" /></td>
    </tr>
  </table>
  </form>
<?php
zp();
?>
