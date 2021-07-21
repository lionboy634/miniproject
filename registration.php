<?php
     
     include('includes/config.php');
    if(isset($_POST['register'])){
      
      $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
      $mname = filter_var($_POST['mname'], FILTER_SANITIZE_STRING);
      $regno = filter_var($_POST['sid'], FILTER_SANITIZE_STRING);
      $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
      $emailid = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $contactno = filter_var($_POST['contact'], FILTER_SANITIZE_NUMBER_INT);
      $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
      $cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
      
      if($password != $cpassword){
        echo "<script> the passwords do not match</script>";
      }
      
      //query statement 
      
      $query1="insert into  userregistration(regNo,firstName,middleName,lastName,gender,contactNo,email,password) values(?,?,?,?,?,?,?,?)";
      $stmt1= $mysqli->prepare($query1);
      $stmt1->bind_param('sssssiss',$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$password);
      $stmt1->execute();
      echo"<script>alert('user Successfully registered');</script>";
      
    }

    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Frontline Inn Hostel Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>  
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript">
    function valid(){
      console.log()
    }
  
  </script>
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">Frontline Inn Hostel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="rooms.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="rooms.html">explore hostel</a>
                  <a class="dropdown-item" href="rooms.html">1 seater room</a>
                  <a class="dropdown-item" href="rooms.html">2 seater room</a>
                  <a class="dropdown-item" href="rooms.html">3 seater room</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>

               <li class="nav-item ">
                <a class="nav-link" href="booknow.php"><span>Book Now</span></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    <body>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Registration page</h1>
              <p>You need to register in order to access the booking site</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Registration Form</h2>
                <form action="" method="post">
                  <div class="row">
                      <div class="col-sm-12 form-group">
                          
                          <label for="">FirstName</label>
                          <div style="position: relative;">
      
                            <input type='text' class="form-control" id='fname' name="fname"  required/>
                          </div>
                      </div>

                      <div class="col-sm-12 form-group">
                          
                          <label for="">MiddleName</label>
                          <div style="position: relative;">
                            
                           <input type='text' name="id" class="form-control" name="mname" id='mname' required />
                          </div>
                      </div>
                      
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="">LastName</label>
                      <input type="text" name="lname"  id="lname"  class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="">studentID Number</label>
                      <input type="text" name="sid"  id="sid"  class="form-control" required>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="">Gender</label>
                      <p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                    <label class="form-check-label" for="inlineRadio1">MALE</label>
                </div>
              <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                     <label class="form-check-label" for="inlineRadio2">FEMALE</label>
                </p>
               </div>

                      
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="room">Contact</label>
                      <input type="text" name="contact" id="contact" class="form-control" required >
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control"  required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="">password</label>
                      <input type="text" name="password"  id="password"  class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="">confirm password</label>
                      <input type="text" name="cpassword"  id="cpassword"  class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="register" value="REGISTER NOW" class="btn btn-primary btn-md">
                      <p>are you already registered?<a href="login.php">login here</a></p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Featured Room</h3>
                <div class="media d-block room mb-0">
              <figure>
                <img src="images/img_1.jpg" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Featured Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">2 in-a-Room</a></h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                  <li><span class="ion-ios-crop"></span> 22 ft  with a balcony<sup>2</sup></li>
                </ul>
                <p> </p>
                <p><a href="#" class="btn btn-primary btn-sm">Book Now From $GH4000</a></p>
              </div>
            </div>
              </div>
        </div>
      </div>
    </section>
    <!-- END section -->


   
   

    <section class="section-cover" data-stellar-background-ratio="0.5" style="color:black;    background-image: url(images/hotel.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2 style="color:black;">Relax and Enjoy your academic year</h2>
            <p class="lead mb-5">enjoy your stay here with us. Our services are always available for you!</p>
      
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Phone Support</h3>
            <p>24/7 Call us now.</p>
            <p class="lead"><a href="tel://">+233557458787</a></p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are on social media. Follow us</p>
            <p>
              <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
              <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
              <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
              <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
              <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p></p>
            <form action="#" class="subscribe">
              <div class="form-group">
                <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            &copy; 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by technocrats</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
     
     
    </script>

       

    <script src="js/main.js"></script>
  </body>
</html>