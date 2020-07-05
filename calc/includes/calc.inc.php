<?php

    class Calc{
        public $no1;
        public $no2;
        public $cal;

        public function __construct($no1,$no2,$cal){
            $this->no1 = $no1;
            $this->no2 = $no2;
            $this->cal = $cal;
        }

        public function calcMethod(){
            switch ($this->cal) {
                case 'add':
                    $result= $this->no1 + $this->no2;
                    break;
                case 'sub':
                    $result= $this->no1 - $this->no2;
                break;

                case 'mul':
                    $result= $this->no1 * $this->no2;
                break;

                default:
                    # code...
                    break;
            }
            return $result;
        }

    }

?>