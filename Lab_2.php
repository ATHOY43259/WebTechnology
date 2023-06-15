<?php 
 if(isset($_POST["submit"])){

  $filename = $_FILES['filename']['name'];
  $tmp_loc = $_FILES['filename']['tmp_name'];

  $uploc ='_FILES/';

  if(!emty($filename)){
    move_uoload_file($tmp_loc,$uploc.$filename);
  }else{
    echo 'Select a file';
  }
 }
?>

<from action="upload.php" method="POST" enctype="multipart/form-data">
   Select File
   <input type="file"  name="filename"><br><br>
   <input type="submit" value="Upload" name="submit">
   </from>