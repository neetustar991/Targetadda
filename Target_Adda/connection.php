<?php

$username = $_POST['username'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$state = $_POST['state'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


// Create connection

$conn = new mysqli('localhost','root','','target_adda');

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into register(username,lastname,email,mobile,state,password,confirmpassword) value(?,?,?,?,?,?,?)");
    $stmt -> bind_param("sssssss",$username,$lastname,$email,$mobile,$state,$password,$confirmpassword);
    $stmt -> execute();
    echo "Register successfully..........";
    $stmt->close();
    $conn->close();

}
?>