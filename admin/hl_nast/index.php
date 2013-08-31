<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_046'].'');
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$dotaz=mysql_query("SELECT * FROM hlavni WHERE id='1'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo '<form method="POST" action="aktualizace.php" >';
?>
<p align='center'><?php echo $jazyk['admin_047']; ?></p>
<table align='center'>

<tr><td width='120'><?php echo $jazyk['admin_048']; ?></td><td><input class="textbox" type="text" value="<?php echo $vypsat["nazev"]; ?>" name="nazev" size="40"></td></tr>
<tr><td width='120'><?php echo $jazyk['admin_049']; ?></td><td><input class="textbox" type="text" value="<?php echo $vypsat["popis"]; ?>" name="popis" size="40"></td></tr>
<tr><td width='120'><?php echo $jazyk['admin_050']; ?></td><td><input disabled class="textbox" type="text" value="<?php echo $vypsat["url"]; ?>" name="url" size="40"></td></tr>
<tr><td width='120'><?php echo $jazyk['admin_051']; ?></td><td><input class="textbox" type="text" value="<?php echo $vypsat["logo"]; ?>" name="logo" size="40"></td></tr>
<tr><td width='120'><?php echo $jazyk['admin_052']; ?></td><td><input class="textbox" type="text" value="<?php echo $vypsat["klic_slova"]; ?>" name="klic_slova" size="40"></td></tr>
<tr><td width='120'><?php echo $jazyk['admin_053']; ?></td><td><input class="textbox" type="text" value="<?php echo $vypsat["autor"]; ?>" name="autor" size="40"></td></tr>
<tr><td width='120'><?php echo $jazyk['admin_054']; ?></td><td><input class="textbox" type="text" value="<?php echo $vypsat["mail"]; ?>" name="mail" size="40"></td></tr>
<tr><td width='120'></td><td><br /><input type="submit" value="<?php echo $jazyk['admin_055']; ?>" class="button"></td></tr>

</table>
</form>
<?php
}
include '../zapati.php';
?>

