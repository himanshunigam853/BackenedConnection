    <?php

$conn = mysqli_connect('localhost','root','','jobform');

// Connection Check
    // if($conn){
    //     echo("connection successful");
    // }else{
    //     echo("connection not successful");
    // }


    $sel="SELECT* FROM jobdata";
    $res=mysqli_query($conn,$sel);

?>

<!Doctype html>
<head>
    <title> Show data Table  </title>
</head>
<!-- <style>
    table{
        border:2px solid black;
        border-collapse:collapse;
    }
</style> -->
<body>
    <table border="1" style="border-collapse:collapse;" width="20px">
        <tr>
            <th>ID</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Technology</th>
            <th>Mobile</th>
            <th>Experience</th>
            <th>Resume</th>
            <th>Message</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            while($result = mysqli_fetch_array($res,MYSQLI_BOTH)){
        ?>
        <tr>
            <!-- <td></td> -->
            <td><?php echo $result["id"] ?></td>
            <td><?php echo $result["first_name"]?></td>
            <td><?php echo $result["last_name"] ?></td>
            <td><?php echo $result["email"] ?></td>
            <td><?php echo $result["password"] ?></td>
            <td><?php echo $result["technology"] ?></td>
            <td><?php echo $result["mobile"] ?></td>
            <td><?php echo $result["experience"] ?></td>
            <td><?php echo $result["resume"] ?></td>
            <td><?php echo $result["message"] ?></td>
            <td><a href="editdata2.php?editID=<?php echo $result["id"] ?>">Edit</a></td>
            <td><a href="">Delete</a></td>
          
        </tr>
       
        <?php
            }
        ?>
    </table>

</body>
</html>