<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_162'].'');
?>
<p align='center'><input class="button" type="button" value="<?php echo $jazyk['admin_139']; ?>" onclick="location.href='addform.php'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="button" value="<?php echo $jazyk['admin_170']; ?>" onclick="location.href='kat_gal.php'"><br /><br /><strong><?php echo $jazyk['admin_153']; ?>:</strong></p><br />
<script type="text/javascript">
function confirmDelete(delUrl) {
  if (confirm("<?php echo $jazyk['admin_171']; ?>")) {
    document.location = delUrl;
  }
}
</script>
<?php
$dotaz=mysql_query("SELECT * FROM galerie ORDER BY id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<table align='center' class='pol' width='95%'>
<tr'><td style='border-bottom: 1px solid #888;' width='620'><b>".$vypsat['nazev']."</b></td><td style='border-bottom: 1px solid #555;' width='50' align='right'>".$jazyk['admin_075'].": ".$vypsat['id']."</td></tr>
<tr><td>• ";
?>
<a href="javascript:confirmDelete('delete.php?id=<?php echo $vypsat['id']; ?>')" class="odk"><?php echo $jazyk['admin_076']; ?></a>
<?php 
echo " | <a href='updateform.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_077']."</a> •</td></tr>
</table><br />";
}
$vyber=mysql_query("select * from galerie");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<p style='position: relative; top: -15px;' align='center'>".$jazyk['admin_172']."</p>";
}
include '../zapati.php';
?>
