<?php


class Person
{
    private $firstName;
    private $lastName;

    public function __construct($first, $last)
    {
        $this->firstName = $first;
        $this->lastName  = $last;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    public function getLastName() {
        return $this->lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    public function toString() {
        return $this->firstName . $this->lastName;
    }
}
/*
$p1 = new Person("Amon","Ra", "M");
$data = array($p1->getFirstName(), $p1->getLastName(), $p1->getGender());
$compressed = serialize($data);
file_put_contents('file.txt', $compressed);
echo nl2br("Successfully Serialized \nDone") ;
*/


//echo serialize($p1->getFirstName());

