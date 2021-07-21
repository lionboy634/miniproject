<?php
   session_start();
   include('includes/config.php');

   $email = $_POST['email'];
   $password = $_POST['password'];

    if(isset($_POST['login'])){

      $stmt = $mysqli->prepare("select id, email, password from userregistration where email=? and password=? ");
      $stmt->bind_param('ss' , $email, $password);
      $stmt->execute();
      $stmt->bind_result($id, $email, $password);
      $result = $stmt->fetch();

      $stmt->close();

      $_SESSION['id'] = $id;
      $_SESSION['email'] = $email;


       if($result){
         header("location: booknow.php");
       }   
       
       else{
         header("location: login.php");
       }

     
      
    
      
    }
   



?>


<!Doctype html>
<html>
    <head>
    <title>Login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/form_validate.js"></script>
    </head>
    <body>
    <section class="site-section">
      <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
          <div class="col-md-6">
            <h2 class="mb-5 text-center">login Form</h2>
                <form action="" method="post">
                  <div class="row">
                      <div class="col-md-offset-3 form-group"></div>
                      <div class="col-sm-12 form-group">
                          
                          <label for="">Email</label>
                          <div style="position: relative;">
      
                            <input type='text' class="form-control" name="email" id='email' required />
                          </div>
                      </div>

                      <div class="col-sm-12 form-group">
                          
                          <label for="">password</label>
                          <div style="position: relative;">
                            
                           <input type='password' class="form-control" name="password" id='password' required />
                          </div>
                      </div>
                      
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group text-center">
                      <input type="submit" value="LOGIN" name="login" class="btn btn-primary btn-md">
                      <p class="text-center">are you new here?<a href="registration.php">register here</a></p>
                    </div>
                  </div>
                </form>
              </div>
    </body>
</html>