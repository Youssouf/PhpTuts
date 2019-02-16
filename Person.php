<?php

/**
 * Description of Person
 *
 * @author yss
 */
class Person {
    public $firstName;
    public $lastName;
    public $gender;
    function __construct($firstName, $lastName, $gender = "f") {
        
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }




    //put your code here
}

$person = new Person();

?>
