<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_095'].'');
?>
<form method="POST" action="addscriptk.php" >
<?php echo $jazyk['admin_084']; ?><br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<input type="submit" value="<?php echo $jazyk['admin_064']; ?>" class="button">
</form>
<?php
include '../zapati.php';
?>
