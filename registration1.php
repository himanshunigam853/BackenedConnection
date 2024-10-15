<?php
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['password'];
$e=$_POST['technology'];
$f=$_POST['mobile'];
$g=$_POST['experience'];
$h=$_POST['resume'];
$i=$_POST['message'];

// echo($a);
// echo($b);
// echo($c);
// echo($d);
// echo($e);
// echo($f);
// echo($g);
// echo($h);

$conn=mysqli_connect('localhost','root','','jobform');

if(!$conn){
    echo("connection failed");
}else{
    echo("connection successfull\n");
}
                                                    // Database attribute names
$ins = "INSERT INTO `jobdata` (`first_name`,`last_name`,`email`,`password`,`technology`,`mobile`,`experience`,`resume`,`message`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i') ";

if(mysqli_query($conn,$ins)){
    echo("data inserted");
}else{
    echo("data not inserted");
}

?>