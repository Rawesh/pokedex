<?php 

class Pokemon  {

	public $name; // pokemon name
	public $energyType; // must be a object of class EnergyType
	public $hp; // hitpoints
	public $attacks; // must be attacks
	public $weakness; // pokemon weakness and value of weakness
	public $resistance; // pokemon resistance and value of risistance


	public function __toString() {

        return json_encode($this);
    }

} 