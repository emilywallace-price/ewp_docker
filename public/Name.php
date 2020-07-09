<?php

    // the name class extends/uses the content of the CheeseLovers class and uses the NameInterface
    class Name extends CheeseLovers implements NameInterface {

        //  Properties are set at the top of the class as variables
        public $firstName;
        public $surname;

        // the construct method is a magic method and is called when the object gets instantiated
        // and what properties are expected to be passed
        public function __construct($firstName, $surname)
        {
            // uses the setter below to set the value received the method
            $this->setFirstName($firstName);
            $this->setSurname($surname);
        }

        function setFirstName($firstName)
        {
            return $this->firstName = $firstName;
        }

        function getFirstName()
        {
            return $this->firstName;
        }

        public function setSurname($surname)
        {
            return $this->surname = $surname;
        }

        public function getSurname()
        {
            return $this->surname;
        }
    }

    $families = array(
        // instantiating/creating a new object, in this example only defining the surname
        $familyWallace = new Name( '','Wallace'),
        $familyLennards = new Name('','Lennards')
    );

    function getAllFamilyNames(array $families)
        // the array is type hinting to what is being passed through, an array of families
    {
        foreach ($families as $family) {
            echo '<li>'. $family->surname . ' family </li>';
        }
    }