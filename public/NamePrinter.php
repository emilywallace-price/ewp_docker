<?php

class NamePrinter
{
    public function printFullName(NameInterface $name)
    {
        return $name->getFirstName() . ' ' . $name->getSurname() . '\'s name was generated with the NamePrinter class and NameInterface';
    }
}

    $janeWallace = new Mum('Day', 'Jane', 'female', 61);
    $testFullName = new NamePrinter();


