<?PHP
	session_start();
	include ("auth.php");
	if (auth($_GET["login"], $_GET["passwd"]) === TRUE)
	{
		$_SESSION["logged_on_user"] = htmlentities($_GET["login"]);
		echo "OK\n";
		header("Location: index.php");
	}
	else
	{
		$_SESSION["logged_on_user"] = "";
		echo "ERROR\n";
		header("Location: index.php?register=1");
	}
?>
