<?PHP
	session_start();
	include("is_admin.php");
	if (!file_exists("private"))
	{
		if (mkdir("private") === FALSE)
		{
			echo "ERROR1\n";
			header("Location: index.php");
			return ;
		}
	}
	if ($_GET["login"] === "" || is_admin($_SESSION["logged_on_user"]) === FALSE)
	{
		echo "ERROR3\n";
		header("Location: index.php");
		return ;
	}
	$str_file = file_get_contents("private/passwd");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if ($file[$i]["login"] === $_GET["login"])
		{
			$file[$i]["admin"] = 0;
			file_put_contents("private/passwd", serialize($file));
			header("Location: index.php?list_user=1");
			return ;
		}
		$i++;
	}
	header("Location: index.php");
?>
