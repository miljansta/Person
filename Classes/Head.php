<?php

namespace Person\Classes;

class Head implements HeadInterface {

    protected $hairColor;
    protected $hairLength;
    protected $beard;
    protected $eyeColor;
    protected $glasses;


    /**
     * Head constructor
     * @param string $hairColor
     * @param string $hairLength
     * @param string $beard
     * @param string $eyeColor
     * @param bool $glasses
     */
    function __construct(string $hairColor, string $hairLength, string $beard, string $eyeColor, bool $glasses) {
        $this->hairColor  = $hairColor;
        $this->hairLenght = $hairLenght;
        $this->beard      = $beard;
        $this->eyeColor   = $eyeColor;
        $this->glasses    = $glasses;
    }

    public function think() {

    }

    public function talk() {

    }

    public function sleep() {

    }

}