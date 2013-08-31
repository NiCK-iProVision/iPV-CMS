<?          
 item("about");
    $contact = MySQL_Query("SELECT * FROM about ");
        while ($row = MySQL_Fetch_Array($contact)) {
		echo "<table border=\"0\" align=\"center\" width=\"97%\" cellpadding=\"0\" cellspacing=\"0\"><td>".$row['text']."</td></table>";	
		}	

?>
