<?php

class Fighter {

	private $_fighter;
	public function __construct($arg)
	{
		$this->_fighter = $arg;
	}

	public function getName()
	{
		return($this->_fighter);
	}
}

?>
