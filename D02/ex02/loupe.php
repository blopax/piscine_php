#!/usr/bin/php
<?php

function ft_match ($matches)
{
//	echo "BlaBla\n\n";
//	print_r($matches);
	$str = strtoupper($matches[2]);
	return $matches[1].$str.$matches[3];
}

function ft_a_match ($matches)
{
	$matches[0] = preg_replace_callback('/( title=")(.*?)(")/s', 'ft_match', $matches[0]);
	$matches[0] = preg_replace_callback('/(>)(.*?)(<)/s', 'ft_match', $matches[0]);
	return $matches[0];
}

if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$fd = fopen($argv[1], 'r');
	$str = "";
    while (($buffer = fgets($fd)) && !feof($fd)) {
        $str = $str.$buffer;
	}
	fclose($fd);

	$str = preg_replace_callback('/<a(.*?)\/a>/s', 'ft_a_match', $str);

	echo "$str\n";

?>
