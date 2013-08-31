<?   
if (isset($_GET['edit_text'])){
  if($_SESSION['right_admin'] AND $_SESSION['idses']){
 item2("edit about");
	if (isset($_POST['odeslano'])){
		if ($_POST['odeslano']==1){
			$edittext = $_POST["edittext"];
                	$zapis = MySQL_Query("UPDATE about SET  text = '$edittext' ");
                    if (!$zapis){
                    	error("$lng_error");
                    } else {
                    	info("$lng_posted");
       }
     }
   }
if (isset($_GET['edit_text'])){
 $search = MySQL_Query("SELECT * FROM about");
    $row = MySQL_Fetch_Array($search);	
?>
<table align="center" width="90%">
<form method="post" action="index.php?vwmodule=admin_about&edit_text" name="edit">
<tr><td>Text:<tr><td>
<tr><td colspan="2">
<?php
$oFCKeditor = new FCKeditor('edittext') ;
$oFCKeditor->BasePath = 'fckeditor/' ;
$oFCKeditor->Value = stripslashes($row['text']) ;
$oFCKeditor->Width    = 450;
$oFCKeditor->Height   = 600;
$oFCKeditor->Create() ;
?>
<tr><td>
<input type="hidden" name="odeslano" value="1">
<input type="submit" value="OK">
</form>
</table>
<?
}
 } else { stop(); }

}	

?>