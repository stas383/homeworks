<?php
$count1 = $_GET['count1'];
$count2 = $_GET['count2'];
$count3 = $_GET['count3'];

echo $count1 . $count3 . $count2 . '=';
if ($count2==0 and $count3=='/'){
    echo "на 0 делить нельзя";
}else{
switch ($count3) {
    case '+':
        echo $count1 + $count2;
        break;
    case '-':
        echo $count1 - $count2;
        break;
    case '*':
        echo $count1 * $count2;
        break;
    case '/':
        echo $count1 / $count2;
        break;
}}