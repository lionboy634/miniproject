<?php

   try{

    $mysqli = new mysqli('localhost', 'root', '1.2.3.4.5.asiedu', '');
    
   }

   catch(Exception $e){
       die("could connect the database");

   }


?>