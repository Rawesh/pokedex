<?php 
class Attack{

public $attack;
public $damage;

//static
const ELEKTRIC_RING = 'Elektric Ring';
const PIKA_PUNCH = 'Pika Punch';
const FLARE = 'Flare';
const HEAD_BUTT = 'Head butt';

	public function __construct($attack, $damage) {
		$this->attack = $attack; // attack
		$this->damage = $damage; // attack value
	}
}