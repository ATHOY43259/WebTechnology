<?php
require("connection.php");
$conn = getConnection();
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM member WHERE m_id = $id";
    $result = $conn->query($sql)->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$mid= $_POST['id'];
	$name= $_POST['name'];
	$phone=$_POST['phone'];
	$add=$_POST['address'];

	$sql="UPDATE member set name='$name', phone='$phone', address='$add' WHERE m_id='$mid'";
    $conn->query($sql);
    header("location: memberView.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
</head>
<body>
    <h3>Edit Member Profile</h3>
	<form action="editMember.php" method="POST">
        <input type="text" name="id" value="<?php echo $result["m_id"] ?>" hidden>
		<table>
			<tr>
				<td>
					Name:
				</td>
                 <td>
                 	<input type="text" placeholder="Enter Your Name" value="<?php echo $result["name"] ?>" name="name">
                 </td>	

			</tr>
			<tr>
				<td>
					Phone Number:
				</td>
				<td>
					<input type="number" placeholder="+880" value="<?php echo $result["phone"] ?>" name="phone">
				</td>
			</tr>
			<tr>
				<td>
					Address:
				</td>
				<td>

					<textarea name="address"><?php echo $result["address"] ?></textarea>
				</td>
			</tr>
		</table>
		<input type="submit" value="Update">
	</form><br>
    <a href="memberView.php"><button>Member List</button></a>
</body>
</html>