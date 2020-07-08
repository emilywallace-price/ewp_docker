<?php

    class Lewis implements LewisInterface
    {
        public static $name = 'Lewis';

        public function eat()
        {
            return Lewis::$name ." loves to eat olives" . self::eatsPizza();
        }

        public static function eatsPizza()
        {
            return " and pizza as a treat! \n";
        }

        public function play()
        {
            return "he plays with all his toys but likes to play with lego the most \n";
        }

        public function sleep()
        {
            return Lewis::$name . " goes to sleep with his favourite cuddly Bunny \n";
        }
    }

