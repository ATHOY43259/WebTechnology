<?php 
require("connection.php");
$conn = getConnection();
$sql = "SELECT * FROM member";
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
    <h2 style=text-align:center>Member List</h2>
    <table id="member" border=1>
		<tbody>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th colspan="2">Action</th>
			</tr>
			<?php 
				if($result->num_rows > 0){
					while($data = $result->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $data["m_id"]; ?></td>
					<td><a href="readMember.php?id='<?php echo $data["m_id"]; ?>'"><?php echo $data["name"]; ?></a></td>
					<td><?php echo $data["phone"]; ?></td>
					<td><?php echo $data["address"]; ?></td>
					<td><a href="editMember.php?id='<?php echo $data["m_id"]; ?>'"><button>Edit</button></a></td>
					<td><a href="deleteMember.php?id='<?php echo $data["m_id"]; ?>'"><button>Delete</button></a></td>
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


