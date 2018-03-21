<?php 

class EnergyType {

	//static
	const FIRE = 'Fire';
	const LIGHTNING = 'Lightning';
	const WATER = 'Water';
	const FIGHTING = 'Fighting';

	public $type;

	public function __construct($type) {
		$this->type = $type; // energytype
	}
}