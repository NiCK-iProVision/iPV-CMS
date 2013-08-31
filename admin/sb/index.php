<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_111'].'');
?>
<script type="text/javascript">
function confirmDelete(delUrl) {
  if (confirm("<?php echo $jazyk['admin_112']; ?>")) {
    document.location = delUrl;
  }
}
</script>
<?php
$dotaz=mysql_query("SELECT * FROM shoutbox ORDER BY id desc");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
    $vypsat["nick"] = stripslashes($vypsat["nick"]);
    $vypsat["text"] = stripslashes($vypsat["text"]);
    $vypsat["text"] = str_replace(':D', '&nbsp;<img src="'.$url.'obrazky/smajlici/grin.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':)', '&nbsp;<img src="'.$url.'obrazky/smajlici/smile.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':(', '&nbsp;<img src="'.$url.'obrazky/smajlici/sad.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(';)', '&nbsp;<img src="'.$url.'obrazky/smajlici/wink.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':O', '&nbsp;<img src="'.$url.'obrazky/smajlici/shock.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace('8)', '&nbsp;<img src="'.$url.'obrazky/smajlici/cool.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':*', '&nbsp;<img src="'.$url.'obrazky/smajlici/pusa.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':srdce:', '&nbsp;<img src="'.$url.'obrazky/smajlici/3.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':@', '&nbsp;<img src="'.$url.'obrazky/smajlici/angry.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace('(y)', '&nbsp;<img src="'.$url.'obrazky/smajlici/like.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':P', '&nbsp;<img src="'.$url.'obrazky/smajlici/pfft.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':|', '&nbsp;<img src="'.$url.'obrazky/smajlici/frown.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':d', '&nbsp;<img src="'.$url.'obrazky/smajlici/grin.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':o', '&nbsp;<img src="'.$url.'obrazky/smajlici/shock.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace(':p', '&nbsp;<img src="'.$url.'obrazky/smajlici/pfft.png" border="0" alt="smajlik" />&nbsp;', $vypsat["text"]);
    $vypsat["text"] = str_replace('&lt;br /&gt;', '<br />', $vypsat["text"]);
    $vypsat["text"] = str_replace('[URL]', '<a href="', $vypsat["text"]);
    $vypsat["text"] = str_replace('[/URL]', '" target="_blank"><strong>'.$jazyk['admin_113'].'</strong></a>', $vypsat["text"]);
echo "<table align='center' class='pol' width='95%'>
<tr'><td style='border-bottom: 1px solid #888;' width='620'><b>".$vypsat['nick']."</b></td><td style='border-bottom: 1px solid #555;' width='50' align='right'>ID: ".$vypsat['id']."</td></tr>
<tr'><td style='border-bottom: 1px solid #888;' width='620'>".$vypsat['text']."</td></tr>
<tr><td>• ";
?>
<a href="javascript:confirmDelete('delete.php?id=<?php echo $vypsat['id']; ?>')" class="odk"><?php echo $jazyk['admin_076']; ?></a>
<?php 
echo " | <a href='updateform.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_055']."</a> •</td></tr>
</table><br />";
}
$vyber=mysql_query("select * from shoutbox");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<br /><br /><p style='position: relative; top: -15px;' align='center'>".$jazyk['admin_114']."</p>";
}
include '../zapati.php';
?>
