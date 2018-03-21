<?php 

class Pokemon  {

	public $name; // pokemon name
	public $energyType; // must be a object of class EnergyType
	public $hp; // hitpoints
	public $attacks; // must be attacks
	public $weakness; // pokemon weakness and value of weakness
	public $resistance; // pokemon resistance and value of risistance

	// gets properties of class to string
	public function __toString() {

        return json_encode($this);
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

    	//calculate hp of target
    	$this->calculateHp($target, $this->energyType, $attack->damage);
    }

    public function calculateHp($target, $energyType, $damage){

    	//calculate weakness and resisitance
    	if ($energyType == $target->weakness->getEnergyType()->type) { // get value of private variable
    		
    		// calculate the damage when it is the weakness
    		$weaknessResult = $damage * $target->weakness->getValue(); // get value of private variable 
    		$result = $target->hp - $weaknessResult;

    		print_r($target->resistance->energyType->type . " is the weakness of " . $target->name . " the damage multiplies with " . $target->weakness->getValue()); // get value of private variable
    		echo "<pre>";

    	}elseif($energyType == $target->resistance->energyType){

    		//calculate the resistance when it is resistance
    		$resistanceResult = $damage - $target->resistance->value;
    		$result = $target->hp - $resistanceResult;

    		print_r($target->resistance->energyType->type . " is the resistance of " . $target->name . " the damage value counts down with " . $target->resistance->value);
    		echo "<pre>";

    	}else{
    		// if there is no weakness or resistance then it is the current damage
    		$result = $target->hp - $damage;
    	}
    	
    	print_r($target->name . " hp after attack: " . $result);
    }
} 