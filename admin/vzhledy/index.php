<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_041'].'');
echo $jazyk['admin_042'];
$adresar=(dirname(__FILE__).'/../../vzhledy/');
echo '<form method="POST" action="zmenit.php"><table width="100%"><tr><td width="100"><select style="width:100px;" class="select" name="vz" size="1">';
$vypis = opendir($adresar);
while (false!==($file = readdir($vypis)))
{ 
if ($file != "." && $file != ".." && $file != "sablony" && $file != "index.php" && $file != "zmenit.php" && is_file(dirname(__FILE__).'/../../vzhledy/'.$file.'/vzhled.php'))
{
echo "<option value='$file'>$file</option>";
}}
closedir($vypis);
$dotaz=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$vzhke=$vypsat['vzhled'];}
echo "</select></td><td width='50'>($vzhke)</td><td><input type='submit' value='".$jazyk['admin_043']."' class='button'></td></tr></table></form>";

include '../zapati.php';
?>


