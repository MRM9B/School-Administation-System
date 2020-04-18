<?php
$email_valid="admin@admin.com";
$password_valid="admin";

  if (($_POST['email']==$email_valid) && ($_POST['password'])==$password_valid) { 
  
    header("location: semestre1class1.php"); // Redirecting To Profile Page 

 } 
  else{ 
    header("location: indexloginn.php"); // Redirecting To Profile Page 
  } 
 
?>