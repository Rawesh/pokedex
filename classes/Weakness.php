<?php 

class Weakness {

	private $energyType; // only acces in the same class
	private $value;

	public function __construct($energyType, $value) {
		$this->setEnergyType($energyType); //energytype
		$this->setValue($value); // weaknessvalue of energytype
	}

	// call this function from other class to acces the private variable
	public function getEnergyType(){
		return $this->energyType;
	}

	// call this function from other class to acces the private variable
	public function getValue(){
		return $this->value;
	}

	// call this function from other class to set value private variable
	public function setEnergyType($energyType){
		$this->energyType = $energyType;
	}

	// call this function from other class to set value private variable
	public function setValue($value){
		$this->value = $value;	
	}
}