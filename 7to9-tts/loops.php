<?php
//while loop
$i = 1;
while($i <= 5){
    echo "Number" . $i . "<br>";
    $i++;
}

//do while
$x = 6;
do{
     echo "Number" . $x . "<br>";
    $x++;
}while($x <= 10);


//for loop
for($y = 11; $y <= 15; $y++){
    echo "Number" . $y . "<br>";
}

//foreach loop
$fruits = array("apple","banana","orange","mango");

foreach($fruits as $fruit){
    echo $fruit . "<br>";
}


$student = array("name" => "Ali", "age" => 21);

foreach($student as $key => $value){
    echo "$key:  $value <br>";
}


?>