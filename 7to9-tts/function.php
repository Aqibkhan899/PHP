
<!-- local scopes -->
<?php
    function test(){
        $x = 10;
        echo $x;
    }
    test();
?>

<!-- global scopes -->
<?php
    $y = 5;
    function testsec(){
        echo $y; // won't work $y is out of scope
    }
    //testsec();


    $z = 15;
    function testthree(){
        global $z;
        echo $z;
    }
    testthree();
?>

<!-- static scope -->
 <?php
    function counter(){
        static $count = 0;
        $count++;
        echo $count . "<br>";
    }
    counter();
    counter();
    counter();
    counter();
    counter();
    counter();
 
 ?>

 <!-- Super globals -->
  <!-- Examples
    $_POST
    $_GET
    $_REQUEST
    $_COOKIE
    $_FILES
    $_ENV
    $_SESSION
    $_SERVER
  
  -->