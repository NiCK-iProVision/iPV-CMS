<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_173'].'');

$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM galerie WHERE id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="updatescript.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["id"].'"></input>';

echo $jazyk['admin_174']; ?><br /><input class="textbox" type="text" value="<?php echo $vypsat["nazev"]; ?>" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_175']; ?><br />
<?php
$FCKeditor = new FCKeditor('popis');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $vypsat["popis"];
$FCKeditor->Create();
echo "<br /><br />".$jazyk['admin_176'].""; ?>:<br /><img src='<?php echo $vypsat["url"]; ?>' style='max-width: 650px;' alt='0' border='0' />
<br /><br />
<?php echo $jazyk['admin_143']; ?>
<select class="select" name="kat" size="1">';
<?php
$dotaz=mysql_query("select * from katgal");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<option value='".$vypsat['id']."'>".$vypsat['nazev']."</option>";
}


echo '</select>
<br /><br />
<input type="submit" value="'.$jazyk['admin_055'].'" class="button">
</form>';

}
include '../zapati.php';
?>

