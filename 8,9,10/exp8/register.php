<?php
$nameErr=$emailErr=$passErr="";
$name=$email=$password="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

if(empty($_POST["name"]))
$nameErr="Name required";
else
$name=$_POST["name"];

if(empty($_POST["email"]))
$emailErr="Email required";
else{
$email=$_POST["email"];
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
$emailErr="Invalid email";
}

if(empty($_POST["password"]))
$passErr="Password required";
else{
$password=$_POST["password"];
if(strlen($password)<6)
$passErr="Min 6 characters";
}

if($nameErr=="" && $emailErr=="" && $passErr==""){
echo "<h3 style='color:green;'>Registration Successful</h3>";
}
}
?>

<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>

<h2>Registration Form</h2>

<form method="post">

Name: <input type="text" name="name">
<span style="color:red"><?php echo $nameErr;?></span><br><br>

Email: <input type="text" name="email">
<span style="color:red"><?php echo $emailErr;?></span><br><br>

Password: <input type="password" name="password">
<span style="color:red"><?php echo $passErr;?></span><br><br>

<input type="submit" value="Register">

</form>

</body>
</html>