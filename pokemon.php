<?php 

class pokemon {

	public $name;

	public $energyType;

	public $hp;

	public $attacks;

	public $weakness; // value = x 1,5 <- pikachu, value = 2 <- Charmeleon 

	public $resistance; // value = 20 <- pikachu, value = 10 <- Charmeleon

	public function __construct($name, $energyType, $hp, $attacks, $weakness, $resistance){

		$this->name = $name;
		$this->energyType = $energyType;
		$this->hp = $hp;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;

	}

	public function __toString() {

        return json_encode($this);
    }

    // pikachu attacks with elektric ring, damage of the attack is = 50hp, but it is the resistance of charmeleon with 10 hp. The damage is now 50hp - 10hp = 40hp damage
    public function hpCharmeleon(){

    	$this->hp = 60 - 40;
    	print_r('<pre>'. 'Charmeleon hp :' . $this->hp . '</pre>');
    }

    // charmeleon attacks with flare, damage of the attack is = 30hp, but it is the weakness of pikachu that multiply the damage with 1.5. The damage is now 30hp x 1.5 = 45hp damage
    public function hpPikachu(){

    	$this->hp = 60 - (30 * 1.5);
    	print_r('<pre>'. 'Charmeleon hp :' . $this->hp . '</pre>');
    }
 
} 