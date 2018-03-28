#!/usr/bin/php
<?php

	if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$fd = fopen($argv[1], 'r');
	echo $fd;
	$str = "";
    while (($buffer = fgets($fd)) && !feof($fd)) {
        $str = $str.fgets($fd);
	}
	fclose($fd);
	echo "new fd = ";

echo "$str\n";
	$str = '<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title="un lien">Ceci est un lien</a>
<br /><a href=http://www.riven.com> Et ca aussi <img src=wrong.image title="et encore ca"></a>
</body></html>';
preg_replace_callback('/<a.* title="(.*)\"*>/', function ($matches){strtoupper($matches[1]);}, $str);
preg_replace_callback('/<a.*>(.*)<\/a>/', function ($matches){strtoupper($matches[1]);}, $str);


echo "$str\n";

?>
