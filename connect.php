<?php
    $host="localhost";
    $user="root";
    $password="";
    // $host="localhost";
    // $user="id12828617_user";
    // $password="8yyYx*GaJLcKBbwi";
     
    $conn=mysqli_connect($host,$user,$password,'ecom');
    if(!$conn)
     { 
         echo "database error".mysqli_error();
     }
    
?>