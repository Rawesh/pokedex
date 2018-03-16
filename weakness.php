<?php 

class Weakness {

	public $type;

	public function __construct($type, $multiplyDamage) {
		$this->type = [$type, 'multiplyDamage' => $multiplyDamage];
	}
}