<?php
require("connection.php");
$conn = getConnection();
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if($name==""|| $phone=="" || $address=="")
    {
        echo "Please Filup the from properly";
    }
    else
    {
        $sql = "INSERT INTO member (name, phone, address) VALUES ('$name', '$phone', '$address')";
    $conn->query($sql);
    header("location: memberView.php");
    } 
       

}
?>