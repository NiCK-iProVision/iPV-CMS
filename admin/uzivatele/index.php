<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_203'].'');
?>
<script type="text/javascript">
function confirmDelete(delUrl) {
  if (confirm("<?php echo $jazyk['admin_204']; ?>")) {
    document.location = delUrl;
  }
}
</script>
<?php
$dotaz=mysql_query("SELECT * FROM members ORDER BY member_id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<table align='center' class='pol' width='95%'>
<tr'><td style='border-bottom: 1px solid #888;' width='620'><b><a href='".$url."profil.php?id=".$vypsat['member_id']."' class='odk' target='_blank'>".$vypsat['login']."</a></b></td><td style='border-bottom: 1px solid #555;' width='50' align='right'>".$jazyk['admin_075'].": ".$vypsat['member_id']."</td></tr>
<tr><td>• ";
?>
<a href="javascript:confirmDelete('delete.php?id=<?php echo $vypsat['member_id']; ?>')" class="odk"><?php echo $jazyk['admin_076']; ?></a>
<?php 
echo " | <a href='updateform.php?id=".$vypsat['member_id']."' class='odk'>".$jazyk['admin_077']."</a> | <a href='zheslo.php?id=".$vypsat['member_id']."' class='odk'>".$jazyk['admin_205']."</a> •</td></tr>
</table><br />";
}
$vyber=mysql_query("select * from members");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<p style='position: relative; top: -15px;' align='center'>".$jazyk['admin_206']."</p>";
}
include '../zapati.php';
?>
