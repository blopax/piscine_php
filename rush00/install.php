<?PHP
if (!file_exists("private"))
{
	if (mkdir("private") === FALSE)
		echo "ERROR\n";
}
if (!file_exists("products/private"))
{
	if (mkdir("products/private") === FALSE)
		echo "ERROR\n";
}
$str_file = file_get_contents("private/passwd");
$file = unserialize($str_file);
if (!isset($file[0]))
{
	$file[0]["login"] = "admin";
	$file[0]["passwd"] = hash("whirlpool", "admin");
	$file[0]["admin"] = 2;
	file_put_contents("private/passwd", serialize($file));

	echo "Installation Complete - You can now follow the link : <a href='index.php'>Let's Start</a>";
} else {
	echo "Website already installed. Please go to : index.php";
}
?>
