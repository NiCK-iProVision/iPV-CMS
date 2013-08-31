<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_145'].'');
?>
<form method="POST" action="addscriptk.php" name="newad" enctype="multipart/form-data">
<?php echo $jazyk['admin_146']; ?>:<br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_147']; ?><br />
<input type="file" name="file1">
<br /><br />
<input type="submit" value="<?php echo $jazyk['admin_064']; ?>" class="button">
</form>
<?php
include '../zapati.php';
?>
