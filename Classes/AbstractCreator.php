<?php

namespace Person\Classes;


abstract class AbstractCreator{

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
    
    abstract static function create (string $gender, int $age, int $height, int $weight, string $hairColor, string $hairLength, string $beard, string $eyeColor, bool $glasses, float $feetSize): Person;
}

?>
