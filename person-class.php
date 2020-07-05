<?php

    class person{
        public $firstName;
        public $lastName;
        public $gender;

        public function __construct($firstName,$lastName,$gender){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->gender = $gender;
            
        }
        public function helloPerson() {
            return "Hello My Name is ". $this->firstName. ' '. $this->lastName;
        }
        public function getGender(){
            return $this->gender;
        }

    }

    $lalit =new person('Lalit','Nagrath','M');

    echo $lalit->helloPerson() . " Gender is ". $lalit->getGender();


?>