<?php 

class Task{
	public $description;
	public $title;

	public $completed = false;
	
	public function complete(){
		$this->completed = true;
	}

	public function __construct($description, $title = '')
	{
		$this->description = $description;
		$this->title = $title;
		//var_dump($description);
	}
}

$task = new Task('Learn OOP');
$task2 = new Task('Task 2', 'Title about bacons');

$task2->complete();

echo "<pre>";
	var_dump($task);
	var_dump($task2);
echo "</pre>";
die;
