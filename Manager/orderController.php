<?php
require("connection.php");
$conn = getConnection();

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $foodname = $_POST["foodName"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    if($foodname==""|| $quantity=="" || $price=="")
    {
        echo "Please Filup the from properly";
        
    }
    else
    {
        $sql = "INSERT INTO food_order (food_name, quantity, price) VALUES ('$foodname', '$quantity', '$price')";
    $conn->query($sql);
    header("location: orderView.php");
    } 

    
}
?>