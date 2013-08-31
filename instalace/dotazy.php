<?php
$mysql1 = "
   CREATE TABLE `blokovani` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `ip` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($mysql1,$db);

$sql2 = "
   CREATE TABLE `clanky` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `popis` longtext default NULL,
  `clanek` longtext default NULL,
  `kat` int(11) unsigned NOT NULL,
  `cas` longtext default NULL,
  `pridal` longtext default NULL,
  `shlednuto` int(11) unsigned NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql2,$db);

$sql3 = "
   CREATE TABLE `clan_like` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `id_clan` int(11) unsigned NOT NULL,
  `ip` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql3,$db);

$sql4 = "
   CREATE TABLE `galerie` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `popis` longtext default NULL,
  `kdo` longtext default NULL,
  `kdy` longtext default NULL,
  `url` longtext default NULL,
  `kat` int(11) unsigned NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql4,$db);

$sql5 = "
   CREATE TABLE `hlavni` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `popis` longtext default NULL,
  `url` longtext default NULL,
  `logo` longtext default NULL,
  `klic_slova` longtext default NULL,
  `autor` longtext default NULL,
  `vzhled` longtext default NULL,
  `mail` longtext default NULL,
  `jazyk` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql5,$db);

$sql6 = "
   CREATE TABLE `katclan` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql6,$db);

$sql7 = "
   CREATE TABLE `katgal` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `adresa` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql7,$db);

$sql8 = "
   CREATE TABLE `katstah` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql8,$db);

$sql9 = "
   CREATE TABLE `leve_p` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `text` longtext default NULL,
  `poradi` int(11) unsigned NOT NULL,
  `aktiv` int(11) unsigned NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql9,$db);

$sql10 = "
   CREATE TABLE `prave_p` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `text` longtext default NULL,
  `poradi` int(11) unsigned NOT NULL,
  `aktiv` int(11) unsigned NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql10,$db);

$sql16 = "
   CREATE TABLE `prostr_p` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `text` longtext default NULL,
  `poradi` int(11) unsigned NOT NULL,
  `aktiv` int(11) unsigned NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql16,$db);

$sql11 = "
CREATE TABLE `members` (
  `member_id` int(11) unsigned NOT NULL auto_increment,
  `firstname` varchar(100) default NULL,
  `lastname` varchar(100) default NULL,
  `login` varchar(100) NOT NULL default '',
  `passwd` varchar(32) NOT NULL default '',
  `admin` longtext default NULL,
  `avatar` longtext default NULL,
  `mail` longtext default NULL,
  `ip` longtext default NULL,
  `cas` longtext default NULL,
  `datum` longtext default NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql11,$db);

$sql12 = "
   CREATE TABLE `modifikace` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `url` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql12,$db);

$sql13 = "
   CREATE TABLE `novinky` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `popis` longtext default NULL,
  `text` longtext default NULL,
  `cas` longtext default NULL,
  `shlednuto` int(11) unsigned NOT NULL,
  `pridal` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql13,$db);

$sql14 = "
   CREATE TABLE `nov_kom` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nov_id` int(11) unsigned NOT NULL,
  `clen_id` int(11) unsigned NOT NULL,
  `cas` longtext default NULL,
  `kom` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql14,$db);

$sql15 = "
   CREATE TABLE `nov_like` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `id_nov` int(11) unsigned NOT NULL,
  `ip` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql15,$db);

$sql17 = "
   CREATE TABLE `shoutbox` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nick` varchar(25) not null,
  `text` varchar(500) not null,
  `datum` varchar(25) not null,
  `ip` varchar(20) not null,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql17,$db);

$sql18 = "
   CREATE TABLE `stahovani` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `popis` longtext default NULL,
  `url` longtext default NULL,
  `verze` longtext default NULL,
  `pridal` longtext default NULL,
  `cas` longtext default NULL,
  `kat` int(11) unsigned NOT NULL,
  `stahn` int(11) unsigned NOT NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql18,$db);

$sql19 = "
   CREATE TABLE `stranky` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `text` longtext default NULL,
  `shlednuto` int(11) unsigned NOT NULL,
  `pridal` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql19,$db);

$sql20 = "
   CREATE TABLE `strankovanie` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `stranky_meno` varchar(200) default NULL,
  `stranky_hodnota` text default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql20,$db);

$sql21 = "
   CREATE TABLE `odkazy` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nazev` longtext default NULL,
  `odk` longtext default NULL,
 PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql21,$db);
?>