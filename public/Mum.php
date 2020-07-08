<?php

    class Mum extends Name {
        public $gender;
        public $age;

        public function __construct($surname, $firstName, $gender, $age){
            parent::__construct($firstName, $surname); // reusing the from the parent constructort
            $this->setGender($gender);
            $this->setAge($age);
        }

        function setAge($age) {
            return $this->age = $age;
        }

        function setGender($gender) {
            return $this->gender = $gender;
        }
    }