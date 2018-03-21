<?php 

class Pikachu extends Pokemon{

	public function __construct($name){		

		$this->name = $name; // name of pokemon
		$this->energyType = new EnergyType(EnergyType::LIGHTNING); // energytype of pokemon
		$this->setHp(60); // hp of pokemon
		$this->attacks =  [new Attack(Attack::ELEKTRIC_RING, 50), new Attack(Attack::PIKA_PUNCH, 50)]; // attacks of pokemon
		$this->weakness = new Weakness(new EnergyType(EnergyType::FIRE), 1.5); //weakness of pokemon
		$this->resistance =  new Resistance(new EnergyType(EnergyType::FIGHTING), 20); // resistance of pokemon
	}

}