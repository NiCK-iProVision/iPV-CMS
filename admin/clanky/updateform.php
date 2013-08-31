<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_085'].'');

$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM clanky WHERE id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="updatescript.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["id"].'"></input>';
?>
<?php echo $jazyk['admin_060']; ?><br /><input class="textbox" type="text" value="<?php echo $vypsat["nazev"]; ?>" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_061']; ?><br />
<?php
$FCKeditor = new FCKeditor('popis');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $vypsat["popis"];
$FCKeditor->Create();
?><br /><br />
<?php echo $jazyk['admin_062']; ?><br />
<?php
$FCKeditor = new FCKeditor('clanek');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $vypsat["clanek"];
$FCKeditor->Create();
?><br /><br />
<?php echo $jazyk['admin_086']; ?>
<select class="select" name="kat" size="1">';
<?php
$dotaz=mysql_query("select * from katclan");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<option value='".$vypsat['id']."'>".$vypsat['nazev']."</option>";
}
?>
</select>
<br /><br />
<input type="submit" value="<?php echo $jazyk['admin_077']; ?>" class="button">
</form>
<?php
}
include '../zapati.php';
?>

