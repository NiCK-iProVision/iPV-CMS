<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['web_489'].'');
?>
<p align='center'><input class="button" type="button" value="<?php echo $jazyk['admin_300']; ?>" onclick="location.href='addform.php'"><br /><br /><strong><?php echo $jazyk['admin_301']; ?></strong></p><br />
<script type="text/javascript">
function confirmDelete(delUrl) {
  if (confirm("<?php echo $jazyk['admin_309']; ?>")) {
    document.location = delUrl;
  }
}
</script>
<?php
$dotaz=mysql_query("SELECT * FROM odkazy ORDER BY id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<table align='center' class='pol' width='95%'>
<tr'><td style='border-bottom: 1px solid #888;' width='620'><b><a href='".$vypsat['odk']."' class='odk' target='_blank'>".$vypsat['nazev']."</a></b></td><td style='border-bottom: 1px solid #555;' width='50' align='right'>ID: ".$vypsat['id']."</td></tr>
<tr><td>• ";
?>
<a href="javascript:confirmDelete('delete.php?id=<?php echo $vypsat['id']; ?>')" class="odk"><?php echo $jazyk['admin_076']; ?></a>
<?php 
echo " | <a href='updateform.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_055']."</a> •</td></tr>
</table><br />";
}
$vyber=mysql_query("select * from odkazy");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<p style='position: relative; top: -15px;' align='center'>".$jazyk['admin_302']."</p>";
}
include '../zapati.php';
?>
