<?php

    class Dad extends Mum {
        public function __construct($surname, $firstName, $gender, $age){
            parent::__construct($surname, $firstName, $gender, $age);
        }
    }