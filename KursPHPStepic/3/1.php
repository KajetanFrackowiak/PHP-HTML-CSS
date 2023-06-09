<?php
class Person {
    public $name, $address, $age;
    function __construct($name, $address, $age) {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }
}
class Employee extends Person {
    public $position, $salary;
    function __construct($name, $address, $age, $position, $salary) {
        parent::__construct($name, $address, $age);
        $this->position = $position;
        $this->salary = $salary;
    }
}
$obj = new Person("Mateusz", "Gdańsk", 30);
$emp = new Employee($obj->name,$obj->address, $obj->age, "Teacher", 2000);
var_dump($emp);
?>