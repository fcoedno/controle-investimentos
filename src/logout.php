<?php
   include("config.php"); 
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");
   }
   mysqli_close($db);
?> 
