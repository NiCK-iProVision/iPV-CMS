<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_300'].'');
?>
<form method="POST" action="addscript.php" >
<?php echo $jazyk['admin_303']; ?><br /><input class="textbox" type="text" name="nazev2" size="20"><br /><br />
<?php echo $jazyk['admin_304']; ?><br /><input class="textbox" type="text" name="popis" size="20">
<br /><br />
<input type="submit" value="<?php echo $jazyk['admin_064']; ?>" class="button">
</form>

<?php
include '../zapati.php';
?>
