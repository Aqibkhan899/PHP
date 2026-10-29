<?php
include("connect.php");
$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="POST">
        <input type="text" name="name" value="<?php echo $name ?>" placeholder="Enter your name">
        <input type="email" name="email" value="<?php echo $email ?>" placeholder="Enter your email">
        <input type="submit" value="update" name="update">
    </form>
</body>
</html>
<?php
    include("connect.php");
    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $query="update students set name='$name', email='$email' where id='$id'";
        $run=mysqli_query($conn,$query);
        if($run){
            echo "<script>alert('update students successfully added')</script>";
        }else{
            echo "<script>alert('update failed')</script>";
        }
    }

?>
