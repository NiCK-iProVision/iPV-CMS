<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_121'].'');
?>
<form method="POST" action="addscript.php" >
<?php echo $jazyk['admin_122']; ?><br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_123']; ?><br />
<?php
$FCKeditor = new FCKeditor('novinka');
$FCKeditor->BasePath = 'fckeditor/';
$FCKeditor->Value = $myvalue;
$FCKeditor->Create();
?><br /><br />
<input type="submit" value="<?php echo $jazyk['admin_064']; ?>" class="button">
</form>

<?php
include '../zapati.php';
?>
