<?php
include_once(dirname(__FILE__).'/../../vision.php');
include_once(dirname(__FILE__).'/../../strankovanie.php');
include '../zahlavi.php';
$id=@$_POST['id'];  
panel(''.$jazyk['web_464'].'');

  echo "<form method='post' action='aktualizace.php'>";
  echo "<table cellpadding='0' cellspacing='0' align='center'>\n<tr>\n";
  echo "<td width='50%'>".$jazyk['web_465'].":</td>\n";
  echo "<td width='50%'>
  <select style='width:100px;' class='select' name='novinky' size='1'>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  <option value='6'>6</option>
  <option value='7'>7</option>
  <option value='8'>8</option>
  <option value='9'>9</option>
  <option value='10'>10</option>
  <option value='11'>11</option>
  <option value='12'>12</option>
  <option value='13'>13</option>
  <option value='14'>14</option>
  <option value='15'>15</option>
  </select>(".$settings2['novinky'].")
  </td>\n";
  echo "</tr>\n<tr>\n";
  echo "<td width='50%'>".$jazyk['web_466'].":</td>\n";
  echo "<td width='50%'>
  <select style='width:100px;' class='select' name='clanky' size='1'>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  <option value='6'>6</option>
  <option value='7'>7</option>
  <option value='8'>8</option>
  <option value='9'>9</option>
  <option value='10'>10</option>
  <option value='11'>11</option>
  <option value='12'>12</option>
  <option value='13'>13</option>
  <option value='14'>14</option>
  <option value='15'>15</option>
  </select>(".$settings2['clanky'].")  
  </td>\n";
  echo "</tr>\n<tr>\n";
  echo "<td width='50%'>".$jazyk['web_467'].":</td>\n";
  echo "<td width='50%'>
  <select style='width:100px;' class='select' name='stahovanie' size='1'>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  <option value='6'>6</option>
  <option value='7'>7</option>
  <option value='8'>8</option>
  <option value='9'>9</option>
  <option value='10'>10</option>
  <option value='11'>11</option>
  <option value='12'>12</option>
  <option value='13'>13</option>
  <option value='14'>14</option>
  <option value='15'>15</option>
  </select>(".$settings2['stahovanie'].")  
  </td>\n";
  echo "</tr>\n<tr>\n";
  echo "<td width='50%'>".$jazyk['web_468'].":</td>\n";
  echo "<td width='50%'>
  <select style='width:100px;' class='select' name='strany' size='1'>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  <option value='6'>6</option>
  <option value='7'>7</option>
  <option value='8'>8</option>
  <option value='9'>9</option>
  <option value='10'>10</option>
  <option value='11'>11</option>
  <option value='12'>12</option>
  <option value='13'>13</option>
  <option value='14'>14</option>
  <option value='15'>15</option>
  </select>(".$settings2['stranky'].")  
  </td>\n";
  echo "</tr>\n<tr>\n";
  echo "<td align='center' colspan='2'><br />\n";
  echo "<input type='submit' name='ok' value='".$jazyk['web_469']."' class='button' />\n</td>\n"; 
  echo "</tr>\n</table>\n</form>\n</div>";


include '../zapati.php';
?>
