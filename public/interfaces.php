<?php

    //

    interface LewisInterface
    {
        public function eat();
        public function play();
        public function sleep();
    }

    interface NameInterface
    {
        public function setFirstName($firstName);
        public function getFirstName();
        public function setSurname($surname);
        public function getSurname();
    }