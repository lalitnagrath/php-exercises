<?php
    class Employee extends Person{
        public $jobTitle;
        Public function __construct($jobTitle,$firstName,$lastName,$gender='f'){
            $this->jobTitle = $jobTitle;

        parent::__construct($firstName, $lastName, $gender);
        }
        public function getJobTitle(){
            return $this->jobTitle;
        }
    }

    class Person{
        public $firstName;
        public $lastName;
        public $gender;

       public function __construct($firstName,$lastName,$gender){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
       } 

       public function sayHello(){
           return "Hello my Name is " . $this->firstName . ' ' . $this->lastName;
       }
       public function Gender(){
           return "Gender is " . $this->gender;
       }

    }

    $Lalit =new Employee('Backend Developer','Lalit','Nagrath','M');
    echo $Lalit ->getJobTitle();
    echo "\n";
    echo $Lalit->Gender(). ' '. $Lalit->sayHello();

    echo "\n";


?>