<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("r42ii9gualwp7i1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "lymr0r44gcueussj", "pprn5zf6pol7k9nj", "zv2pdtowf7z5033j");
// SQL query to fetch information of registerd users and finds user match.
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT username from login where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>