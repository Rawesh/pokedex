<?php 

class Attack {

	public $attacks;
	public $damage;

	public function __construct($attack1, $damage_a1, $attack2, $damage_a2) {
		$this->attacks = [$attack1, $attack2];
		$this->damage = [$damage_a1, $damage_a2];
	}
}