<?php
    
    //include database
    include('includes/config.php');



    if(isset($_POST['submit'])){

    $stmt = $mysqli->stmt_init();
    
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlentities($_POST['message']);
    //insert the post entries into the database
    $query = "insert into comments(name, email, message, time)  values('{$name}', '{$email}', '{$message}', now())";
    $stmt->prepare($query);
    //execute the query
    $stmt->execute();

    }




    




?>













<?php include("includes/header.php");   ?>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>News &amp; Events</h1>
                        <p>Read the latest news in the hostel and on campus </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <h1 class="mb-4">THE INAUGRATION OF THE NEW VICE CHANCELLOR</h1>
                    <div class="post-meta">
                        <span class="category">Food</span>
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <div class="post-content-body">
                        <p>The newly elected vice chancellor is a reputable and hardworking lady who for many years has immnesely contributed to the development of the nation. Her research has changed a lot in the world of science. She was elected not on the 
                            basis of her gender but for her hardworking and experienced capabilites
                        </p>
                        <p>She is the first female vice chancellor in the history of the country. The vice chancellor work is a tedious job and the school has placed all their hope and belief in her that she can do it. We the students are hoping that under her leadership
                            there will be some enormous changes in the developments around campus.  </p>
                        <p>Her inauguration as a vice chancellor has somehow given hope to the females on campus who for some reasons didnt believe that they could achieve such achievements. What a nice way to start this semester? This is a step towards immense devlopment around and on campus. 
                            There are numerous things the school lacks. We hope our cry will be heard </p>
                        <div class="row mb-5">
                            <div class="col-md-12 mb-4 element-animate">
                                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                            </div>
                            <div class="col-md-6 mb-4 element-animate">
                                <img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid">
                            </div>
                            <div class="col-md-6 mb-4 element-animate">
                                <img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid">
                            </div>
                        </div>
                        <p>The newly elected vice chancellor is a reputable and hardworking lady who for many years has immnesely contributed to the development of the nation. Her research has changed a lot in the world of science. She was elected not on the 
                            basis of her gender but for her hardworking and experienced capabilites
                        </p>
                        <p>She is the first female vice chancellor in the history of the country. The vice chancellor work is a tedious job and the school has placed all their hope and belief in her that she can do it. We the students are hoping that under her leadership
                            there will be some enormous changes in the developments around campus.  </p>
                        <p>Her inauguration as a vice chancellor has somehow given hope to the females on campus who for some reasons didnt believe that they could achieve such achievements. What a nice way to start this semester? This is a step towards immense devlopment around and on campus. 
                            There are numerous things the school lacks. We hope our cry will be heard </p>
                    </div>


                    <div class="pt-5">
                        <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
                    </div>


                    <div class="pt-5">
                        <h3 class="mb-5">6 Comments</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard">
                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                        nihil?
                                    </p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>

                            <li class="comment">
                                <div class="vcard">
                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                        nihil?
                                    </p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard">
                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>Jean Doe</h3>
                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                                nihil?
                                            </p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>


                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard">
                                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>Jean Doe</h3>
                                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit
                                                        necessitatibus, nihil?</p>
                                                    <p><a href="#" class="reply">Reply</a></p>
                                                </div>

                                                <ul class="children">
                                                    <li class="comment">
                                                        <div class="vcard">
                                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                                        </div>
                                                        <div class="comment-body">
                                                            <h3>Jean Doe</h3>
                                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                                                                impedit necessitatibus, nihil?</p>
                                                            <p><a href="#" class="reply">Reply</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="comment">
                                <div class="vcard">
                                    <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                        nihil?
                                    </p>
                                    <p><a href="#" class="reply">Reply</a></p>
                                </div>
                            </li>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="" class="p-5 bg-light method='post'">
                                <div class="form-group">
                                    <label for="name">Name </label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit"  value="Post Comment" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>FIND YOUR WAY AROUND CAMPUS</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>RECENT EVENTS ON CAMPUS</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>THE BEST RESTAURANT ON CAMPUS</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            <li><a href="#">football</span></a></li>
                            <li><a href="#">News <span>(22)</span></a></li>
                            <li><a href="#">message from porter <span>(37)</span></a></li>
                            <li><a href="#">transport <span>(42)</span></a></li>
                            <li><a href="#"> latest movies<span>(14)</span></a></li>
                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>


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
                    <p>We are socialized. Follow us</p>
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
                    <p>Let us communicate on social media and share some stories</p>
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
                
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">TECHNOCRATS</a>

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

    <script src="js/main.js"></script>
</body>

</html>