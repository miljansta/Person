<?php
namespace Person\Classes;

class Person{
    protected $age;
    protected $gender;
    protected $weight;
    protected $height;

    public $torso;

    /**
     * Person constructor
     * @param TorsoInterface $torso
     */
    function __construct(TorsoInterface $torso)
    {
        $this->torso = $torso;
    }

    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age)
    {
        $this->age = $age;
    }

    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }
    
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param number $height
     */
    public function setHeight(number $height)
    {
        $this->height = $height;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    
    /**
     * @param number $weight
     */
    public function setWeight(number $weight)
    {
        $this->weight = $weight;
    }
}