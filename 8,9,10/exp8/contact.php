<?php
$nameErr=$emailErr=$msgErr="";
$name=$email=$message="";

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

if(empty($_POST["message"]))
$msgErr="Message required";
else
$message=$_POST["message"];

if($nameErr=="" && $emailErr=="" && $msgErr==""){
echo "<h3 style='color:green;'>Message Sent Successfully</h3>";
}
}
?>

<!DOCTYPE html>
<html>
<head><title>Contact</title></head>
<body>

<h2>Contact Form</h2>

<form method="post">

Name: <input type="text" name="name">
<span style="color:red"><?php echo $nameErr;?></span><br><br>

Email: <input type="text" name="email">
<span style="color:red"><?php echo $emailErr;?></span><br><br>

Message: <textarea name="message"></textarea>
<span style="color:red"><?php echo $msgErr;?></span><br><br>

<input type="submit" value="Send">

</form>

</body>
</html>