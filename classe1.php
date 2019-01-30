<?php
class Monster{
	private $name;
	private $strength;
	private $life;
	
	//private $type;
	private $type;
    
    //pour la fonction du constructeur on met toujours le double underscore
	//function __construct(){
		//$this->color = 'pink';
	//}
    //pour nos fonctions en php on ne met ni la portée ni le type de retour
	function  getName(){
		//return $this->name;
		return $this->name;
	}
	function setName ($name){
		$this->name = $name;
	}

	function  getStrength(){
		return $this->strength;
	}
	function setStrength ($strenth){
		$this->strength = $strenth;
	}

	function  getLife(){
		return $this->life;
	}
	function setLife ($life){
		$this->life = $life;
	}

	function  getType(){
		return $this->type;
	}
	function setType ($type){
		$this->type = $type;
	}
}

//$monster1 = new Monster();
//$monster1->setColor('vert');
//$monster1->lastName = 'Bodoi';

//$monster2 = new Monster();
//$monster2->getColor();

//var_dump($monster1, $monster2);
