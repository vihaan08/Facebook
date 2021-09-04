<?php
$connection = mysqli_connect('localhost','root','','facebookclone');

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];

$check_data = mysqli_query($connection, "SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail'");
$check = mysqli_num_rows($check_data);

if($check > 0){
echo "Email already exist";
}
else{
$input = mysqli_query($connection, "INSERT INTO userdata(id,firstname,lastname,phoneoremail,password) VALUES ('$id','$firstname','$lastname','$phoneoremail','$password')");
if($input){
echo "Signup Successful";
}
else{
echo "Error Occured";
}
}
?>
