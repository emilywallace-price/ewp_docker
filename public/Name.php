<?php

    class Name extends CheeseLovers implements NameInterface {

        //  Properties are set at the top of the class as variables
        public $firstName;
        public $surname;

        public function __construct($firstName, $surname){
            $this->setFirstName($firstName);
            $this->setSurname($surname);
        }

        function setFirstName($firstName ) {
            return $this->firstName = $firstName;
        }

        function getFirstName() {
            return $this->firstName;
        }

        public function setSurname($surname) {
            return $this->surname = $surname;
        }

        public function getSurname() {
            return $this->surname;
        }
    }

    $families = array(
        $familyWallace = new Name( '','Wallace'),
        $familyLennards = new Name('','Lennards')
    );

    function getAllFamilyNames(array  $families) {
        foreach ($families as $family) {
            echo '<li>'. $family->surname . ' family </li>';
        }
    }