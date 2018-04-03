<?PHP
function auth($login, $passwd)
{
	$str_file = file_get_contents("../private/passwd");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		echo '<script> alert ("'.$file[$i]["login"].'")</script>';
		if ($file[$i]["login"] === $login)
		{
			if ($file[$i]["passwd"] === hash("whirlpool", $passwd))
				return TRUE;
			else
				return FALSE;
		}
		$i++;
	}
	return FALSE;
}
?>
