#!/usr/bin/php
<?php

function ft_download_image($image_url, $image_file){
	$fp = fopen ($image_file, 'w+');
	$ch = curl_init($image_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_exec($ch);
	curl_close($ch);
	fclose ($fp);
}

if ($argc > 1)
{
	$ch = curl_init($argv[1]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$page = curl_exec($ch);
	curl_close($ch);

	preg_match_all('/<img.*src="([^"]*)"[^>]*>/' ,$page, $matches);
	if (count($matches[1]) != 0)
	{
		$dir = preg_replace('/^(https?:\/\/)/', '', $argv[1]);
		if (!is_dir($dir))
			mkdir($dir);

		foreach ($matches[1] as $IMG)
		{
			if (preg_match('/^(https?:\/\/)/', $IMG) == 1)
				$URL = $IMG;
			else
				$URL = $argv[1].$IMG;
			$img_name = preg_replace('/.*\//', '', $URL);
			if (!is_file($dir.'/'.$img_name))
				touch($dir."/".$img_name);
			ft_download_image($URL, $dir."/".$img_name);
		}
	}
}

?>
