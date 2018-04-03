<?PHP
	session_start();
	$_SESSION["panier"][$_GET["name"]]++;
	header("Location: ../index.php?panier=1");
?>
