<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";
    
   
    $link=mysqli_connect($servername, $username, $password, $database);
    
   
    if ($link){
        echo" ";
    }else{
        die("Sorry we failed to connect: ");
    }

?>


