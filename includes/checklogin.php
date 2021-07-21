<?php
     class session{
         
    function checklogin(){
        if(strlen($_SESSION['id'])==0){
          header("location: login.php");
        }
      }
    }
?>