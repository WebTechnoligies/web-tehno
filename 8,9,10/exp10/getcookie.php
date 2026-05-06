<?php
if(isset($_COOKIE["user"])){
echo "User: " . $_COOKIE["user"];
}else{
echo "No cookie found";
}
?>