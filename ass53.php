
<?php

class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function display() {
        echo "Name: " . $this->name . "<br>";
    }
}

class Student extends Person {
    private $course;

    public function __construct($name, $course) {
        parent::__construct($name);
        $this->course = $course;
    }

    public function displayStudent() {
        echo "Student Name: " . $this->name . "<br>";
        echo "Course: " . $this->course . "<br>";
    }
    
    public function display() {
        echo "Student Name: " . $this->name . "<br>";
        echo "Course: " . $this->course . "<br>";
    }
}

$person = new Person("Mohit");
echo "Person: ";
$person->display();

echo "<br>";

$student = new Student("prasad", "Computer Science");
$student->displayStudent();

echo "<br>";
$student->display();

?>

