<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="navbar/main.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Contact Us</title>
</head>
<body style="overflow-x: hidden">


<nav class="navbar navbar-light " style="background-image: url(images/ban.jpg); background-repeat: no-repeat;">
        <div class="container-fluid">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="mrg">
                    <a href="..\index.php"><i class="fas fa-home"></i> Home</a>
                </div>
                <!-- <a href="#"><i class="fas fa-info-circle"></i> About</a> -->
                <div class="mrg"><a style="padding: 0; padding-left: 32px;" href="#">
                        <div class="dropdown">
                            <i class="fas fa-info-circle"></i> About
                            <div class="dropdown-content">
                                <a href="..\ABOUTUS1.php">SpadeEMS</a>
                                <a href="https://www.spadelpu.com/">SpadeLPU</a>

                            </div>
                        </div>
                    </a>
                </div>


                <div class="mrg"><a style="padding: 0; padding-left: 32px;" href="#">
                        <div class="dropdown">
                            <i class="fas fa-table"></i> Events
                            <div class="dropdown-content">
                                <a href="..\spade events/index.php"><i class="fas fa-magic"></i> Our Events</a>
                                <a href="..\spade events/ai/index.php"><i class="fas fa-compass"></i> Artificial Intelligence</a>
                                <a href="..\spade events/gitaandvedant/index.php"><i class="fas fa-om"></i> Geeta and Vedant</a>
                                <a href="..\spade events/Event-Gallery/index.php"><i class="fas fa-bolt"></i> Gallery</a>

                            </div>
                        </div>
                    </a></div>

                <div class="mrg"><a href="..\skp/index.php"><i class="fas fa-square"></i> SKP</a></div>
                <div><a style="padding: 0;padding-left: 32px;" href="#">
                        <div class="dropdown">
                            <i class="fas fa-cogs"></i> Services
                            <div class="dropdown-content">
                                
                                    <a href="#"><i class="fas fa-desktop"></i><span> Web Development</span></a>
                                    <a href="#"><i class="fab fa-android"></i><span> App Development</span></a>
                                    <a href="#"><i class="fas fa-magic"></i><span> Digital Marketing</span></a>
                                    <a href="#"><i class="fas fa-magic"></i><span> Graphics Designing</span></a>
                                    <a href="#"><i class="fas fa-video"></i><span> Video Editing</span></a>
                                    <a href="#"><i class="fas fa-magic"></i><span> Event Management</span></a>
                                    <a href="#"><i class="fas fa-magic"></i><span> Sales</span></a>
                                    <a href="#"><i class="fas fa-magic"></i><span> Sponsorship</span></a>

                            </div>
                        </div>
                    </a></div>

                <div class="mrg"><a href="..\blog/index.php"><i class="fas fa-th"></i> Blog</a></div>
                <div class="mrg"><a href="..\internship/internship.php"><i class="fas fa-peace"></i> Internship</a></div>
                <div class="mrg"><a href="https://www.spadeems.org/"><i class="fas fa-clock"></i> Campus Ambassador</a></div>
                <div class="mrg"><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></div>
            </div>


            <span style="font-size:30px;cursor:pointer; color: black;;" onclick="openNav()">&#9776; </span>



            <img class="logo_img" src="navbar/logo.png" alt="">
        </div>
</nav>
<div class=" ">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
              
                <img src="images/banner.jpg" alt="Banner" style="width:100%;">
            </div>

        </div>
    </div>
</div>


<div class="contact" >

    <form action="" method="">

        <div class="row">

            <div class="col-md-1 mb-5 mt-5"></div>

            <div class="col-md-4 mb-5 mt-5">
                <h1 class="mbr-section-title mb-4 display-2">
                    <strong class="us">Contact Us</strong>
                </h1>

                <p class="mbr-text mbr-fonts-style mb-4 display-7">
                    Fill this form and we'll get back to you soon.</p>

                <div>
                    <input type="text" name="name" placeholder="Name" data-form-field="name"
                           class="form-control" value="">
                </div>

                <div style="margin-top: 1em;">
                    <input type="text" name="email" placeholder="email" data-form-field="name"
                           class="form-control" value="">
                </div>

                <div style="margin-top: 1em;">
                    <input type="button" name="name" class="form-control bottom" value="Submit"
                           style="color: white;border: none">
                </div>


            </div>

            <div class="col-md-1 mb-5 mt-5"></div>

            <div class="col-md-5 mb-5 mt-5">
                <img src="images/label.jpg" width="100%" height="100%" alt="">

            </div>
        </div>
    </form>


