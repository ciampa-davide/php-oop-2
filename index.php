<?php
    class shop {
        public $department;
        public $type;
        public $shelf;
        public $stock;
    }

    class food extends shop{
        private $name;

        public function __construct($department, $type, $shelf, $stock){

            $this->name = $name;

        }
        
    }

    class drink extends shop{
        private $name;
        
        public function __construct($department, $type, $shelf, $stock ){

            $this->name = $name;

        }
    }

    class other extends shop{
        private $name;

        public function __construct($department, $type, $shelf, $stock ){

            $this->name = $name;

        }

    }

    $milk = new food("alimentari", "cibo", 3, 11);

    var_dump($milk);





?>