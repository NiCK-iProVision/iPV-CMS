<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_210'].'');
echo "<p align='center'>".$jazyk['admin_211']."</p>";
$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM members WHERE member_id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="updatescript.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["member_id"].'"></input>';
?>
<?php echo $jazyk['admin_212']; ?><br /><input class="textbox" type="text" value="<?php echo $vypsat["firstname"]; ?>" name="jmeno" size="20"><br /><br />
<?php echo $jazyk['admin_213']; ?><br /><input class="textbox" type="text" value="<?php echo $vypsat["lastname"]; ?>" name="prijmeni" size="20"><br /><br />
<?php echo $jazyk['admin_214']; ?><br /><input class="textbox" type="text" value="<?php echo $vypsat["login"]; ?>" name="prezdivka" size="20"><br /><br />
<?php echo $jazyk['admin_215']; ?><br />
<select class="select" name="kat" size="1">';
<option value='0'><?php echo $jazyk['admin_216']; ?></option>
<option value='1'><?php echo $jazyk['admin_217']; ?></option>
<option value='2'><?php echo $jazyk['admin_218']; ?></option>
</select> <?php echo $jazyk['admin_219']; ?>
<br /><br />
<?php echo $jazyk['admin_220']; ?><br /><input class="textbox" type="text" value="<?php echo $vypsat["avatar"]; ?>" name="avatar" size="20"><br /><br />
<?php echo $jazyk['admin_221']; ?><br /><input class="textbox" type="text" value="<?php echo $vypsat["mail"]; ?>" name="mail" size="20"><br /><br />

<input type="submit" value="<?php echo $jazyk['admin_077']; ?>" class="button">
</form>
<?php
}
include '../zapati.php';
?>

