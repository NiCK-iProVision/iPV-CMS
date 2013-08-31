<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_258'].'');

$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM katstah WHERE id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="updatescriptk.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["id"].'"></input>';
?>
<?php echo $jazyk['admin_084']; ?><br /><input class="textbox" type="text" value="<?php echo $vypsat["nazev"]; ?>" name="nazev2" size="20">
<br /><br />
<input type="submit" value="<?php echo $jazyk['admin_077']; ?>" class="button">
</form>
<?php
}
include '../zapati.php';
?>

