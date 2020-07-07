<?php


    class Grandson extends Daughter
    {
        public $smile;

        public function __construct($surname, $firstName, $gender, $age, $parent, $smile){
            parent::__construct($surname, $firstName, $gender, $age, $parent);
            $this->setSmile($smile);
        }

        function setSmile($smile) {
            return $this->smile = $smile;
        }
    }