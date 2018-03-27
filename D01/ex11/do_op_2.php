#!/usr/bin/php
<?php

function check ($var)
{
	if ($var != '')
		return 1;
	else
		return 0;
}

function ft_epur_str($str)
{
	$array = array_filter(explode(' ', $str), "check");
	print_r($array);
	$str = "";
	foreach ($array as $value)
		$str = $str.$value.' ';
	echo $str;
	$str = substr($str, 0 , -1);
	return $str;
}

if ($argc == 2)
{
	$str = $argv[1];
	$str = str_replace("+", " + ", $str);
	$str = str_replace("-", " - ", $str);
	$str = str_replace("*", " * ", $str);
	$str = str_replace("/", " / ", $str);
	$str = str_replace("%", " % ", $str);
	$str = ft_epur_str($str);
	echo $str;
	$array = explode(' ', $str);
	print_r($array);
	if (count($array) == 3)
	{
		$nb1 = $array[0];
		$op = $array[1];
		$nb2 = $array[2];

		$correct_nb = is_numeric($nb1) *  is_numeric($nb2);
		$correct_op = strcmp($op, "+") * strcmp($op, "-") * strcmp($op, "*") * strcmp($op, "/") * strcmp($op, "%");

		if (!($correct_nb AND ($correct_op == 0)))
		{
			echo "BLA";
			echo "Syntax Error\n";
		}
		else
		{
			switch ($op)
			{
				case "+":
					echo $nb1 + $nb2."\n";
					break;
				case "-":
					echo $nb1 - $nb2."\n";
					break;
				case "*":
					echo $nb1 * $nb2."\n";
					break;
				case "/":
					echo $nb1 / $nb2."\n";
					break;
				case "%":
					echo $nb1 % $nb2."\n";
					break;
			}
		}
	}
	else
		echo "Syntax Error\n";
}
else
	echo "Incorrect Parameters\n";
?>
