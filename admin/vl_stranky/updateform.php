<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_135'].'');

$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM stranky WHERE id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="updatescript.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["id"].'"></input>';
?>
<?php echo $jazyk['admin_122']; ?>:<br /><input class="textbox" type="text" value="<?php echo $vypsat["nazev"]; ?>" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_123']; ?>:<br />
<?php
$FCKeditor = new FCKeditor('novinka');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $vypsat["text"];
$FCKeditor->Create();
?><br /><br />
<input type="submit" value="<?php echo $jazyk['admin_055']; ?>" class="button">
</form>
<?php
}
include '../zapati.php';
?>

