<?php
include_once(dirname(__FILE__).'/../../vision.php');
include '../zahlavi.php';
$id=$_GET['id'];
mysql_query("UPDATE prostr_p SET aktiv = '1' WHERE id = $id");
?>
<script>
window.location.href="index.php";
</script>
<?php
include '../zapati.php';
?>

