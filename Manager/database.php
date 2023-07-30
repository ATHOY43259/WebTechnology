<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manager Dashboard</title>

		
</head>
<body>

	<h2 style=text-align:center>Manager Dashboard</h2>

	<h3>Member List</h3>
	<form action="memberController.php" method="POST">
		<table>
			<tr>
				<td>
					Name:
				</td>
                 <td>
                 	<input type="text" placeholder="Enter Your Name" name="name">
                 </td>	

			</tr>
			<tr>
				<td>
					Phone Number:
				</td>
				<td>
					<input type="number" placeholder="+880" name="phone">
				</td>
			</tr>
			<tr>
				<td>
					Address:
				</td>
				<td>

					<textarea name="address"></textarea>
				</td>
			</tr>
		</table>
		<input type="submit" value="Insert"> 
	</form><br>
	<a href="memberView.php"><button>Member List</button></a>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h3>Order List</h3>
	<form action="orderController.php" method="POST">
	
		<table>
			<tr>
				<td>
					Food Name:
				</td>
                 <td>
                 	<input type="text" placeholder="Whitch Food you want" name="foodName">
                 </td>	

			</tr>
			<tr>
				<td>
					Quantity:
				</td>
				<td>
					<input type="Number" placeholder="Enter your food Quantity" name="quantity">
				</td>
			</tr>
			<tr>
				<td>
					Price:
				</td>
				<td>
                    <input type="Price" placeholder="Insert Price" name="price">
				</td>
			</tr>
		</table>
		<input type="submit" value="Insert"> 
	</form><br>
	<a href="orderView.php"><button>Order List</button></a>

</body>
</html>