</div>


<div class="location">

    <div class="row">

        <div class="col-md-12" align="center">
            <h1 class="mbr-section-title mb-4 mt-4 display-2" style="color: Black">
                <strong>Our Location</strong>
            </h1>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-8 mb-5">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23439.77342821459!2d75.65362241730074!3d31.284919352813585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x60d14f9b615e2b87!2sSpade%20EMS!5e0!3m2!1sen!2sin!4v1607918464370!5m2!1sen!2sin"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" -->
                    <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1GsS0gD6H9DssN0yQFK79lxSbWkuCZ9ca" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"></iframe> -->
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=10jiwS5OyQEaRNOHVUCP7bffO5MXyEC-Z"width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"></iframe>

        </div>

        <div class="col-md-2"></div>

    </div>
</div>
<section class="footer-content">
        <footer class="footer" id="contact-us">    
            <div class="inner-footer">
                
                            <div class="footer-items">
                                <img src="https://raw.githubusercontent.com/spadeems/web/master/img/brand-logo-white.png"
                                     alt="spadeems logo" class="img-fluid"><br><br>
                                 <p>SPADE is a team of experienced professionals who are guided by their own passion to deliver exhilarating outcomes in the fields of marketing, technical, events, advertising, brand promotions, as well as in exhibitions. With our creative minds at work. we offer the most innovative solutions to help clients take their brands to a whole new level.
                                    <div class="social-media">
                                       <a href="https://www.facebook.com/marketingspade/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                       <a href="https://www.instagram.com/marketingspade/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                       <a href="https://wa.me/917508450610/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                       <a href="https://twitter.com/EmsSpade/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                       <a href="https://www.linkedin.com/company/spadeems29"><i class="fa fa-linkedin-square"></i></a>
                                       <a href="https://www.youtube.com/spadeems"><i class="fa fa-youtube-play"></i></a>
                                    </div>
                                </p>
                            </div>
     
               
                             <div class="footer-items ">
                                 <h2>USEFUL LINKS</h2>
                                 <div class="bord"></div>
                                 <p>
                                    <a href="services.php">Services</a>
                                </p>
                                <p>
                                    <a href="about.php">About</a>
                                </p>
                                <p>
                                    <a href="contact.php">Contact</a>
                                </p>
                                <!-- <ul>
                                     <a href="">
                                      <li>Services</li>
                                     </a>
                                     <a href="">
                                      <li>About</li>
                                      </a>
                                      <a href="">
                                      <li>Contact</li>
                                      </a>                        
                                      <button type="button" class="btn btn-primary">Join Now</button>                                 
                                </ul>-->
                             </div>
    
                          <div class="footer-items">
                               <h2>CONTACT</h2>
                               <div class="bord"></div>
                               <ul>
                                   <li><i class="fa fa-home" aria-hidden="true"></i>SPADE EMS office, Jalandar,</li> 
                                   <li>Punjab-144005</li>
                                   <li><i class="fa fa-envelope" aria-hidden="true"></i>info@spadeems.com</li>
                                   <li><i class="fa fa-phone" aria-hidden="true"></i>+91-9463717334</li>
                                  <li> <i class="fa fa-whatsapp" aria-hidden="true"></i>+91-9463717334</li>
                               </ul>
                          </div>
                          <div>
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=10jiwS5OyQEaRNOHVUCP7bffO5MXyEC-Z"width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"></iframe>
                            </div>
    
            </div>
           

                          <div class="footer-bottom">
                              Copyright:@2020 <a href="https://www.spadeems.com/">SPADE EMS</a>.All rights reserved.
                          </div>
        </footer>
</section>

<!-- navbar -->
<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>
