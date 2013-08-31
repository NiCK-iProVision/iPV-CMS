<?php
$dotaz2=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{
include(dirname(__FILE__).'/../../jazyk/'.$vypsat2["jazyk"].'/index.php');
}
if (isset($_SESSION["SESS_LOGIN"])) {
$prihlasen=1;
}
else {
$prihlasen=0;
}
op(''.$jazyk['web_303'].'');
$dotaz2=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat2=mysql_fetch_assoc($dotaz2))
{
$url=$vypsat2['url'];  
}
echo "<div id='shout_add' class='shout_add'>
<table align='center' class='tbaddsb'><tr><td align='center'>";
include_once 'pridat.php';
echo "</td></tr></table></div>";
?>
<script>
$().ready( function(){
   $('#sb_pridat').click(function(){
      $('.shout_add').show();
      return false;
   })
});
</script>
<p align="center"><button id="sb_pridat" class="tlacitko"><?php echo $jazyk['web_304']; ?></button></p>
<?php 
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
    $vyber=mysql_query("select * from shoutbox order by id desc limit 10");
    while ($vysledek=mysql_fetch_assoc($vyber))
   {
    $vysledek["nick"] = stripslashes($vysledek["nick"]);
    $vysledek["text"] = stripslashes($vysledek["text"]);
    $vysledek["text"] = str_replace(':D', '&nbsp;<img src="'.$url.'obrazky/smajlici/grin.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':)', '&nbsp;<img src="'.$url.'obrazky/smajlici/smile.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':(', '&nbsp;<img src="'.$url.'obrazky/smajlici/sad.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(';)', '&nbsp;<img src="'.$url.'obrazky/smajlici/wink.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':O', '&nbsp;<img src="'.$url.'obrazky/smajlici/shock.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace('8)', '&nbsp;<img src="'.$url.'obrazky/smajlici/cool.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':*', '&nbsp;<img src="'.$url.'obrazky/smajlici/pusa.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':srdce:', '&nbsp;<img src="'.$url.'obrazky/smajlici/3.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':@', '&nbsp;<img src="'.$url.'obrazky/smajlici/angry.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace('(y)', '&nbsp;<img src="'.$url.'obrazky/smajlici/like.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':P', '&nbsp;<img src="'.$url.'obrazky/smajlici/pfft.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':|', '&nbsp;<img src="'.$url.'obrazky/smajlici/frown.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':d', '&nbsp;<img src="'.$url.'obrazky/smajlici/grin.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':o', '&nbsp;<img src="'.$url.'obrazky/smajlici/shock.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace(':p', '&nbsp;<img src="'.$url.'obrazky/smajlici/pfft.png" border="0" alt="smajlik" />&nbsp;', $vysledek["text"]);
    $vysledek["text"] = str_replace('&lt;br /&gt;', '<br />', $vysledek["text"]);
    $vysledek["text"] = str_replace('[URL]', '<a href="', $vysledek["text"]);
    $vysledek["text"] = str_replace('[/URL]', '" target="_blank"><strong>'.$jazyk['web_305'].'</strong></a>', $vysledek["text"]);
    
$dotaz3=mysql_query("SELECT * FROM members where login='".$vysledek["nick"]."'");
while ($vypsat3=mysql_fetch_assoc($dotaz3))
{$clen_id=$vypsat3['member_id'];}
$vyber2=mysql_query("SELECT * FROM members where login='".$vysledek["nick"]."'");
$pocet2 = mysql_num_rows($vyber2);
if ($pocet2<1) {
    echo '<div class="sb_name">'.$vysledek["nick"].'</div>
    <div class="sb_mass">'.$vysledek["text"].'</div>';
} 
else {
    echo '<div class="sb_name"><a href="'.$url.'profil.php?id='.$clen_id.'">'.$vysledek["nick"].'</a></div>
    <div class="sb_mass">'.$vysledek["text"].'</div>';
    }
    }
    $vyber=mysql_query("select * from shoutbox");
$pocet = mysql_num_rows($vyber);
if ($pocet<1) {
echo "<p align='center'>".$jazyk['web_306']."</p>";
}
zp();
?>