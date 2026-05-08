<?php


echo "<hr><h2> Employee Salary (Private)</h2>";

class Employee {
    
    private $salary;


    public function __construct($salary) {
        $this->salary = $salary;
    }

   
    public function getSalary() {
        return $this->salary;
    }

    public function printSalary() {
        echo "Employee Salary: Rs " . number_format($this->salary, 2) . "<br>";
    }
}


$emp = new Employee(75000);
$emp->printSalary();
echo "Using getSalary() method: Rs " . $emp->getSalary() . "<br>";
