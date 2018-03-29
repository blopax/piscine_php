#!/usr/bin/php
<?php

function ft_weekday_check($str)
{
	return (preg_match('/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)$/', $str));
}

function ft_day_check($str)
{
	return (preg_match('/^(([1-9])|([1-2][0-9])|(3[01]))$/', $str));
}

function ft_month_check($str)
{
	return (preg_match('/^([Jj]anvier|[Ff]évrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]oût|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre)$/', $str));
}

function ft_year_check($str)
{
	return (preg_match('/^([0-9]{4})$/', $str));
}

function ft_hour_min_sec_check($str)
{
	return (preg_match('/^([0-1][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/', $str));
}

if ($argc > 1)
{
	$array = explode(' ', $argv[1]);

	if (count($array) != 5)
	{
		echo "Wrong Format\n";
		exit();
	}

	if (!(ft_weekday_check($array[0]) &&
			ft_day_check($array[1]) &&
			ft_month_check($array[2]) &&
			ft_year_check($array[3]) &&
			ft_hour_min_sec_check($array[4])))
	{
		echo "Wrong Format\n";
		exit();
	}

	$month = array(1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin",
		7 => "juillet", 8 => "août", 9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre");

	$array[2] = array_search(lcfirst($array[2]), $month);

	$hour = explode(':', $array[4]);
	date_default_timezone_set('Europe/Paris');
	$result = mktime($hour[0], $hour[1] ,$hour[2], $array[2], $array[1], $array[3]);

	echo "$result\n";
}
?>
