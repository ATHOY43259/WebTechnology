
<?php
 
  echo 'Information : ' , "<br>" , "<br>" ;

 if(!empty($_POST['fname'])) echo $_POST['fname'] , "<br>";
 else echo 'Empty' , "<br>";
  if(!empty($_POST['lname'])) {
  	echo $_POST['lname'] ,"<br>" ;

  }
 else echo 'Empty' , "<br>" ;
  if(!empty($_POST['mobile'])) echo $_POST['mobile'] , "<br>" ;
 else echo 'Empty' , "<br>";
  if(!empty($_POST['pass'])) echo $_POST['pass'] , "<br>" ;
 else echo 'Empty' , "<br>";
 if(!empty($_POST['cpass'])) echo $_POST['cpass'] , "<br>" ;
 else echo 'Empty' , "<br>";
 if(!empty($_POST['mail'])) echo $_POST['mail'] , "<br>" ;
 else echo 'Empty' , "<br>";
 if(!empty($_POST['gender'])) echo $_POST['gender'] , "<br>" ;
 else echo 'Empty' , "<br>";
 if(!empty($_POST['dob'])) echo $_POST['dob'] , "<br>" ;
 else echo 'Empty' , "<br>";

 if(!empty($_POST['cpass']) && !empty($_POST['cpass'])){
 	if($_POST['cpass']==$_POST['pass']) echo 'Password matched' , "<br>" ;
 	else echo 'Password didnot matched' , "<br>" ;
 } 

 else echo 'Password not given' , "<br>";
?>