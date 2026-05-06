<?php
session_start();

if(!isset($_SESSION['user'])){
header("location:login.php");
}

echo "Welcome " . $_SESSION['user'];
?>

<br><br>
<a href="logout.php">Logout</a>