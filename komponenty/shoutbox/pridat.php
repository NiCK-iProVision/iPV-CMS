<?php
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$bany = array("zabanovanaip1","zabanovanaip2","zabanovanaip3");
$alert = "";
$antispam = 30;

if (isset($_POST["nick"])){
    $_POST["nick"] = trim($_POST["nick"]);
    $_POST["nick"]= mysql_real_escape_string($_POST["nick"]); 
    }
if (isset($_POST["text"])){   
    $_POST["text"] = trim($_POST["text"]);
    $_POST["text"] = nl2br($_POST["text"]);
    $_POST["text"]= mysql_real_escape_string($_POST["text"]); 
    } 
    $vyber=mysql_query("select * from shoutbox order by id desc limit 1");
    while ($vysledek=mysql_fetch_assoc($vyber))
   {
    $posl_jmeno=$vysledek["nick"];
    $posl_text=$vysledek["text"];
    }  
if (!$_SESSION["cas"]){
    $_SESSION["cas"] = 0;
}

if (isset($_POST["pridat"])){

    $sec = time()-$antispam;
    if ($prihlasen=='1') { 
    if ($_SESSION["SESS_LOGIN"]==$posl_jmeno) {
    if ($_POST["text"]==$posl_text) {
    $alert = "".$jazyk['web_307']."";
    }}}
     if ($prihlasen!='1') {
     if ($_POST["nick"]==$posl_jmeno) {
     if ($_POST["text"]==$posl_text) {
     $alert = "".$jazyk['web_307']."";
     }}}
       
    if (in_array($_SERVER["REMOTE_ADDR"],$bany)){
        $alert("".$jazyk['web_308']."");
    }
        elseif (time()-$antispam<=$_SESSION["cas"]){
        $alert = "".$jazyk['web_309']."";
        }
    elseif (empty($_POST["nick"]) and $prihlasen!='1'){
        $alert = "".$jazyk['web_310']."";
   
    }elseif (empty($_POST["text"])){
        $alert = "".$jazyk['web_311']."";
    }
    else{
    if (trim($alert)==""){
if ($prihlasen=='1') {       
        mysql_query("insert into shoutbox (nick,text,datum,ip) 
      values ('".$_SESSION["SESS_LOGIN"]."','".$_POST["text"]."',
      '".StrFTime("%d.%m.%Y", Time())."','".$_SERVER["REMOTE_ADDR"]."')");
      $_SESSION["cas"] = time();
}

else {
        mysql_query("insert into shoutbox (nick,text,datum,ip) 
      values ('".$_POST["nick"]."','".$_POST["text"]."',
      '".StrFTime("%d.%m.%Y", Time())."','".$_SERVER["REMOTE_ADDR"]."')");
      $_SESSION["cas"] = time();
}
}       

    }
}
if (trim($alert)!=""){
    echo('<script>
         alert("'.$alert.'");
         </script>');
}
?>
<script type='text/javascript' src='<?php echo $url; ?>komponenty/shoutbox/ad.js'></script>
<script>
$().ready( function(){
   $('#sb_skryt').click(function(){
      $('.shout_add').hide();
      return false;
   })
});
</script>
<form action="" method="post">
<table><tr><td>
<table class='sb_smajlici' align='center'><tr><td>
<img src="<?php echo $url; ?>obrazky/smajlici/grin.png" height="15" border="0" alt="smajlik" onclick="addtxt(':D')" />
<img src="<?php echo $url; ?>obrazky/smajlici/smile.png" height="15" border="0" alt="smajlik" onclick="addtxt(':)')" />
<img src="<?php echo $url; ?>obrazky/smajlici/sad.png" height="15" border="0" alt="smajlik" onclick="addtxt(':(')" />
<img src="<?php echo $url; ?>obrazky/smajlici/wink.png" height="15" border="0" alt="smajlik" onclick="addtxt(';)')" />
<img src="<?php echo $url; ?>obrazky/smajlici/shock.png" height="15" border="0" alt="smajlik" onclick="addtxt(':O')" />
<img src="<?php echo $url; ?>obrazky/smajlici/cool.png" height="15" border="0" alt="smajlik" onclick="addtxt('8)')" />
<img src="<?php echo $url; ?>obrazky/smajlici/pusa.png" height="15" border="0" alt="smajlik" onclick="addtxt(':*')" />
<img src="<?php echo $url; ?>obrazky/smajlici/3.png" height="15" border="0" alt="smajlik" onclick="addtxt(':srdce:')" />
<img src="<?php echo $url; ?>obrazky/smajlici/angry.png" height="15" border="0" alt="smajlik" onclick="addtxt(':@')" />
<img src="<?php echo $url; ?>obrazky/smajlici/like.png" height="15" border="0" alt="smajlik" onclick="addtxt('(y)')" />
<img src="<?php echo $url; ?>obrazky/smajlici/pfft.png" height="15" border="0" alt="smajlik" onclick="addtxt(':P')" />
<img src="<?php echo $url; ?>obrazky/smajlici/frown.png" height="15" border="0" alt="smajlik" onclick="addtxt(':|')" />
<img src="<?php echo $url; ?>obrazky/url.png" border="0" height="15" alt="smajlik" onclick="addtxt('[URL][/URL]')" />
</td></tr></table>
<p align='center'>
<?php
if ($prihlasen=='1') {
}
else {
?>
<?php echo $jazyk['web_312']; ?>: <input type="text" class="sb_textbox" name="nick" size="18" /><br />
<?php
}
?>
<br />
<input type="submit" class="sb_tlacitko" name="pridat" value="Přidat" /></p>
</td><td align='center'>
<?php echo $jazyk['web_313']; ?>:<br /><textarea id="sbtxt" rows="0" cols="0" class="shout_textbox" name="text"></textarea> 
</td>
<td>
<div class='sb_exit_button'><img id='sb_skryt' alt='close' border='0' height='20' src='<?php echo $url; ?>obrazky/exit.png' /></a></div>
</td>
</tr></table>


</form>
