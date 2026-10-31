<?php
    include("connect.php");
    $id=$_GET['id'];
    $query="delete from students where id='$id'";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "<script>
            alert('Data Deleted');
            window.location.href='view.php';
        </script>";
    }else{
        echo "<script>alert('data hasnt been deleted! ')</script>";
    }

?>