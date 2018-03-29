#!/usr/bin/php
<?php
if (!($file = fopen("/var/run/utmpx", "r")))
	exit();
$array=[];
while ($utmpx = fread($file, 628))
{
	$unpack = unpack("a256Name/a4b/a32Sys/id/iType/I2Date", $utmpx);
	$array[$unpack['Sys']] = $unpack;
}
sort($array);

$str="";
date_default_timezone_set('Europe/Paris');
foreach ($array as $entry)
{
    if ($entry['Type'] === 7)
	{
		$str = $str.str_pad(substr(trim($entry['Name']), 0, 8), 9, " ").str_pad(substr(trim($entry['Sys']), 0, 8), 9, " ");
		$date = date("M d H:i\n", $entry['Date1']);
		$str = $str.$date;
    }
}
	echo $str;
?>
