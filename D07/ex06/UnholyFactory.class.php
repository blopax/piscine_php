<?php

class UnholyFactory {
	private $_array = [];
	private $_foot_soldier = 0;
	private $_archer = 0;
	private $_assassin = 0;

	public function absorb($arg)
	{
		if ($arg instanceof Fighter)
		{
			$_fighter = $arg->getName();
			$this->_array[$_fighter] = $arg;
		}
		if ($_fighter === "foot soldier")
		{
			if ($this->_foot_soldier === 0)
			{
				print("(Factory absorbed a fighter of type " . $_fighter . ")" . PHP_EOL);
				$this->_foot_soldier++;
			}
			else
				print("(Factory already absorbed a fighter of type " . $_fighter . ")" . PHP_EOL);
		}
		else if ($_fighter === "archer")
		{
			if ($this->_archer === 0)
			{
				print("(Factory absorbed a fighter of type " . $_fighter . ")" . PHP_EOL);
				$this->_archer++;
			}
			else
				print("(Factory already absorbed a fighter of type " . $_fighter . ")" . PHP_EOL);
		}
		else if ($_fighter === "assassin")
		{
			if ($this->_assassin === 0)
			{
				print("(Factory absorbed a fighter of type " . $_fighter . ")" . PHP_EOL);
				$this->_assassin++;
			}
			else
				print("(Factory already absorbed a fighter of type " . $_fighter . ")" . PHP_EOL);
		}
		else
			print("(Factory can't absorbed this, it's not a fighter)" . PHP_EOL);
	}

	public function fabricate($_fighter)
	{
		if (array_key_exists($_fighter, $this->_array))
		{
			print("(Factory fabricates a fighter of type " . $_fighter . ")" . PHP_EOL);
			return (clone($this->_array[$_fighter]));
		}
		else
		{
			print("(Factory hasn't absorbed any fighter of type " . $_fighter . ")" . PHP_EOL);
			return ;
		}
	}

}


?>
