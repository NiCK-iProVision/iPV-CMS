<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_267'].'');
?>
<p align='center'>
<input class="button" type="button" value="<?php echo $jazyk['admin_271']; ?>" onclick="location.href='levy.php'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="button" type="button" value="<?php echo $jazyk['admin_272']; ?>" onclick="location.href='prostred.php'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="button" type="button" value="<?php echo $jazyk['admin_273']; ?>" onclick="location.href='pravy.php'">
<br /><br /><strong><?php echo $jazyk['admin_274'] ; ?>:</strong></p><br />
<script type="text/javascript">
function confirmDelete(delUrl) {
  if (confirm("<?php echo $jazyk['admin_275']; ?>")) {
    document.location = delUrl;
  }
}
</script>
<?php
//posledni
$dotaz=mysql_query("SELECT * FROM leve_p ORDER BY poradi desc limit 1");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$por1=$vypsat['poradi'];}
$dotaz=mysql_query("SELECT * FROM prave_p ORDER BY poradi desc limit 1");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$por2=$vypsat['poradi'];}
$dotaz=mysql_query("SELECT * FROM prostr_p ORDER BY poradi desc limit 1");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$por3=$vypsat['poradi'];}
//prvni
$dotaz=mysql_query("SELECT * FROM leve_p ORDER BY poradi limit 1");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$por11=$vypsat['poradi'];}
$dotaz=mysql_query("SELECT * FROM prave_p ORDER BY poradi limit 1");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$por22=$vypsat['poradi'];}
$dotaz=mysql_query("SELECT * FROM prostr_p ORDER BY poradi limit 1");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$por33=$vypsat['poradi'];}

//vypis

echo "<table width='600' align='center'>";
echo "<tr><td widtd='300'><strong>".$jazyk['admin_276']."</strong></td></tr>";
$vyber=mysql_query("select * from leve_p");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<tr><td widtd='300'>".$jazyk['admin_277']."</td><td>";
}
$dotaz=mysql_query("SELECT * FROM leve_p ORDER BY poradi");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<tr><td widtd='300'>".$vypsat['nazev']."</td><td>";
echo "• ";
if ($vypsat['aktiv']==1) {
echo "<a href='deak1.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_298']."</a> | ";
}
if ($vypsat['aktiv']==0) {
echo "<a href='ak1.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_297']."</a> | ";
}
?><a href="javascript:confirmDelete('delete1.php?id=<?php echo $vypsat['id']; ?>')" class="odk"><?php echo $jazyk['admin_076']; ?></a> | <a href='updateform1.php?id=<?php echo $vypsat['id']; ?>' class='odk'><?php echo $jazyk['admin_077']; ?></a> •
<?php 
echo "</td><td align='right'>";
if ($vypsat['poradi']!=$por11) {
echo "<a href='dolu1.php?id=".$vypsat['id']."'><img src='up.png' border='0' alt='up' height='15' /></a>"; 
}
if ($vypsat['poradi']!=$por1) {
echo "<a href='nahoru1.php?id=".$vypsat['id']."'><img src='down.png' border='0' alt='up' height='15' /></a>";
}
echo "<a href='doprava.php?id=".$vypsat['id']."'><img src='right.png' border='0' alt='up' height='15' /></a></td></tr>"; 
}
echo "<tr><td widtd='300'></td></tr>";
echo "<tr><td widtd='300'><strong>".$jazyk['admin_278']."</strong></td></tr>";
$vyber=mysql_query("select * from prave_p");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<tr><td widtd='300'>".$jazyk['admin_279']."</td><td>";
}
$dotaz=mysql_query("SELECT * FROM prave_p ORDER BY poradi");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<tr><td widtd='300'>".$vypsat['nazev']."</td><td>";
echo "• ";
if ($vypsat['aktiv']==1) {
echo "<a href='deak2.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_298']."</a> | ";
}
if ($vypsat['aktiv']==0) {
echo "<a href='ak2.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_297']."</a> | ";
}
?>
<a href="javascript:confirmDelete('delete2.php?id=<?php echo $vypsat['id']; ?>')" class="odk"><?php echo $jazyk['admin_076']; ?></a> | <a href='updateform2.php?id=<?php echo $vypsat['id']; ?>' class='odk'><?php echo $jazyk['admin_077']; ?></a> •
<?php 
echo "</td><td align='right'><a href='doleva.php?id=".$vypsat['id']."'><img src='left.png' border='0' alt='up' height='15' /></a>";
if ($vypsat['poradi']!=$por22) {
echo "<a href='dolu2.php?id=".$vypsat['id']."'><img src='up.png' border='0' alt='up' height='15' /></a>"; 
}
if ($vypsat['poradi']!=$por2) {
echo "<a href='nahoru2.php?id=".$vypsat['id']."'><img src='down.png' border='0' alt='up' height='15' /></a>";
}
echo "</td></tr>"; 
}

echo "<tr><td widtd='300'></td></tr>";
echo "<tr><td widtd='300'><strong>".$jazyk['admin_280']."</strong></td></tr>";
$dotaz=mysql_query("SELECT * FROM prostr_p ORDER BY poradi");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
echo "<tr><td widtd='300'>".$vypsat['nazev']."</td><td>";
echo "• ";
if ($vypsat['aktiv']==1) {
echo "<a href='deak3.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_298']."</a> | ";
}
if ($vypsat['aktiv']==0) {
echo "<a href='ak3.php?id=".$vypsat['id']."' class='odk'>".$jazyk['admin_297']."</a> | ";
}
?><a href="javascript:confirmDelete('delete3.php?id=<?php echo $vypsat['id']; ?>')" class="odk"><?php echo $jazyk['admin_076']; ?></a> | <a href='updateform3.php?id=<?php echo $vypsat['id']; ?>' class='odk'><?php echo $jazyk['admin_077']; ?></a> •
<?php 
echo "</td><td align='right'>";
if ($vypsat['poradi']!=$por33) {
echo "<a href='dolu3.php?id=".$vypsat['id']."'><img src='up.png' border='0' alt='up' height='15' /></a>"; 
}
if ($vypsat['poradi']!=$por3) {
echo "<a href='nahoru3.php?id=".$vypsat['id']."'><img src='down.png' border='0' alt='up' height='15' /></a>";
}
echo "</td></tr>"; 
}
$vyber=mysql_query("select * from prostr_p");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<tr><td widtd='300'>".$jazyk['admin_281']."</td><td>";    
}
echo "</table>";
include '../zapati.php';
?>
