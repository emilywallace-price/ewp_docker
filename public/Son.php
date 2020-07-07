<?php

    class Son extends Mum {
        public $job;

        public function __construct($firstName, $surname, $gender, $age, $job){
            parent::__construct($firstName, $surname, $gender, $age);
            $this->setJob($job);
        }

        function setJob($job) {
            return $this->job = $job;
        }
    }