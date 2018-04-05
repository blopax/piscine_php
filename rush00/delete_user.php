<?PHP
	session_start();
	include ("return_admin.php");
	include ("logout.php");
	if (!file_exists("private"))
	{
		if (mkdir("private") === FALSE)
		{
			echo "ERROR1\n";
			header("Location: index.php");
			return ;
		}
	}
	if ($_SESSION["logged_on_user"] === "" || (return_admin($_SESSION["logged_on_user"]) <= return_admin($_GET["login"]) && $_SESSION["logged_on_user"] !== $_GET["login"]))
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
			array_splice($file, $i, 1);
			file_put_contents("private/passwd", serialize($file));
			echo "OK\n";
			if ($_SESSION["logged_on_user"] === $_GET["login"])
				logout();
			header("Location: index.php?list_user=1&login=".$login);
			return ;
		}
		$i++;
	}
	echo "ERROR\n";
	header("Location: index.php");
?>
