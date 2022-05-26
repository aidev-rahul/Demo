<?php
   if(!file_exists("../rahul/test.php")) {
      die("File not found");
   }else {
      $filename = "test1.php"; 
      $file = fopen("../rahul/test.php","r");
      print "Opend file sucessfully";
      
      $filesize = filesize($filename);
      $fileread = fread($file,$filesize);
      print "$fileread";
   }
?>