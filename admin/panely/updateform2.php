<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_288'].'');

$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM prave_p WHERE id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="updatescript2.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["id"].'"></input>';
?>
<?php echo $jazyk['admin_283']; ?>:<br /><input value="<?php echo $vypsat["nazev"]; ?>" class="textbox" type="text" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_284']; ?>:<br />
<textarea class="textbox2" name="obsah" style="width: 500px; height: 150px;"><?php echo $vypsat["text"]; ?></textarea>
<br /><br />
<input type="submit" value="<?php echo $jazyk['admin_064']; ?>" class="button">
</form>
<?php
}
include '../zapati.php';
?>

