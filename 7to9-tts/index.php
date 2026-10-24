<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
   // include("connect.php");
   $conn = mysqli_connect("localhost","root","","firstdatabase");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $query="insert into students(name,email)values('$name','$email')";
        $run=mysqli_query($conn,$query);
    }
?>