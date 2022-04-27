<?php
include "class/Student.php";
include "class/Aspirant.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $aspirant = new Aspirant('Ivan', 'Veresen', '123', 5, 'Scientific work');
    $student = new Student('Oleg', 'Hrinko', '13', 4);
    $students = [$student, $aspirant];

    foreach ($students as $item) {
        $item->getScholarship();
        echo '<br />';
    }
    ?>
</body>

</html>