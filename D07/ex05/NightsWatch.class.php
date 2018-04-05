<?php

class NightsWatch implements IFighter {
	private $_nightsWatch = [];
	
	public function recruit($person) 
	{
		$this->nightsWatch[] = $person;
	}

	public function fight()
	{
		foreach ($this->nightsWatch as $member)
		{
			if ($member instanceof IFighter)
				$member->fight();
		}
	}
}
?>
