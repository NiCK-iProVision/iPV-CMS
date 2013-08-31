<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_130'].'');
?>
<p align='center'><input class="button" type="button" value="<?php echo $jazyk['admin_134']; ?>" onclick="location.href='addform.php'"><br /><br /><strong><?php echo $jazyk['admin_131']; ?></strong></p><br />
<script type="text/javascript">
function confirmDelete(delUrl) {
  if (confirm("<?php echo $jazyk['admin_132']; ?>")) {
    document.location = delUrl;
  }
}
</script>
<?php
$dotaz=mysql_query("SELECT * FROM stranky ORDER BY id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<table align='center' class='pol' width='95%'>
<tr'><td style='border-bottom: 1px solid #888;' width='620'><b><a href='".$url."stranky/stranka.php?id=".$vypsat['id']."' class='odk' target='_blank'>".$vypsat['nazev']."</a></b></td><td style='border-bottom: 1px solid #555;' width='50' align='right'>ID: ".$vypsat['id']."</td></tr>
<tr><td>• ";
?>
<a href="javascript:confirmDelete('delete.php?id=<?php echo $vypsat['id']; ?>')" class="odk"><?php echo $jazyk['admin_076']; ?></a>
<?php 
echo " | <a href='updateform.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_055']."</a> •</td></tr>
</table><br />";
}
$vyber=mysql_query("select * from stranky");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<p style='position: relative; top: -15px;' align='center'>".$jazyk['admin_133']."</p>";
}
include '../zapati.php';
?>
