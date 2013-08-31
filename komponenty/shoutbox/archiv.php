<?php
include(dirname(__FILE__).'/../../vzhledy/sablony/headofpage.php');
ocp("".$jazyk['web_314']."");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
    $vyber=mysql_query("select * from shoutbox order by id desc");
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
    $vysledek["text"] = str_replace('[U]', '<span style="text-decoration: underline;">', $vysledek["text"]);
    $vysledek["text"] = str_replace('[/U]', '</span>', $vysledek["text"]);
    $vysledek["text"] = str_replace('[I]', '<span style="font-style: italic;">', $vysledek["text"]);
    $vysledek["text"] = str_replace('[/I]', '</span>', $vysledek["text"]);
    echo '<div class="sb_name">'.$vysledek["nick"].'</div>
    <div class="sb_mass2">'.$vysledek["text"].'</div>';
    }
zcp();    
include(dirname(__FILE__).'/../../vzhledy/sablony/footerofpage.php');
?>