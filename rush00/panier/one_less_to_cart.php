<?PHP
	session_start();
	if ($_SESSION["panier"][$_GET["name"]] != 0)
		$_SESSION["panier"][$_GET["name"]]--;
	header("Location: ../index.php?panier=1");
?>
