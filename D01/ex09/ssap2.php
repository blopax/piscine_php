#!/usr/bin/php
<?php
if ($argc > 1)
{
	$i = 1;
	$str = "";
	while ($i < $argc)
	{
		$str= $str." "."$argv[$i]";
		$i++;
	}
	$array = array_filter(explode(' ', $str));
	sort($array, SORT_STRING | SORT_FLAG_CASE);
	print_r($array);

probleme pour mots qui melqngent caracteres

	foreach ($array as $value)
	{
		if (is_
		echo "$value\n";
	$result = strcasecmp("toto", "XXX");
	echo $result;
	echo "\n";
	$result = strcmp("XXX", "194");
	echo $result;
	echo "\n";
	$result = strcasecmp("194", "42");
	echo $result;
	echo "\n";
	$result = strcmp("42", "##");
	echo $result;
	echo "\n";
	$result = strcasecmp("##", "_hop");
	echo $result;
	echo "\n";
}
?>
