<?php

# Module 4 Live Test Exam

// Task 1 Answer
class Person
{

    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce()
    {
        echo "My name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}


$person = new Person("John", 30);
$person->introduce();



// Task 2 Answer:
class Student extends Person
{

    public string $marks;

    public function __construct(string $name, int $age, string $marks)
    {
        parent::__construct($name, $age);

        $this->marks = $marks;
    }

    public function introduce()
    {
        echo "My name is " . $this->name . ", I am " . $this->age . " years old. <br/>";
    }

    public function  calculate_grade_percentage(): string
    {
        return $gradePercentage = ($this->marks / 100) * 100;
        
    }
}

$student = new Student("Robert", 18, "85");

$student->introduce();

$gradePercentage = $student->calculate_grade_percentage();

echo "My grade percentage is {$gradePercentage}\n";