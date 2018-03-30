<?php
echo "bob";
print_r($_SERVER);
if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitsponeys")
{
	$img = base64_encode(file_get_contents('../img/42.png'));
	echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,$img'>\n</body></html>\n";
}
else
{
	echo "<html><body>Cette zone est accessible uniiquement aux membres du site</body></html>";
?>
