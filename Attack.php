<?php 
class Attack{

public $attack;
public $damage;

	public function __construct($attack, $damage) {
		$this->attack = $attack; // attack
		$this->damage = $damage; // attack value
	}
}