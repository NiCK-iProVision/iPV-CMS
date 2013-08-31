<?php	
include_once(dirname(__FILE__).'/../../vzhledy/sablony/headofpage.php');
if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {

 

	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
  ocp(''.$jazyk['web_341'].'');
		echo '<p align="center"><span style="font-weight: bold;font-size: 12px;">'.$jazyk['web_342'].'</span><br /><br />';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo $msg.'<br />'; 
		}
		echo '<br />'.$jazyk['web_343'].'<p>';
		unset($_SESSION['ERRMSG_ARR']);
    zcp();
	}  
  ocp(''.$jazyk['web_338'].'');
?>
<script language="JavaScript" type="text/javascript">
function a()
{
if(document.loginform.password.value.length<6)
  {
  window.alert("<?php echo $jazyk['web_344']; ?>");
  return false;
  }
else
  {
  return true;
  }
}
</script>
<form id="loginForm" name="loginform" method="post" action="register-exec.php" onsubmit="return a();">
  <table width="300" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <th><?php echo $jazyk['web_345']; ?> </th>
      <td><input name="fname" maxlength="15" type="text" class="log_textbox" id="fname" /></td>
    </tr>
    <tr>
      <th><?php echo $jazyk['web_346']; ?> </th>
      <td><input name="lname" maxlength="15" type="text" class="log_textbox" id="lname" /></td>
    </tr>
    <tr>
      <th width="124"><?php echo $jazyk['web_347']; ?></th>
      <td width="168"><input name="login" maxlength="15" type="text" class="log_textbox" id="login" /></td>
    </tr>
    <tr>
      <th><?php echo $jazyk['web_348']; ?></th>
      <td><input name="password" maxlength="15" type="password" class="log_textbox" id="password" /></td>
    </tr>
    <tr>
      <th><?php echo $jazyk['web_349']; ?></th>
      <td><input name="cpassword" maxlength="15" type="password" class="log_textbox" id="cpassword" /></td>
    </tr>
    <tr>
      <th><?php echo $jazyk['web_350']; ?></th>
      <td><input name="mail" maxlength="50" type="text" class="log_textbox" id="mail" /></td>
    </tr>
    <tr>
      <th><?php echo $jazyk['web_486']; ?></th>
      <td><img src="kod.php?width=160&height=40&characters=7" /></td>
    </tr>  
    <tr>
      <th><?php echo $jazyk['web_487']; ?></th>
      <td><input id="security_code" name="security_code" class="log_textbox" type="text" /></td>
    </tr>  
        <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" class="log_tlacitko" value="<?php echo $jazyk['web_351']; ?>" /></td>
    </tr>
  </table>
</form>
<?php
zcp();
}
else {
  ocp(''.$jazyk['web_338'].'');
 echo "<p align='center'>".$jazyk['web_352']."</p>";

zcp();
 }
include_once(dirname(__FILE__).'/../../vzhledy/sablony/footerofpage.php');
?>