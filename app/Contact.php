<?php

namespace App;


class Contact
{
	
	protected $name;

	function __construct()
	{
		$this->name = 'Pepe Aguilar';
	}

	public function findByName()
	{
		if($this->name == 'Pepe Aguilar'){
			return $this->name;
		}

		return 'No encontrado';
	}
}