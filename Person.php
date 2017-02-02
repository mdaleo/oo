<?php 


class Person
{
	private $name;
	private $age;
	public function __construct($name){
		$this->name = $name;
	}

	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		if ($age < 18) {
			throw new Exception("Bae too young");
		}

		$this->age = $age;
	}

}


$john = new Person('John');
$john->setAge(42);
$john->age = 50;

var_dump($john);
var_dump($john->getAge());
