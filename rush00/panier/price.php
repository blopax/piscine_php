<?PHP
function price($product, $nb)
{
	if (!file_exists("products/private/products"))
		return 0;
	$file = unserialize(file_get_contents("products/private/products"));
	foreach ($file as $elem)
	{
		if ($elem["product"] === $product)
			return ($nb * $elem["price"]);
	}
	return 3;
}
?>
