<?php

    class ChocolateException extends Exception
    {
        protected $message = 'NO CHOCOLATE BEFORE BED!';
    }

    class ChiliException extends Exception
    {
        protected $message = 'NO CHILI FOR LEWIS!';
    }

    function feedLewis($food)
    {

        switch ($food)
        {
            case 'chocolate':
                throw new ChocolateException;
            case 'chili';
                throw new ChiliException;
        }

        echo "Lewis will eat {$food} as a snack.";
    }

