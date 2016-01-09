<?php

class Person {
	
	protected $name;
	private $age;
	var $education;

	public function __construct($name)
	{
		$this->name = $name;
	}

   public function setName($name)
   {
   	  $this->name = $name;
   }


   public function getName()
   {
   	return $this->name;
   }
   public function setage($age)
   {
   	$this->age = $age;
   }
   public function getage(){
   return $this->age;
}

   public function getDetails()
   {
   	 echo $this->getName();
   	 echo $this->getage();

   }
}


class Child extends Person
{
	var $scholling;

	public function __construct($name, $scholling)
	{
		Parent::__construct($name);
		$this->scholling = $scholling;
	}

	public function getage()
	{
		return Parent::getage().' years';
	}

	public function setScholling($scholling)
	{
		$this->scholling = $scholling;
	}

	public function getScholling()
	{
		return $this->scholling;
	}

	public function getDetails()
	{
		Parent::getDetails();
		echo $this->getScholling();
	}
}



$p = new Child('dileep', 'Holy city');

$p->setName('sunil');

$p->setage('24');

$p->getDetails();
echo '<br/>';


$p1 = new Person('Lalit');


$p1->setage('24');
echo $p1->getName();
echo $p1->getage();
$p1->getDetails();
