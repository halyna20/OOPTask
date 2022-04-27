<?php
class Student
{
    public $firstName;
    public $lastName;
    public $group;
    public $mark;

    public function __construct($firstName, $lastName, $group, $mark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->mark = $mark;
    }

    public function getScholarship()
    {
        if ($this->mark === 5) {
            $scholarship = 100;
        } else if ($this->mark < 5 && $this->mark >= 0) {
            $scholarship = 80;
        } else {
            $error = "The value is not true";
            return print_r($error);
        }
        return print_r('Student\'s scholarship: ' . $scholarship);
    }
}
