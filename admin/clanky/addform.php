<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_059'].'');
$vyber=mysql_query("select * from katclan");
$pocet = mysql_num_rows($vyber);
if ($pocet>0) {
?>
<form method="POST" action="addscript.php" >
<?php echo $jazyk['admin_060']; ?><br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_061']; ?><br />
<?php
$FCKeditor = new FCKeditor('popis');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $myvalue;
$FCKeditor->Create();
?><br /><br />
<?php echo $jazyk['admin_062']; ?><br />
<?php
$FCKeditor = new FCKeditor('clanek');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $myvalue;
$FCKeditor->Create();
?><br /><br />
<?php echo $jazyk['admin_063']; ?>
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
<input type="submit" value="<?php echo $jazyk['admin_064']; ?>" class="button">
</form>

<?php
}
else {
echo "<p align='center'>".$jazyk['admin_065']."</p>";
}
include '../zapati.php';
?>
