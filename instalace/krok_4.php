<?php 
      session_start();
      include '../jazyk/'.$_SESSION["jazyk"].'/index.php';    
?> 
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='cs' lang='cs'>
<head>
<title>iPV CMS (Výchozí) WVS Beta v1.2</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='description' content='iPV CMS (Výchozí) WVS Beta v1.2' />
<meta name='keywords' content='cms, vision, iprovision, pro, i, system, rs' />
<meta name='author' content='iProVision.eu' />
<meta name='robots' content='index,follow' />
<link rel='stylesheet' href='styl.css' type='text/css' media='screen' />
<link rel='shortcut icon' href='ikona.ico' type='image/x-icon' /> 
</head>
<body>
<p align='center'><img border='0' src='logo.png' /></p>
<table width='1000' align='center'><tr><td valign='top' width='200' class='bold'>
<?php echo $jazyk['web_476']; ?>: <br /><br />
• <?php echo $jazyk['web_398']; ?><br /><br />
• <?php echo $jazyk['web_399']; ?><br /><br />
• <?php echo $jazyk['web_400']; ?><br /><br />
<span class='aktivni'>• <?php echo $jazyk['web_401']; ?></span><br /><br />
• <?php echo $jazyk['web_402']; ?>
</td><td width='800' valign='top'>
<table width='800' class='tabulka'><tr><td>
<div align='center'><p><?php echo $jazyk['web_441']; ?></p>
<form method="POST" action="krok_5.php" >

<table width="" border="0" align="center" cellpadding="0" cellspacing="3" summary="">
    <tbody>
        <tr>
            <td><?php echo $jazyk['web_442']; ?>:</td>
            <td><input class="textbox" type="text" name="nazev" size="20"></td>
        </tr>
        <tr>
            <td><?php echo $jazyk['web_443']; ?>:</td>
            <td><input class="textbox" type="text" name="popis" size="20"></td>
        </tr>
        <tr>
            <td><?php echo $jazyk['web_444']; ?>:</td>
            <td><input class="textbox" type="text" name="autor" size="20"></td>
        </tr>
        <tr>
            <td><?php echo $jazyk['web_445']; ?>:</td>
            <td><input class="textbox" type="text" name="keywords" size="20"></td>
        </tr>
        <tr>
            <td><?php echo $jazyk['web_446']; ?>:</td>
            <td><input class="textbox" type="text" name="mail" size="20"></td>
        </tr>
    </tbody>
</table><br />
<p align='center'><input type="submit" value="<?php echo $jazyk['web_412']; ?>" class="tlacitko"></p>
</form>
</td></tr></table>
</td></tr></table>
</body>
</html>