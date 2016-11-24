<?php
     if(isset($_FILES['FileUpload']) && $_POST['submit']== true)
	{
	     $errors = array();
	     $file_name = $_FILES['FileUpload']['name'];
	     $file_size = $_FILES['FileUpload']['size'];
	     $file_tmp = $_FILES['FileUpload']['tmp_name'];
	     $file_type = $_FILES['FileUpload']['type'];
	     $file_ext = strtolower(end(explode('.',$_FILES['FileUpload']['name'])));
	     $extension = "pdf";
	     move_uploaded_file($file_tmp,"uploads/".$file_name);
	     echo "Success.";
	  //   print_r($errors]);
             //print_r($_FILES['FileUpload']);
	}
      if($_POST['request'] == true)
	{
	   //echo "<a href=\"www.google.com\">Click here to visit site</a>";
           //<a href="www.google.com">Google</a>
	     $dir = "uploads";
	     $files1 = scandir($dir,1);
	     //print_r($files1);
	     for($i = 0; $i< (sizeof($files1)-2); $i += 1)
	        {
		   echo "<a href=\"\\filemeta.php?file=$files1[$i]\">$files1[$i]</a><br/>";
//echo <<<HTML
//<a href="localhost/index.php?file=$files1[$i]"> $files1[$i]</a>
//HTML
                }
	}
?>

<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="FileUpload"/>
         <input type="submit" name="submit" value="submit"/>
         <input type="submit" name="request"value="request"/><br/>
      </form>
      
   </body>
</html>
