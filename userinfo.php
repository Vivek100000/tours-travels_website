<?php

$conn = mysqli_connect('localhost','root','','departmentinfo');
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

echo "connected successfully \n";
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (username,email,mobile,comment) values('$user','$email','$mobile','$comment')";
if(mysqli_query($conn,$query)){
    echo "\n data inserted successfully";
}
else
{
    echo "Error: ".mysqli_error($conn);
}
header('location:index.php');
?>