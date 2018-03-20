<?php 

class Resistance {

	public $energyType; // EnergyType class
	public $value;

	public function __construct($energyType, $value) {
		$this->energyType = $energyType; //energytype
		$this->value = $value; //resistancevalue of energytype

	}
}