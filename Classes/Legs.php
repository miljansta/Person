<?php

namespace Person\Classes;


class Legs implements LegsInterface {

    protected $feetSize;

    /**
    * Legs constructor
    * @param float $feetSize
    */

    function __construct(float $feetSize)
    {
        $this->feetSize = $feetSize;
    }

    public function walk() {

    }

    public function jump() {

    }

    public function run() {

    }

}