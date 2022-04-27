<?php
class Aspirant extends Student
{
    public $scientificWork;

    public function __construct($firstName, $lastName, $group, $mark, $scientificWork)
    {
        parent::__construct($firstName, $lastName, $group, $mark);

        $this->scientificWork = $scientificWork;
    }

    public function getScholarship()
    {
        if ($this->mark === 5) {
            $scholarship = 200;
        } else if ($this->mark < 5 && $this->mark >= 0) {
            $scholarship = 180;
        } else {
            $error = "The value is not true";
            return print_r($error);
        }
        return print_r('Aspirant\'s scholarship: ' . $scholarship);
    }
}
