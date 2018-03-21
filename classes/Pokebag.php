<?php 

class PokeBag{

	public $storage;

    // add pokemon
    public function add($pokemon){
    	// sizeof checks the items in the array
		if (sizeof($this->storage) < 10) {
			
			$this->storage[] = $pokemon;
		} else{

			echo "Je pokebag zit vol";
		}
    }

    public function deleteOne($name){
		// loop the array
		for($y=0; $y<sizeof($this->storage); $y++) {
			//check name
			if ($this->storage[$y]->name == $name) {
				
				unset($this->storage[$y]); 
			}
		}
    }

	public function deleteAll(){

		$this->storage = NULL;
    }    

    // show all
	public function showAll() {

        print_r($this->storage);

        if ($this->storage == NULL) {
        	
        	echo "Bag is empty!";
        }
    }
}