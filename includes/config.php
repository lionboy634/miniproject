<?php
   
   Define('DB_HOST', 'localhost');
   Define('DB_USER', 'root');
   Define('DB_PASS', '1.2.3.4.5.asiedu');
   Define('DB_NAME', 'hostel');


   try{
   $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

   }

   catch(Exception $e){
     print("the system is under maintenance");
   }

   catch(Error $e){
       print("the system is busy. please try something else");
   }


    

    
?>