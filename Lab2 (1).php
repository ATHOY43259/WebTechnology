<?php   

   if(isset($_POST['submit'])){  //isset(var)-> button click check ;
         

   }


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<form action="/output.php" method="post">
     <h1 align = center><u> Registration </u> </h1> <br> <br>

     <b> First Name : <input type="text" name="fname" placeholder="enter name..."> <br> <br>

     <b> Last Name : <input type="text" name="lname" placeholder="enter name..."> <br> <br>

     <b> Mobile : <input type="text" name="mobile" placeholder="enter mobile no.."> <br> <br>

     <b> Password : <input type="password" name="pass"> <br> <br>

     <b> Confirm Password : <input type="password" name="cpass"> <br> <br>

     <b> Mail : <input type="email" name="mail"> <br> <br>

     <b> Gender : <input type="radio" name="gender"  value = Male>
     	<label for = Male> Male </label>
        <input type="radio" name="gender"  value = Female>
     	<label for = Female> Female </label> <br> <br>

     <b> Date of Birh : <input type="date" name="dob"> <br> <br>

     <b> Address : <br> <br> 
     	<textarea rows = "4" cols = "50" name = "description"> </textarea> <br> <br>

     <input type="submit" name=""><br>



 </form>
     	



</body>
</html>