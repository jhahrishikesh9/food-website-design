<?php


// connecting the page with database localhost
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection successful";
}
else{
    echo "unsuccessful";
}

mysqli_select_db($con, 'restuarant');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query = "insert into userinfodata(name, email, phone, comment)
values('$name', '$email', '$phone', '$comment') ";

mysqli_query($con, $query);
header('location: index.php');



?>