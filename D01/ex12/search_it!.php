#!/usr/bin/php
<?php
if ($argc > 2)
{
	$flag = 0;
	$i = 2;
	while ($i < $argc)
	{
		$test = explode(':', $argv[$i]);
		if (count($test) == 2)
		{
			if (strcmp($test[0], $argv[1]) == 0)
			{
				$flag = 1;
				$tmp=$test[1];
			}
		//	echo $tmp;
		}
		$i++;
	}
	if ($flag == 1)
		echo $tmp."\n";
}
?>
