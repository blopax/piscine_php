<?php

function auth($login, $passwd)
{
	if (!isset($login) && !isset($passwd))
		return FALSE;
	$file = unserialize(file_get_contents("../private/passwd"));
	$passwd = hash('whirlpool', $passwd);
	foreach ($file as $account)
	{
		if ($account['login'] === $login)
		{
			if ($account['passwd'] === $passwd)
				return TRUE;
			else
				return FALSE;
		}
	}
	return FALSE;
}
?>
