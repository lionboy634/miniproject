<?php
    
    include('includes/config.php');

    if(!empty($_POST['emailid'])){
        $email = $_POST['emailid'];

        //create the statement variable
        $stmt = $mysqli->prepare("select email from userregistration where email=?");
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            echo "email already in use";
        }
        else{
            echo "email is available";
        }
    }

    if(!empty($_POST['roomid'])){
        $room = $_POST['roomid'];

        $stmt1 = $mysqli->prepare("select roomno  from room where roomno=? ");
        $stmt1->bind_param('s', $room);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            echo "room number is available";
        }
        else{
            echo "room number not available ";
        }

    }















?>