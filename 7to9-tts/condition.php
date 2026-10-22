<?php
$age = 20;

if($age > 18){
    echo "you are eligible to vote. <br>";
}else{
    echo "not eligible";
}


$marks = 75;
if($marks >= 90){
    echo "Grade A+ <br>";
}elseif($marks >= 80){
    echo "Grade A <br>";
}elseif($marks >= 70){
    echo "Grade B <br>";
}else{
    echo "Failed";
}


$day = "Friday";
switch($day){
    case "Monday":
    echo "Today is Monday <br>";
    break;
    case "Tuesday":
    echo "Today is Tuesday <br>";
    break;
    case "Wednesday":
    echo "Today is Wednesday <br>";
    break;
    default:
    echo "Some other day";
}


$num = 17;
echo ($num >= 18) ? "Adult <br>" : "Minor <br>";



?>