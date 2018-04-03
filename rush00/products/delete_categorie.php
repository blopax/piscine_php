<?PHP
	include("auth.php");
	include("is_admin.php");
	session_start();
	if (!file_exists("private"))
	{
		echo "ERROR1\n";
		header("Location: ../index.php");
		return ;
	}
	if (is_admin($_SESSION["logged_on_user"]) === FALSE)
	{
		echo "ERROR3\n ";
		header("Location: ../index.php");
		return ;
	}
	$str_file = file_get_contents("private/categories");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if ($file[$i]["name"] === $_GET["categorie"])
		{
			array_splice($file, $i, 1);
			file_put_contents("private/categories", serialize($file));
			echo "OK\n";
			header("Location: ../index.php");
			return ;
		}
		$i++;
	}
	echo "ERROR\n";
	header("Location: ../index.php");
?>
