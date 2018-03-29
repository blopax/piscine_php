#!/usr/bin/php
<?php
if (!($file = fopen("/var/run/utmpx", "r")))
	exit();
$array=[];
while ($utmpx = fread($file, 628))
{
	$unpack = unpack("a256Name/a4b/a32Term/id/iType/I2Date", $utmpx);
	$array[$unpack['Term']] = $unpack;
}
sort($array);

$str="";
date_default_timezone_set('Europe/Paris');
foreach ($array as $entry)
{
    if ($entry['Type'] === 7)
	{
		$str = $str.str_pad(substr(trim($entry['Name']), 0, 8), 9, " ").str_pad(substr(trim($entry['Term']), 0, 8), 9, " ");
		$date = date("M d H:i\n", $entry['Date1']);
		$str = $str.$date;
    }
}
	echo $str;
?>
