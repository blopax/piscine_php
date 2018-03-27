#!/usr/bin/php
<?php

if ($argc == 4)
{
	$nb1 = trim($argv[1]);
	$op = trim($argv[2]);
	$nb2 = trim($argv[3]);
	
	$correct_nb = is_numeric($nb1) * is_numeric($nb2);
	$correct_op = strcmp($op, "+") * strcmp($op, "-") * strcmp($op, "*") * strcmp($op, "/") * strcmp($op, "%");

	if (!($correct_nb AND ($correct_op == 0)))
		echo "Incorrect Parameters\n";
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
	echo "Incorrect Parameters\n";
?>
