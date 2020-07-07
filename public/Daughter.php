<?php

    class Daughter extends Mum {
        public $parent;

        public function __construct($surname, $firstName, $gender, $age, $parent){
            parent::__construct($surname, $firstName, $gender, $age);
            $this->setParent($parent);
        }

        function setParent($parent) {
            return $this->parent = $parent;
        }
    }