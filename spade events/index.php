<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <link rel="stylesheet" href="navbar/main.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="lightbox/css/lightbox.min.css">
    <script type="text/javascript" src="lightbox/js/lightbox.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">



    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <title>SPADE EMS</title>
    <style>
    .footer{ 
        min-height:50px;
        background: #00121b;
        display: block;
        margin-top: 0%;
     }
     .inner-footer {
        width: 95%;
        margin: auto;
        padding: 30px 10px;
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        justify-content: center;
    }
    
    .footer-items {
        width: 25%;
        padding: 10px 20px;
        box-sizing: border-box;
    } 

    .footer-items h1 {
        padding: 10px 0;
        font-size: 25px;
        color: #fff;
        text-transform: uppercase;
    }

    .footer-items p {
        color: grey;
        font-size: 16px;
        text-align: justify;
        line-height: 25px;
    }
    
    .footer-items h2 {
        margin: 10px 0;
        color: grey;
        font-size: 16px;
        font-weight: lighter;
        text-transform: uppercase;
    }
    
    /*.bord {
        height: 2px;
        width: 90px;
        background: #ff9800;
    }*/
    
    .footer-items ul {
        list-style: none;
        color: #fff;
        font-size: 15px;
        letter-spacing: 0.5px;
        padding-inline-start: 0px;
    }
    
    .footer-items ul a {
        text-decoration: none;
        outline: none;
        color: #fff;
        transition: 0.3s;
    }
    
    .footer-items ul a:hover {
        color: #ff9800;
    }
    
    .footer-items ul li {
        margin: 10px 0;
        height: 25px;
    }
    
    .footer-items p a{
        text-decoration: none;
        outline: none;
        color: #fff;
        transition: 0.3s;
    }

    .footer-items p a:hover {
        color: #ff9800;
    }

    .footer-items li i {
        margin-right: 20px;

    }
    .social-media {
        width: 100%;
        color: #fff;
        text-align: center;
    }
    
    .social-media a {
        text-decoration: none;
    }
    
    .social-media i {
        height: 37px;
        width: 37px;
        /*margin: 50px 5px;*/
        padding: 10px;
        color: #fff;
       /* border-radius: 50%;*/
        border: 1px solid grey;
        transition: 0.3s;
    }
    
    .social-media i:hover {
        background: grey;
    }
    
    .footer-bottom {
        padding: 10px;
        background: #3d545f;
        color: #fff;
        font-size: 10px;
        text-align: center;
    }
    @media screen and (max-width: 1085px) {
        .footer-items {
            width: 50%;
        }
    }
    
    @media screen and (max-width: 600px) {
        .footer-items {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <!-- ======= Intro Section ======= -->
    <section id="intro">
    <nav class="navbar navbar-light cus_co">
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
                                <a href="index.php"><i class="fas fa-magic"></i> Our Events</a>
                                <a href="ai/index.php"><i class="fas fa-compass"></i> Artificial Intelligence</a>
                                <a href="gitaandvedant/index.php"><i class="fas fa-om"></i> Geeta and Vedant</a>
                                <a href="Event-Gallery/index.php"><i class="fas fa-bolt"></i> Gallery</a>

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
                <div class="mrg"><a href="..\contact/contact.php"><i class="fas fa-envelope"></i> Contact</a></div>
            </div>


            <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776; </span>



            <img class="logo_img" src="navbar/logo-white.png" alt="">
        </div>
    </nav>
        <div class="intro-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0"><span>SPADE</span><br> EVENT MANAGEMENT SERVICES</h1>
            <!-- <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p> -->
            <a href="https://youtu.be/FQDn8FU2k8M" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a>
            <!-- <a href="#about" class="about-btn scrollto">Register Now</a> -->
        </div>
    </section><!-- End Intro Section -->
    <br>
    <!-- TYPESOF EVENTS SECTION -->
    <section>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>TYPES OF EVENTS</h2>
            </div>
        </div>
    </section>
    <section id="event-type">
        <div class="d-container" id="box">
            <div id="owl-example" class="owl-carousel">
                <div class="item">
                    <div class="box" data-aos="fade-down" data-aos-duration="1000">
                        <div class="bx">
                            <a href="assets/img/supporters/img 1.jpg" data-lightbox="mygallery">
                                <img src="assets/img/supporters/img 1.jpg" alt="institutional events"/>
                            </a>
                        </div>   
                        
                    </div>
                    <!-- <div class="detail"><h4 class="ml16"><b>INSTITUTIONAL EVENTS</b></h4></div> -->
                    <div class="detail"><h4 class="ml15"><span class="word">INSTITUTIONAL&nbsp; </span><span class="word">EVENTS</span></h4></div>
                          
                </div>
                <div class="item">
                    <div class="box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="bx">
                            <a href="assets/img/supporters/img 2.jpg" data-lightbox="mygallery">
                                <img src="assets/img/supporters/img 2.jpg" alt="virtual events" />
                            </a>
                        </div>  
                    </div>
                    <div class="detail"><h4 class="ml16"><span class="word">VIRTUAL&nbsp; </span><span class="word">EVENTS</span></h4></div> 
                </div>
                <div class="item">
                    <div class="box" data-aos="fade-down" data-aos-duration="1000">
                        <div class="bx">
                            <a href="assets/img/supporters/img 3.jpg" data-lightbox="mygallery">
                                <img src="assets/img/supporters/img 3.jpg" alt="corporate events" />
                            </a>
                        </div>     
                    </div>
                    <div class="detail"><h4 class="ml17"><span class="word">CORPORATE&nbsp; </span><span class="word">EVENTS</span></h4></div>      
                </div>
                <div class="item">
                    <div class="box" data-aos="fade-down" data-aos-duration="1000">
                        <div class="bx">
                            <a href="assets/img/supporters/img 4.jpg" data-lightbox="mygallery">
                                <img src="assets/img/supporters/img 4.jpg" alt="special" />
                            </a>
                        </div>   
                    </div>
                    <div class="detail"><h4 class="ml18"><span class="word">SPECIAL&nbsp; </span><span class="word">EVENTS</span></h4></div>      
                </div>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
    </section>
    <section>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>LATEST EVENTS</h2>
                <p>Check our latest events happened in last month</p>
            </div>
        </div>
    </section>
    <section class="boo">
        <!-- <h2>OUR RECENTLY COMPLETED EVENTS</h2> -->
        <div class="container2">
            <div class="card">
                <div class="imgBx">
                    <img src="assets/img/gallery/6.jpg">
                </div>
                <div class="content">
                    <h6>Spade Ranchi presented Spade Ranchi ki pathshala with "Awantika Singh"<br/>Awantika is one of the best fashion designer and also being awarded as the best fashion blogger of Jharkhand.<br/>It's a great opportunity</h6>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="assets/img/speakers/2.jpg">
                </div>
                <div class="content">
                    <h6>Spade in Collaboration with DOPAMINE: The positivity Magazine is going to organize an online contest<br>
                        Date:03/04/2020 - 10/04/2020 <br>Theme: POSITIVITY<br>Registation link: - <br>https://dopamineplanet.com</h6>

                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="assets/img/speakers/3.jpg">
                </div>
                <div class="content">
                    <h6>
                        The Girls x Tech Online Design Bootcamp will teach you Basics of Canva and Graphic Design Concepts. The session is scheduled for 20th- 21st August, 2020 (4:00 PM to 5:30 PM). Girls aged 16 years & above can register.
                    </h6>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="assets/img/gallery/1.jpg">
                </div>
                <div class="content">
                    <h6>"Know yoga know peace, no yoga no peace." <br>SPADE, successfully conducted a 10 day event, Yoga-ThePathway to Inner Peace with 11 different Yoga Experts from all over the world
                    </h6>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="assets/img/speakers/5.jpg">
                </div>
                <div class="content">
                    <h6>Spade Ranchi successfully completed its first event Spade Ranchi ki pathshala with "Awantika Singh". Thank you Awantika Singh for wonderful Session.</h6>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="assets/img/speakers/6.jpg">
                </div>
                <div class="content">
                    <h6>
                        Spade is back with new episode of "Spade Ki Pathshala" on "How to become an Officer in Indian Armed Force?" <br>
                        Date - 4 September 2020<br>
                        Speaker - CEO col. SPS Cheema<br>
                        Venue - Spade EMS (Live on YouTube)
                    </h6>

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

         <div class="container mt-5" data-aos="fade-up">
            <div class="section-header">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
            </div>
        </div>
        <div class="container my-4">

           
        
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
        
              <!--Controls-->
              <!-- <div class="controls-top">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
              </div> -->
              <!--/.Controls-->
        
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
        
                <!--First slide-->
                <div class="carousel-item active">
        
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/1.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
        
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/2.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
        
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/3.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
                  </div>
        
                </div>
                <!--/.First slide-->
        
                <!--Second slide-->
                <div class="carousel-item">
        
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/4.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
        
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/5.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
        
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/6.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
                  </div>
        
                </div>
                <!--/.Second slide-->
        
                <!--Third slide-->
                <div class="carousel-item">
        
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/7.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
        
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/8.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
        
                    <div class="col-md-4 clearfix d-none d-md-block">
                      <div class="card mb-2">
                        <img class="card-img-top" src="assets/img/gallery/1.jpg"
                          alt="Card image cap">
                        
                      </div>
                    </div>
                  </div>
        
                </div>
                <!--/.Third slide-->
        
              </div>
              <!--/.Slides-->
        
            </div>
            <!--/.Carousel Wrapper-->
        
          </div>
        </section>
        
        <!-- View Button-->
        <section id= "View">
            <a href="Event-Gallery/index.php" class="about-btn scrollto">View All</a>
        </section>
        <!--/.View Button-->
        <br><br>

        <!-- TESTIMONIALS -->
    <section>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>TESTIMONIALS</h2>
            </div>
        </div>
    </section>

    
   <section class="reviews mt-5">
        <div class="review">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <div class="row" style="text-align: center;"> -->
                            <div class="review1">
                                <div class="head-review">
                                    <img id="re" src="assets/img/hotels/T06.jpeg" width="250px" alt="">
                                </div>
                                <div class="body-review">
                                    <div class="name-review">
                                        K.K. Rana
                                    </div>
                                    
                                    <div class="rating">
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                    </div>
                                    <div class="desc">
                                        I have witnessed almost 500 events organized by Spade and thankyou for doing
                                        such amazing work.It was a pleasure working with such a har-working team. I'll
                                        always give my full support to the team.
                                        They provide a fun and professional atmosphere.</div>
                                </div>
                            </div>
                    </div>
                    <div class="carousel-item">
                            <div class="review1">
                                <div class="head-review">
                                    <img id="re" src="assets/img/hotels/T02.jpeg" width="250px" alt="">
                                </div>
                                <div class="body-review">
                                    <div class="name-review">
                                       Dr. Anshuman Kalla
                                    </div>
                                   
                                    <div class="rating">
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                    </div>
                                    <div class="desc">
                                        They are very capable of delivering successful offline events but with their
                                        excellent Technology, Design, Social Media and other such teams, they have
                                        proved to be an exceptional and trustworthy Remote Event Management Organisation
                                        (REMO).



                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="carousel-item">
                            <div class="review1">
                                <div class="head-review">
                                    <img id="re" src="assets/img/hotels/T03.jpeg" width="250px" alt="">
                                </div>
                                <div class="body-review">
                                    <div class="name-review">
                                        Dr. Madhusanka Liyange
                                    </div>
                                    
                                    <div class="rating">
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                    </div>
                                    <div class="desc">
                                        They have delivered flawless remote sessions with world
                                        class quality.No doubt SPADE should be on the top of mind when one considers
                                        Event Management,but with remote events becoming the way of life, SPADE is a go
                                        to team.
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <div class="row" style="text-align: center;"> -->
                        <div class="review1">
                                <div class="head-review">
                                    <img id="re" src="assets/img/hotels/T04.jpeg" width="250px" alt="">
                                </div>
                                <div class="body-review">
                                    <div class="name-review">
                                      Dr. Pradeep Kumar
                                    </div>
                                   
                                    <div class="rating">
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                    </div>
                                    <div class="desc">
                                        I had the pleasure of working with SPADE EMS team. They were very professional
                                        and were always available to handle any of my questions and concerns. They
                                        listened to all my ideas and worked accordingly and at last results were
                                        remarkable.
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="review1">
                                <div class="head-review">
                                    <img id="re" src="assets/img/hotels/T05.jpeg" width="250px" alt="">
                                </div>
                                <div class="body-review">
                                    <div class="name-review">
                                        Dr. Sanjay Pande
                                    </div>
                                    
                                    <div class="rating">
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                        <i class="fas-fa-star"></i>
                                    </div>
                                    <div class="desc">
                                        They provided excellent services in assisting us with our events. Well oriented,
                                        organized and professional.
                                        It was simply fantastic to have Spade with us. They are very experienced and
                                        know exactly how to make the event a successful one. </div>
                                </div>
                        </div>
                    </div>
                    <div class="carousel-item">

                            <div class="review1">
                                <div class="head-review">
                                    <img id="re" src="assets/img/hotels/T01.jpeg" width="250px" alt="">
                                </div>
                                <div class="body-review">
                                    <div class="name-review">
                                      Radhakrishnan Pillai
                                    </div>
                                  
                                    <div class="rating">
                                        <i class="fa-fa-star"></i>
                                        <i class="fa-fa-star"></i>
                                        <i class="fa-fa-star"></i>
                                        <i class="fa-fa-star"></i>
                                        <i class="fa-fa-star"></i>
                                    </div>
                                    <div class="desc">
                                        They provide a fun and professional atmosphere. A wonderful experience with
                                        Spade.No doubt SPADE should be on the top of mind when one considers
                                        Event Management
                                        They provided excellent services in assisting us with our events. 
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>  
                
            </div>
        </div>
    </section>
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
                                    <a href="..\contact/contact.php">Contact</a>
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

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- Type of event animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="https://tg3.s3.ap-south-1.amazonaws.com/dna/JS/jquery.min.js" type="text/javascript"></script>
    <script src="https://tg3.s3.ap-south-1.amazonaws.com/dna/JS/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="https://tg3.s3.ap-south-1.amazonaws.com/dna/JS/aos.js" type="text/javascript"></script>
    <script src="https://tg3.s3.ap-south-1.amazonaws.com/dna/CSS/slick/slick.js" type="text/javascript"></script>
    <script src="https://tg3.s3.ap-south-1.amazonaws.com/dna/CSS/swiper/js/swiper.min.js"></script>
    <script type="text/javascript">
        AOS.init();

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 300) {
                $('#mainHeader').addClass('dnaHeaderComp');
            }
            else {
                $('#mainHeader').removeClass('dnaHeaderComp');
            }
        });


        var sidebarBox = document.querySelector('#PanSidebar');
        var sidebarBtn = document.querySelector('#Menubtn');
        var pageWrapper = document.querySelector('#form1');

        sidebarBtn.addEventListener('click', function (event) {

            if (this.classList.contains('active')) {
                this.classList.remove('active');
                sidebarBox.classList.remove('active');
            } else {
                this.classList.add('active');
                sidebarBox.classList.add('active');
            }
        });

        pageWrapper.addEventListener('click', function (event) {

            if (sidebarBox.classList.contains('active')) {
                sidebarBtn.classList.remove('active');
                sidebarBox.classList.remove('active');
            }
        });

        window.addEventListener('keydown', function (event) {

            if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
                sidebarBtn.classList.remove('active');
                sidebarBox.classList.remove('active');
            }
        });



        $("#spDown").click(function () {
            $('html, body').animate({
                scrollTop: $("#homepage-sections").offset().top - 100
            }, 1200);
        });
    </script>




    <script src="https://tg3.s3.ap-south-1.amazonaws.com/dna/JS/owl.carousel.min.js" type="text/javascript"></script>
    <script src="https://tg3.s3.ap-south-1.amazonaws.com/dna/JS/morphext.min.js" type="text/javascript"></script>
    <script src="https://tg3.s3.ap-south-1.amazonaws.com/dna/CSS/Lightbox2/js/lightbox.min.js"></script>
    <script type="text/javascript">
        function ShowLatestList() {
            $.ajax({
                type: "POST",
                url: "Default.aspx/GetLatestData",
                data: '{}',
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    $("#PanLatest").empty();
                    if (data.d.length > 0) {
                        for (var i = 0; i < data.d.length; i++) {
                            $("#PanLatest").append("" +
                                "<div class='swiper-slide'>" +
                                "<img src='https://assets.dnanetworks.co.in/dna/EventImages/Events/" + data.d[i].EventFolder + "/1.jpg' onclick='ShowGallery(\"" + data.d[i].EventFolder + "\");' alt='" + data.d[i].EventFolder + "' style='cursor:pointer;' />" +
                                "<div class='latestItemContent'>" +
                                "<div style='font-size: 1.1rem; color:orange;'>" + data.d[i].EventName + "</div>" +
                                "<div style='font-size: 0.9rem; color:#fff; margin-top:6px;'>" + data.d[i].EventDate + "</div>" +
                                "<div style='font-size: 0.9rem; color:#fff; margin-top:3px;'>" + data.d[i].EventVenue + "</div>" +
                                "</div>" +
                                "</div>");
                        }

                        var swiper = new Swiper('#panListContainer', {
                            slidesPerView: 4,
                            spaceBetween: 20,
                            slidesPerGroup: 2,
                            loop: true,
                            loopFillGroupWithBlank: true,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            breakpoints: {
                                480: {
                                    slidesPerView: 1,
                                    spaceBetween: 10
                                },
                                // when window width is <= 640px
                                640: {
                                    slidesPerView: 3,
                                    spaceBetween: 30
                                }
                            }
                        });

                    }
                },
                error: function (result) {

                }
            });
        }

        $('.carousel').carousel({
            interval: 4500
        });
        $(document).ready(function () {
            $('#owl-example').owlCarousel({
                margin: 10,
                responsiveClass: true,
                autoPlay: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            $('#panLeaderText').slick({
                vertical: true,
                autoplay: true,
                arrows: false,
                autoplaySpeed: 3000,
                speed: 300
            });
            $('#owl-Associate').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            ShowLatestList();

        });

    </script>
    <!-- Types of events animation text -->
    <script type="text/javascript">
        anime.timeline({loop: true})
          .add({
            targets: '.ml15 .word',
            scale: [14,1],
            opacity: [0,1],
            easing: "easeOutCirc",
            duration: 800,
            delay: (el, i) => 800 * i
          }).add({
            targets: '.ml15',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
    </script>
    <script type="text/javascript">
        anime.timeline({loop: true})
          .add({
            targets: '.ml16 .word',
            scale: [14,1],
            opacity: [0,1],
            easing: "easeOutCirc",
            duration: 800,
            delay: (el, i) => 800 * i
          }).add({
            targets: '.ml16',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
    </script>
    <script type="text/javascript">
        anime.timeline({loop: true})
          .add({
            targets: '.ml17 .word',
            scale: [14,1],
            opacity: [0,1],
            easing: "easeOutCirc",
            duration: 800,
            delay: (el, i) => 800 * i
          }).add({
            targets: '.ml17',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
    </script>
    <script type="text/javascript">
        anime.timeline({loop: true})
          .add({
            targets: '.ml18 .word',
            scale: [14,1],
            opacity: [0,1],
            easing: "easeOutCirc",
            duration: 800,
            delay: (el, i) => 800 * i
          }).add({
            targets: '.ml18',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>