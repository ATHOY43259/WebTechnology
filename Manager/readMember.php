<?php
require("connection.php");
$conn = getConnection();
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM member WHERE m_id = $id";
    $result = $conn->query($sql)->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Member</title>
</head>
<body>
    <table border=1>
        <tbody>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            <tr>
                <td><?php echo $result["name"] ?></td>
                <td><?php echo $result["phone"] ?></td>
                <td><?php echo $result["address"] ?></td>
            </tr>
        </tbody>
    </table>
    <button>
        <a href="memberView.php">Go Back</a>
    </button>
</body>
</html>