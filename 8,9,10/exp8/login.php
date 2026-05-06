<?php
$userErr=$passErr="";
$username=$password="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

if(empty($_POST["username"]))
$userErr="Username required";
else
$username=$_POST["username"];

if(empty($_POST["password"]))
$passErr="Password required";
else
$password=$_POST["password"];

if($userErr=="" && $passErr==""){

if($username=="admin" && $password=="123456")
echo "<h3 style='color:green;'>Login Successful</h3>";
else
echo "<h3 style='color:red;'>Invalid Login</h3>";

}
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>

<form method="post">

Username: <input type="text" name="username">
<span style="color:red"><?php echo $userErr;?></span><br><br>

Password: <input type="password" name="password">
<span style="color:red"><?php echo $passErr;?></span><br><br>

<input type="submit" value="Login">

</form>

</body>
</html>