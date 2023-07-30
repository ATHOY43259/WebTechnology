<?php 
        if(isset($_POST['submit']))
        {
            if(empty($_POST['name']))
         {
            echo "the name field is empty";
         }
         else
            echo $_POST['name']; 
        }
        
        
     ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>PHP</title>
</head>
<body>

<form action="database.php" method="post">
<h2 style=text-align:center>Manager Login</h2>
<table>
			<tr>
				<td>
					User Name:
				</td>
                 <td>
                 	<input type="text" placeholder="Enter Your Name" name="name">
                 </td>	

			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td><input type="password" placeholder="Enter Password" name="password">
				</td>
      </tr>
      </table>              
 <input type="submit" name="Login">
</form>

</body>
</html>