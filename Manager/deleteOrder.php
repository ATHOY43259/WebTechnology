<?php
require("connection.php");
$conn = getConnection();
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM food_order WHERE o_id = $id";
    $result = $conn->query($sql);
    header("location: orderView.php");
}
?>