<?php

class Human {
	public $name;
	public $wantFloor;

	function __construct($name){
		$this->name = $name;
		
	}
}

class Home {
	private $address= "Spb";
	private $entrance = 2;
	private $floors = 3;
	private $flats = 12;
	private $person_list = [];
	private $max_person;

	function __construct()	{
		$this->entrance = $entrance;
		$this->floors = $floors;
		$this->flats = $flats;
		$this->max_person = $max;
	}

	function showApart() {
		echo "Количество квартир: " . $this->flats . "<br>";
	}

	function showAddr()	{
		echo "Адрес дома: " . $this->address;		
	}

	// function showHowPiple()
	// {
	// 	echo "Количество людей: " . $this->;		
	// }

	function addHuman(Human $person){
		if($this->max_person > count($this->person_list)){
			$this->person_list[] = $person;
		} else {
			echo "В доме нет мест<br>";
		}
	}

	function addManyHuman($persons) {
		forech($persons as $person) {
			if ($this->max_person > count($this->person_list)) {
				$this->person_list[] = $person;
			} else {
				echo "В доме нет места для $person->name <br>";
			}
		}
	}
}

$home = new Home('New home');
$home->showApart();
$home->showAddr();
$home->addManyHuman($persons);

$persons = [
	new Human('Человек1', 2),
	new Human('Человек2', 5),
	new Human('человек3', 1)
];





?>