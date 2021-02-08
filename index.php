<?php
    class shop {
        //attributi
        public $department;
        public $type;
        public $shelf;
        public $stock;

        public function printName(){

            echo "<p>". $this->name."</p>"; 

        }
    }

    //estendo la classe shop, e quindi eredito gli attributi di shop
    class food extends shop{
        public $name;

        //metodo speciale, che viene chiamato automaticamente quando creo un oggetto 
        public function __construct($foodName,$department, $type, $shelf, $stock){
            $this->name = $foodName;
            $this->department = $department;
            $this->type = $type;
            $this->shelf = $shelf;
            $this->stock = $stock;
        }
        
    }

    class drink extends shop{
        public $name;

        public function __construct($drinkName,$department, $type, $shelf, $stock ){

            $this->name = $drinkName;
            $this->department = $department;
            $this->type = $type;
            $this->shelf = $shelf;
            $this->stock = $stock;
        }

    }

    class others extends shop{

        public $name;

        public function __construct($elementName,$department, $type, $shelf, $stock){

            $this->name = $elementName;
            $this->department = $department;
            $this->type = $type;
            $this->shelf = $shelf;
            $this->stock = $stock;
        }

    }


    $bread = new food("pane","alimentari", "cibo", 3, 11);
    $milk = new drink("latte","alimentari", "cibo", 3, 11);
    $piatti = new others("piatti", "non alimentari", "servizi", 2 , 50);

    var_dump($bread);
    var_dump($milk);
    var_dump($piatti);

    $milk->printName();


?>