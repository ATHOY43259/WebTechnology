<?php
require("connection.php");
$conn = getConnection();
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM member WHERE m_id = $id";
    $result = $conn->query($sql);
    header("location: memberView.php");
}
?>