<?php
include '../vzhledy/sablony/headofpage.php';
$a = $_GET['id'];
if (!is_numeric($a)) {
ocp('SQL Injection!');
echo "<p align='center'>".$jazyk['web_390']."</p>";
zcp();
}
else {
$dotaz=mysql_query("select * from stahovani where id='$a'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{
ocp(''.$jazyk['web_459'].' - '.$vypsat["nazev"].'');
echo "<p align='center'>".$jazyk['web_460']." <a href='".$vypsat['url']."'>".$jazyk['web_479']."</a><br /><img src='".$url."komponenty/login/nacitani.gif' border='0' alt='Load' /></p>";
?>
<meta http-equiv="refresh" content="5;url=<?php echo $vypsat["url"]; ?>">
<?php
$shledn1 =  ''.$vypsat["stahn"].'';
$shledn = $shledn1 + 1;
mysql_query("UPDATE `stahovani` SET `stahn` = '$shledn' WHERE id = '$a'") or die(mysql_error());
zcp();
}

}                                                                                                                                                                                              

include '../vzhledy/sablony/footerofpage.php';
?>