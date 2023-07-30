<?php
require("connection.php");
$conn = getConnection();
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM food_order WHERE o_id = $id";
    $result = $conn->query($sql)->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order</title>
</head>
<body>
    <table border=1>
        <tbody>
            <tr>
                <th>Food Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            <tr>
                <td><?php echo $result["food_name"] ?></td>
                <td><?php echo $result["quantity"] ?></td>
                <td><?php echo $result["price"] ?></td>
            </tr>
        </tbody>
    </table>
    
        <a href="orderView.php"><button>Go Back</button></a>
    
</body>
</html>