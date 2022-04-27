<?php
include "class/Student.php";
include "class/Aspirant.php";

$aspirant = new Aspirant('Ivan', 'Veresen', '123', 5, 'Scientific work');
$student = new Student('Oleg', 'Hrinko', '13', 4);
$students = [$student, $aspirant];

foreach ($students as $item) {
    $item->getScholarship();
    echo '<br/>';
}
