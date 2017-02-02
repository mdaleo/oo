<?php

namespace Novo;
use Novo\Users\Person;

class Business
{

	protected $staff;
	
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}
	
	public function hire(Person $person)
	{
		$this->staff->add($person);
	}
}