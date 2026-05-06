<?php
session_start();

if($_POST){

$user=$_POST['username'];
$pass=$_POST['password'];

if($user=="admin" && $pass=="123"){
$_SESSION['user']=$user;
header("location:home.php");
}else{
echo "Invalid Login";
}
}
?>

<form method="post">
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" value="Login">
</form>