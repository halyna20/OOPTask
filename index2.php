<?php
function leftRotate($str)
{
    $arr = [];

    for ($i = 0; $i < strlen($str); $i++) {
        $left = substr($str, $i) . substr($str, 0, $i);
        array_push($arr, $left);
    }

    return $arr;
}

function rightRotate($str)
{
    $arr = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $right =  substr($str, -$i) . substr($str, 0, -$i);
        array_push($arr, $right);
    }

    return $arr;
}

print_r(leftRotate('abcd'));
echo "<br/>";
print_r(rightRotate('abcd'));
