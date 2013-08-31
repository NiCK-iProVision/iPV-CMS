<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
$id=$_GET['id'];
mysql_query("UPDATE prave_p SET aktiv = '0' WHERE id = $id");
?>
<script>
window.location.href="index.php";
</script>
<?php
include '../zapati.php';
?>

