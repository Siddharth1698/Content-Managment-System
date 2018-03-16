<?php 

    $db["db_host"] = "localhost";
    $db["db_user"] = "root";
    $db["db_pass"] = "";
    $db["db_name"] = "cms";

  foreach ($db as $key => $value) {       // here key is all the strings for each.
  	define(strtoupper($key), $value);   // toupper is used so that everything is made to be in caps so comparison is secure.
  }


  $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //this makes the connection to database more secure.
  
 
 ?>