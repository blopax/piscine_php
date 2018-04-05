<?PHP
function return_admin($login)
{
	if ($login === "")
		return 0;
	$str_file = file_get_contents("private/passwd");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if ($file[$i]["login"] === $login)
			return $file[$i]["admin"];
		$i++;
	}
	return 0;
}
?>
