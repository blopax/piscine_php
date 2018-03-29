#!/usr/bin/php
<?php
if (!($file = fopen("/var/run/utmpx", "r")))
	exit();
while ($utmpx = fread($file, 628))
{
	$unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
	$array[$unpack['c']] = $unpack;
}
$str="";
date_default_timezone_set('Europe/Paris');
foreach ($array as $login)
{
    if ($login['e'] === 7)
	{
		$str = $str.str_pad(substr(trim($login['a']), 0, 8), 9, " ").str_pad(substr(trim($login['c']), 0, 8), 9, " ");
		$date = date("M d H:i\n", $login['f1']);
		$str = $str.$date;
    }
}
	echo $str;
?>
