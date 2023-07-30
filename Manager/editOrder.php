<?php
require("connection.php");
$conn = getConnection();
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM food_order WHERE o_id = $id";
    $result = $conn->query($sql)->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$oid= $_POST['id'];
	$name= $_POST['food_name'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];

	$sql="UPDATE food_order set food_name='$name', quantity='$quantity', price='$price' WHERE o_id='$oid'";
    $conn->query($sql);
    header("location: orderView.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit order</title>
</head>
<body>
    <h3>Edit Order list</h3>
	<form action="editorder.php" method="POST">
        <input type="text" name="id" value="<?php echo $result["o_id"] ?>" hidden>
	 <table>
			<tr>
				<td>
					Food Name:
				</td>
                 <td>
                 <input type="text" placeholder="Whitch Food you want" value="<?php echo $result["food_name"] ?>" name="food_name">
                 </td>	

			</tr>
			<tr>
				<td>
					Quantity:
				</td>
				<td>
					<input type="Number" placeholder="Enter your food Quantity" value="<?php echo $result["quantity"] ?>"name="quantity">
				</td>
			</tr>
			<tr>
				<td>
					Price:
				</td>
				<td>
                    <input type="Price" placeholder="Insert Price" value="<?php echo $result["price"] ?>"name="price">
				</td>
			</tr>
		</table>
        <input type="submit" value="Update">
		 
	</form><br>
    <a href="orderView.php"><button>Order List</button></a>
</body>
</html>
