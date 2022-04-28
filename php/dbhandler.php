<?php


          $servername = "sql305.epizy.com";
          $password = "2fCEEZLsvGMfjg";
          $dbname = "epiz_26505636_loginsys";
          $username = "epiz_26505636";
          
          $conn = mysqli_connect($servername, $username, $password, $dbname);

   if(!$conn){
       die("connection failed ".mysqli_connect_error());
   }
