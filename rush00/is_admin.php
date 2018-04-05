<?PHP
function is_admin($login)
{
	if ($login === "")
		return 0;
	$str_file = file_get_contents("private/passwd");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if ($file[$i]["login"] === $login)
		{
			if ($file[$i]["admin"] != 0)
				return TRUE;
		}
		$i++;
	}
	return FALSE;
}
?>
