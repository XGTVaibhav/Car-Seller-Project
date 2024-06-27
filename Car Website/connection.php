<?php
   $severname = "localhost";
   $username = "root";
   $password = "";
   $dbname = "cars";

   $conn = mysqli_connect($severname,$username,$password,$dbname);
   if($conn){
//    echo "connection okay";
   }
   else{
     echo "connection fail";
   }
?>