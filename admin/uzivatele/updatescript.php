<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
panel(''.$jazyk['admin_210'].'');
$id = $_POST['id'];
$_POST["jmeno"]=mysql_real_escape_string($_POST["jmeno"]);
$_POST["prijmeni"]=mysql_real_escape_string($_POST["prijmeni"]);
$_POST["prezdivka"]=mysql_real_escape_string($_POST["prezdivka"]);
$_POST["kat"]=mysql_real_escape_string($_POST["kat"]);
$_POST["avatar"]=mysql_real_escape_string($_POST["avatar"]);
$_POST["mail"]=mysql_real_escape_string($_POST["mail"]);
if (!empty($_POST["jmeno"]) and !empty($_POST["prijmeni"]) and !empty($_POST["prezdivka"]) and !empty($_POST["mail"])) {
  if (ereg("^.+@.+\\..+$", $_POST["mail"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `members` SET `firstname` = '".$_POST["jmeno"]."' ,`lastname` = '".$_POST["prijmeni"]."' ,`login` = '".$_POST["prezdivka"]."',`admin` = '".$_POST["kat"]."',`avatar` = '".$_POST["avatar"]."',`mail` = '".$_POST["mail"]."' WHERE member_id = '$id'") or die(mysql_error());
echo "<p align='center'>".$jazyk['admin_222']."</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>".$jazyk['admin_223']."</span></a></p>";
} 
  else {
   echo "<p align='center'>".$jazyk['admin_224']."</p>";
  }
}
else {
echo "<p align='center'>".$jazyk['admin_225']."</p>";
echo "<p align='center'><a href='updateform.php?id=$id'><span style='color: black;'>".$jazyk['admin_031']."</span></a></p>";
}
include '../zapati.php';
?>
