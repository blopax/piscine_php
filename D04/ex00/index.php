<?php
session_start();

if (isset($_GET['login']) && isset($_GET['passwd']) && isset($_GET['submit']) && $_GET['submit'] === "OK")
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['password'] = $_GET['passwd'];
}

isset($_SESSION['login']) ? $LOGIN = $_SESSION['login'] : $LOGIN = "";
isset($_SESSION['password']) ? $PASS = $_SESSION['password'] : $PASS = "";

echo "<html><body>
<form method =\"get\" action = \"index.php\">
	Identifiant: <input type=\"text\" name=\"login\" value=\"$LOGIN\" />
	<br />
	Mot de passe: <input type=\"password\" name=\"passwd\" value=\"$PASS\" />
	<input type=\"submit\" name=\"submit\" value=\"OK\" />
</form>
</body></html>";

?>


