#!/usr/bin/php
<?php

function ft_match ($matches)
{
	$str = strtoupper($matches[2]);
	return $matches[1].$str.$matches[3];
}

	if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$fd = fopen($argv[1], 'r');
	$str = "";
    while (($buffer = fgets($fd)) && !feof($fd)) {
        $str = $str.$buffer;
	}
	fclose($fd);

//	$str = preg_replace_callback('/(<a.* title=")(.*)(".*>)/', 'ft_match', $str);
	$str = preg_replace_callback('/(<a.*?>)(.*)(<\/a>)/', 'ft_match', $str);
 

echo "$str\n";

?>
