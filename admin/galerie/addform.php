<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_139'].'');
$vyber=mysql_query("select * from katgal");
$pocet = mysql_num_rows($vyber);
if ($pocet>0) {
?>
<form method="POST" action="addscript.php" name="newad" enctype="multipart/form-data">
<?php echo $jazyk['admin_140']; ?>:<br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_141']; ?>:<br />
<?php
$FCKeditor = new FCKeditor('popis');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $myvalue;
$FCKeditor->Create();
?><br /><br />
<?php echo $jazyk['admin_142']; ?><br />
<input type="file" name="file1">
<br /><br />
<?php echo $jazyk['admin_143']; ?>:
<select class="select" name="kat" size="1">';
<?php
$dotaz=mysql_query("select * from katgal");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<option value='".$vypsat['id']."'>".$vypsat['nazev']."</option>";
}
?>
</select>
<br /><br />
<input type="submit" value="<?php echo $jazyk['admin_064']; ?>" class="button">
</form>

<?php
}
else {
echo "<p align='center'>".$jazyk['admin_166']."</p>";
}
include '../zapati.php';
?>
