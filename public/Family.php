<?php

    interface NameInterface
    {
        public function setFirstName($firstName);
        public function getFirstName();
        public function setSurname($surname);
        public function getSurname();
    }

    class Family extends CheeseLovers implements NameInterface {

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
        $familyWallace = new Family( '','Wallace'),
        $familyLennards = new Family('','Lennards')
    );

    function getAllFamilyNames(array  $families) {
        foreach ($families as $family) {
            echo '<li>'. $family->surname . ' family </li>';
        }
    }