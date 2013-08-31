<?php
//Část stránky do prostředních panelů (header, logo, menu, leve panely)
function headofpage() {
$dotaz=mysql_query("SELECT * FROM hlavni where id='1'");
while ($vypsat=mysql_fetch_assoc($dotaz))
{$url=$vypsat['url'];}
echo "<div class='h1'><h1>IProVision.eu</h1>
</div>
<div class='h2'><h2>Kodérská poradna a studio</h2>
</div>
<div class='h2'><h3>Návody zdarma</h3>
</div>
<div class='h2'><h3>Svět kodingu</h3>
</div>
<div class='h2'><h3>Návody</h3>
</div>
<div class='h2'><h3>PHP</h3>
</div>
<div class='h2'><h3>Coding World</h3>
</div>
<div class='h2'><h4>Kodérské návody</h4>
</div>
<div class='h2'><h4>HTML</h4>
</div>
<div class='h2'><h4>CSS</h4>
</div>";
echo "<table width='200' height='200' class='shad'><tr><td></td></tr></table>";
echo "<table width='500' class='hlavicka'><tr><td></td></tr></table>";
echo "<table width='99%' align='center' class='bodytb'><tr><td>";
echo "<table align='center' width='100%' class='telo'><tr>";
echo "<td class='levypanel' valign='top'>";
include(dirname(__FILE__).'/../sablony/levy.php');
echo "</td><td class='prostrednipanel' valign='top'>";
}
//Uzavření prostředních panelů a zbytek stránky
function footerofpage() {
echo "</td><td class='pravypanel' valign='top'>";
include(dirname(__FILE__).'/../sablony/pravy.php');
echo "</td></tr></table>";
echo "<table align='center' width='100%' class='footer'><tr><td>Poháněno systémem <a href='http://iprovision.eu/'>iProVision CMS (Výchozí) WVS Beta v2.0.</a><br />Copyright © 2013 by iProVision.eu.</td></tr></table>";
echo "</td></tr></table>";
}
//Funkce
function op($nazev) {
echo "<table class='cap22'><tr><td><p align='center' class='pcap'><span class='cap'>$nazev</span></p></td></tr></table><table class='op'><tr><td>";
}
function zp() {
echo "</td></tr></table><br />";
}
function ocp($nazev) {
echo "<table class='cap2'><tr><td><p align='center' class='pcap'><span class='cap'>$nazev</span></p></td></tr></table><table class='ocp'><tr><td>";
}
function zcp() {
echo "</td></tr></table><br />";
}
?>