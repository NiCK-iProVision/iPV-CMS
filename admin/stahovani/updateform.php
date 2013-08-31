<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_257'].'');

$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM stahovani WHERE id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="updatescript.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["id"].'"></input>';
?>
<?php echo $jazyk['admin_231']; ?>:<br /><input class="textbox" type="text" value="<?php echo $vypsat["nazev"]; ?>" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_232']; ?>:<br />
<?php
$FCKeditor = new FCKeditor('popis');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $vypsat["popis"];
$FCKeditor->Create();
?><br /><br />
<?php echo $jazyk['admin_233']; ?>:<br /><input class="textbox" value="<?php echo $vypsat["url"]; ?>" type="text" name="adresa" size="20"><br /><br />
<?php echo $jazyk['admin_234']; ?>:<br /><input value="<?php echo $vypsat["verze"]; ?>" class="textbox" type="text" name="verze" size="20"><br /><br />
<?php echo $jazyk['admin_086']; ?>
<select class="select" name="kat" size="1">';
<?php
$dotaz=mysql_query("select * from katstah");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<option value='".$vypsat['id']."'>".$vypsat['nazev']."</option>";
}
?>
</select>
<br /><br />
<input type="submit" value="<?php echo $jazyk['admin_055']; ?>" class="button">
</form>
<?php
}
include '../zapati.php';
?>

