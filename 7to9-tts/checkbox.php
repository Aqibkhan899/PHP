<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter name"> <br>
        HTML: <input type="checkbox" name="course[]" value="HTML"> <br>
        CSS: <input type="checkbox" name="course[]" value="CSS"><br>
        JavaScript: <input type="checkbox" name="course[]" value="JS"><br>
        BootStrap: <input type="checkbox" name="course[]" value="BS"><br>

        Male: <input type="radio" name="gender" value="male">
        Female: <input type="radio" name="gender" value="female">
        <input type="Submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php
    $conn=mysqli_connect("localhost","root","","checkinst");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $course=$_POST['course'];
        $data=implode(",",$course);
        $gender=$_POST['gender'];
        $query="insert into students(name,selectcourse,gender)values('$name','$data','$gender')";
        $run=mysqli_query($conn,$query);
    }

?>