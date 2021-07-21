<?php
    if(isset($_POST[''])){
      
    }
  

  



?>


<!Doctype html>
<html>
    <head>
    <title>change password</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
        
       const valid = ()=>{
         
        var username = $("#username").val();
        var password = $("#password").val();
        var cpassword = $("#cpassword").val();

        if(password === cpassword){
          console.log("password matched");
        }
        else{
         
          alert("password mismatched");
        }
       }
          
    </script>
    </head>
    <body>
    <section class="site-section">
      <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
          <div class="col-md-6-offset">
            <h2 class="mb-5 text-center">change password</h2>
                <form action="" method="post"  onsubmit="return valid(); ">
                  <div class="row">
                      <div class="col-md-offset-3 form-group"></div>
                      <div class="col-sm-12 form-group">
                          
                          <label for="">Email/Username</label>
                          <div style="position: relative;">
      
                            <input type='email' class="form-control" id='username' />
                          </div>
                      </div>

                      <div class="col-sm-12 form-group">
                          
                          <label for="">new password</label>
                          <div style="position: relative;">
                            
                           <input type='password' name="password" class="form-control" id='password' />
                          </div>
                      </div>
                      <div class="col-sm-12 form-group">
                          
                          <label for="">confirm password</label>
                          <div style="position: relative;">
                            
                           <input type='password' name="cpassword" class="form-control" id='cpassword' />
                          </div>
                      </div>
                      
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group text-center">
                      <input type="submit" name="submit" value="RESET" class="btn btn-primary btn-md">
                      <p class="text-center">are you new here?<a href="registration.php">register here</a></p>
                    </div>
                  </div>
                </form>
              </div>
    </body>
</html>