<?php 

class Resistance {

	public $type;

	public function __construct($type, $value) {
		$this->type = [$type, 'value' => $value];
	}
}