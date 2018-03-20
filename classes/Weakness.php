<?php 

class Weakness {

	public $energyType;
	public $value;

	public function __construct($energyType, $value) {
		$this->energyType = $energyType; //energytype
		$this->value = $value; // weaknessvalue of energytype
	}
}