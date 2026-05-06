<?php include "db.php"; ?>

<form method="post">
Name: <input type="text" name="name"><br><br>
Price: <input type="text" name="price"><br><br>
Image URL: <input type="text" name="image"><br><br>
<input type="submit" value="Add Product">
</form>

<?php
if($_POST){
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_POST['image'];

$sql="INSERT INTO products(name,price,image) VALUES('$name','$price','$image')";
$conn->query($sql);

echo "Product Added";
}
?>