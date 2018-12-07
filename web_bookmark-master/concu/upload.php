<?php

$source = $_FILES['profile']['tmp_name'];
$dest="./".basename($_FILES['profile']['name']);
move_uploaded_file($source,$dest);
print_r($_FILES)
 ?>

 <!DOCTYPEhtml>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>목록</title>
   </head>
   <body>
     <img src="<?=$_FILES['profile']['name']?>"alt=""/>
     
   </body>
 </html>
