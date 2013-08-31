<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_230'].'');
$vyber=mysql_query("select * from katstah");
$pocet = mysql_num_rows($vyber);
if ($pocet>0) {
?>
<form method="POST" action="addscript.php" >
<?php echo $jazyk['admin_231']; ?>:<br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_232']; ?>:<br />
<?php
$FCKeditor = new FCKeditor('popis');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $myvalue;
$FCKeditor->Create();
?><br /><br />
<?php echo $jazyk['admin_233']; ?>:<br /><input class="textbox" type="text" name="adresa" size="20"><br /><br />
<?php echo $jazyk['admin_234']; ?>:<br /><input class="textbox" type="text" name="verze" size="20"><br /><br />
<?php echo $jazyk['admin_090']; ?>:
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
<input type="submit" value="<?php echo $jazyk['admin_235']; ?>" class="button">
</form>

<?php
}
else {
echo "<p align='center'>".$jazyk['admin_236']."</p>";
}
include '../zapati.php';
?>
