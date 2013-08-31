<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
$id=$_GET['id'] ;
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM members WHERE member_id='$id'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
panel(''.$jazyk['admin_207'].' '.$vypsat["login"].'');
echo '<form method="POST" action="zheslos.php" >
<input type="text" style="display:none" name="id" value="'.$vypsat["member_id"].'"></input>';
?>
<?php echo $jazyk['admin_208']; ?>:<br /><input class="textbox" type="text" name="nazev1" size="20">
<br /><br />  
<?php echo $jazyk['admin_209']; ?>:<br /><input class="textbox" type="text" name="nazev2" size="20">
<br /><br />  
<input type="submit" value="<?php echo $jazyk['admin_077']; ?>" class="button">
</form>
<?php
}
include '../zapati.php';
?>

