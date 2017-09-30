<?php

namespace Person\Classes;

class Torso implements TorsoInterface {

    /**
     *
     * @var HandsInterface 
     */
    public $hands;
    
    /**
     *
     * @var LegsInterface 
     */
    public $legs;
    
    /**
     *
     * @var HeadInterface 
     */
    public $head;

    /**
     * Torso constructor
     * @param HandsInterface $hands
     * @param LegsInterface $legs
     * @param HeadInterface $head
     */
    function __construct(HandsInterface $hands, LegsInterface $legs, HeadInterface $head) {
        $this->hands = $hands;
        $this->legs = $legs;
        $this->head = $head;
    }

    public function breathe() {

    }

}