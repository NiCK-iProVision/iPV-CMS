<?php

include 'mysql.php';

define("DB_SETTINGS", "strankovanie");
define("QUOTES_GPC", (ini_get('magic_quotes_gpc') ? TRUE : FALSE));

function stripinput($text) {
	if (!is_array($text)) {
		$text = stripslash(trim($text));
		$text = preg_replace("/(&amp;)+(?=\#([0-9]{2,3});)/i", "&", $text);
		$search = array("&", "\"", "'", "\\", '\"', "\'", "<", ">", "&nbsp;");
		$replace = array("&amp;", "&quot;", "&#39;", "&#92;", "&quot;", "&#39;", "&lt;", "&gt;", " ");
		$text = str_replace($search, $replace, $text);
	} else {
		foreach ($text as $key => $value) {
			$text[$key] = stripinput($value);
		}
	}
	return $text;
}

function stripslash($text) {
	if (QUOTES_GPC) { $text = stripslashes($text); }
	return $text;
}

function dbquery($query) {
	global $mysql_queries_count, $mysql_queries_time; $mysql_queries_count++;

	$result = @mysql_query($query);

	$mysql_queries_time[$mysql_queries_count] = array($query);

	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		return $result;
	}
}

function dbarray($query) {
	$result = @mysql_fetch_assoc($query);
	if (!$result) {
		echo mysql_error();
		return false;
	} else {
		return $result;
	}
}

$settings2 = array();
$result = dbquery("SELECT * FROM ".DB_SETTINGS);
while ($data = dbarray($result)) {
	$settings2[$data['stranky_meno']] = $data['stranky_hodnota'];
}
?>