<?php 

class Pokemon  {

	public $name; // pokemon name
	public $energyType; // must be a object of class EnergyType
	private $hp; // hitpoints
	public $attacks; // must be attacks
	public $weakness; // pokemon weakness and value of weakness
	public $resistance; // pokemon resistance and value of risistance

	// gets properties of class to string
	public function __toString() {

        return json_encode($this);
    }

    public function getHp(){
        return $this->hp;
    }

    public function setHp($hp){
        $this->hp = $hp;
    }

    // returns a pokemon and the attack of the pokemon
    public function attack($attack, $target){

    	//pokemon and the attack
    	echo $this->name . ": ";
    	print_r($attack->attack . " | Damage= " . $attack->damage);
    	echo '<pre>';

    	echo "!TARGET!:";
    	echo "<pre>";
    	//target
    	echo $target->name . " Hitpoints before attack: " . $target->hp;
    	echo '<pre>';

        $damage = $attack->damage;

    	//calculate weakness and resisitance
    	if ($this->energyType->type == $target->weakness->getEnergyType()->type) { // get value of private variable 
    		// calculate the damage when it is the weakness
    		$damage = $attack->damage * $target->weakness->getValue(); // get value of private variable 

    		print_r($target->resistance->energyType->type . " is the weakness of " . $target->name . " the damage multiplies with " . $target->weakness->getValue()); // get value of private variable
    		echo "<pre>";

    	} elseif($this->energyType == $target->resistance->energyType){

    		//calculate the resistance when it is resistance
    		$damage = $attack->damage - $target->resistance->value;

    		print_r($target->resistance->energyType->type . " is the resistance of " . $target->name . " the damage value counts down with " . $target->resistance->value);
    		echo "<pre>";

    	}

        $target->setHp($target->hp - $damage);
    	
    	print_r($target->name . " hp after attack: " . $target->hp);
    }
} 