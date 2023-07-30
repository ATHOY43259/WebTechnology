<?php 
require("connection.php");
$conn = getConnection();
$sql = "SELECT * FROM food_order";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style=text-align:center>Order List</h2>
    <table id="order" border=1>
		<tbody>
			<tr>
				<th>ID</th>
				<th>Food Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th colspan="2">Action</th>
			</tr>
			<?php 
				if($result->num_rows > 0){
					while($data = $result->fetch_assoc()) {
			?>
				<tr>
				<td><?php echo $data["o_id"]; ?></td>
					<td><a href="readOrder.php?id='<?php echo $data["o_id"]; ?>'"><?php echo $data["food_name"]; ?></a></td>
					<td><?php echo $data["quantity"]; ?></td>
					<td><?php echo $data["price"]; ?></td>
					<td><a href="editOrder.php?id='<?php echo $data["o_id"]; ?>'"><button>Edit</button></a></td>
					<td><a href="deleteOrder.php?id='<?php echo $data["o_id"]; ?>'"><button>Delete</button></a></td>
					
				</tr>
			<?php
				}
			}
			else {
				echo "<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>";
			}
			?>
		</tbody>
	</table>

    <br>
    
    <a href="database.php"><button>Go Back</button></a>
    
    
</body>
</html>