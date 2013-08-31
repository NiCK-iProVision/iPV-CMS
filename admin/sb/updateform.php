<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_115'].'');

$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM shoutbox WHERE id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="updatescript.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["id"].'"></input>';
?>
<?php echo $jazyk['admin_119']; ?>:<br /><input disabled class="textbox" type="text" value="<?php echo $vypsat["nick"]; ?>" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_120']; ?>:<br />
<textarea id="textarea1" class="textbox2" name="text" style="width: 350px; height: 150px;"><?php echo $vypsat["text"]; ?></textarea><br /><br />
<input type="submit" value="<?php echo $jazyk['admin_055']; ?>" class="button">
</form>
<?php
}
include '../zapati.php';
?>

