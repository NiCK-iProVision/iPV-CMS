<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_282'].'');
?>
<form method="POST" action="prostreds.php" >
<?php echo $jazyk['admin_283']; ?>:<br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_284']; ?>:<br />
<textarea class="textbox2" name="obsah" style="width: 500px; height: 150px;"></textarea>
<br /><br />
<input type="submit" value="<?php echo $jazyk['admin_064']; ?>" class="button">
</form>
<?php
include '../zapati.php';
?>
