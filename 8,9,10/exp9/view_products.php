<?php include "db.php"; ?>

<h2>Product List</h2>

<?php
$result = $conn->query("SELECT * FROM products");

while($row = $result->fetch_assoc()){
?>

<div style="border:1px solid black; padding:10px; margin:10px;">
<img src="<?php echo $row['image']; ?>" width="100"><br>
<h3><?php echo $row['name']; ?></h3>
<p>₹<?php echo $row['price']; ?></p>
</div>

<?php } ?>