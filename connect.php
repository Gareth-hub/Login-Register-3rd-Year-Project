<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
if (!empty($username)){
if (!empty($password)){
if (!empty($email)){
$host = "r42ii9gualwp7i1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$dbusername = "lymr0r44gcueussj";
$dbpassword = "pprn5zf6pol7k9nj";
$dbname = "zv2pdtowf7z5033j";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (username, password, email)
values ('$username', '$password','$email')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
}
?>