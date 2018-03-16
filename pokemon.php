<?php 

class Pokemon  {

	public $name;
	public $energyType;
	public $hp;
	public $attacks;
	public $weakness; // value = x 1,5 <- pikachu, value = 2 <- Charmeleon
	public $resistance; // value = 20 <- pikachu, value = 10 <- Charmeleon


	public function __toString() {

        return json_encode($this);
    }

} 