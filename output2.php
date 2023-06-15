<?php
   if(isset($_POST['submit'])) 
   {
    $target="upload/";
    $target_file=$target.basename($_FILES["fileToupload"]["name"]);
    if(move_uploaded_file($_FILES["fileToupload"]["tmp_name"], 
        $target_file))
    {
       echo "The file is upload";
    }
    else
        echo "Sorry, the file is not uploaded";
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fileToupload">
        <input type="submit" name="submit">
    </form>
     
</body>
</html>