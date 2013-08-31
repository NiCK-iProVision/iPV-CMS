<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_023'].'');
?>
<form method="POST" action="addscript.php" >
<?php echo $jazyk['admin_024']; ?><br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<input type="submit" value="<?php echo $jazyk['admin_025']; ?>" class="button">
</form>
<?php
include '../zapati.php';
?>
