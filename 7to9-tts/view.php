<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3" width="50%">
        <?php
            include("connect.php");
            $query="select * from students";
            $run=mysqli_query($conn,$query);
            $row=mysqli_num_rows($run);
            if($row>0){
        ?>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
            while($data = mysqli_fetch_array($run)){
                echo "
                    <tr>
                        <td>$data[0]</td>
                        <td>$data[1]</td>
                        <td>$data[2]</td>
                        <td>
                        <a href='update.php?id=$data[0]&name=$data[1]&email=$data[2]'>Update</a>
                        </td>
                    </tr>

                ";
            }
            }
        ?>

    </table>
</body>
</html>