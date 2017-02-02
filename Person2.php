<?php 


class Person
{
	protected $name;
	public function __construct($name)
	{
		$this->name = $name;
	}

}

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

class Staff
{
	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}
	
	public function add(Person $person)
	{
		$this->members[] = $person;
	}	
	
	public function getMembers()
	{
		return $this->members;
	}
}

$jeff = new Person('Jeff');
$mike = new Person('Mike');

$staff = new Staff([$jeff]);
$business = new Business($staff);

$business->hire($mike);
$business->hire(new Person('James Henry'));

//var_dump($staff);
//var_dump($business);
var_dump($staff->getMembers());