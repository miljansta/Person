<?php

namespace Person\Classes;

class PersonCreator extends AbstractCreator{
    /**
     * Simple Person creator
     * @param int $gender
     * @param int $age
     * @param int $height
     * @param int $weight
     * @param string $hairColor
     * @param string $hairLength
     * @param string $beard
     * @param string $eyeColor
     * @param bool $glasses
     * @param float $feetSize
     * @return Person
     */

    public static function create(string $gender, int $age, int $height, int $weight, string $hairColor, string $hairLength, string $beard, string $eyeColor, bool $glasses, float $feetSize): Person {
        $hands = new Hands();
        $legs = new Legs($feetSize);
        $head = new Head($hairColor, $hairLength, $beard, $eyeColor, $glasses);
        $torso = new Torso($hands, $legs, $head);

        $person = new Person($torso);
        
        $person->setGender($gender);
        $person->setAge($age);
        $person->setHeight($height);
        $person->setWeight($weight);

        return $person;
    }
}