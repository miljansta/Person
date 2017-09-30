<?php
    use Person\Classes\PersonCreator;
        
    /*
    * This is test for create person;
    */  
    $personCreator = PersonCreator::create('male', 32, 183, 80, 'black', 'short', 'long', 'green', false, 43);
    $personCreator->torso->breathe();
    $personCreator->torso->head->talk();
    $personCreator->torso->legs->run();
?>