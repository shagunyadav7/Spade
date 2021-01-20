<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="navbar/main.css">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

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

	<nav class="navbar navbar-light cus_co" style="background-color:#050a1d; margin-bottom: 0;">
        <div style="padding: 15px;margin: auto;">
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

                <div class="mrg"><a href="index.php"><i class="fas fa-th"></i> Blog</a></div>
                <div class="mrg"><a href="..\internship/internship.php"><i class="fas fa-peace"></i> Internship</a></div>
                <div class="mrg"><a href="https://www.spadeems.org/"><i class="fas fa-clock"></i> Campus Ambassador</a></div>
                <div class="mrg"><a href="..\contact/contact.php"><i class="fas fa-envelope"></i> Contact</a></div>
            </div>


            <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776; </span>



            <img class="logo_img" src="navbar/logo-white.png" alt="">
        </div>
    </nav>


	<?php include("header.php");?>
	
	<section class="bottom-slider">
		<div class="course_demo1">
			<ul id="flexiselDemo1">
				<?php getbottomsliderposts("blogs");?>
			</ul>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<h4><strong>Categories</strong></h4>
						<ul class="list-group single">
							<?php countcategories();?>
						</ul>
					</div>
				</aside>
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row">
							<?php getblogridposts("blogs");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>
				<!--//left-->
				<!--right-->
				</aside>
				<div>
				<aside>
				
						<!-- <div class="tech-btm widget_social"> -->
							<!-- <h4>Stay Connected</h4>
							<ul>

								<li>
									<a class="twitter" href="<?php getlinks("links","twitter");?>">
										<i class="fab fa-twitter"></i>
										<span class="count"></span> Twitter</a>
									</li>
									<li>
										<a class="facebook" href="<?php getlinks("links","facebook");?>">
											<i class="fab fa-facebook-f"></i>
											<span class="count"></span> Facebook</a>
										</li>
										<li>
											<a class="dribble" href="<?php getlinks("links","dribble");?>">
												<i class="fab fa-dribbble"></i>

												<span class="count"></span> Dribble</a>
											</li>
											<li>
												<a class="pin" href="<?php getlinks("links","pinterest");?>">
													<i class="fab fa-pinterest"></i>
													<span class="count"></span> Pinterest</a>
												</li>

											</ul>
										</div> -->
										<div class="tech-btm">
											<h4>Older Posts</h4>
											<?php getolderposts("blogs");?>
											<!--olderpostsendhere-->
										</div>
									</div>
								</aside>
							</div>
								<!--//right-->
							</div>
						</div>
					</section>
					<!--//main-->
					<!--/middle-->
					<!-- <section class="middle-sec-agileinfo-w3ls">
						<div class="container">
							<div class="row inner-sec">
								<div class="col-md-4 news-left">
									<ul id="demo1_thumbs" class="list-inline">
										get latest four
										<?php getfour("blogs");?>
									</ul>
								</div>
								<div id="demo1_main_image" class="col-md-8  news-right"></div>
								<div class="clearfix"> </div>
							</div>
						</div>

					</section> -->
					<!--//middle-->
					<!---->
				<div class="btw">
					<section class="main-content-w3layouts-agileits">
						<div class="container">
							<div class="row">
								<!--left-->
								<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
									<?php getonelatest("blogs");?>
								</div>
								<!--//left-->
								<!--right-->
								<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
									<div class="tech-btm">
										<h4>Editor's Choice</h4>
										
										<?php geteditorschoice("editors_choice"); ?>
										
									</div>
									
								</aside>
								<!--//right-->
							</div>
						</div>
					</section>
				</div>
					<!--//main-->
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

					<!---->
					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!-- desoslide-JavaScript -->
					<script src="js/jquery.desoslide.js"></script>
					<script>
						$('#demo1_thumbs').desoSlide({
							main: {
								container: '#demo1_main_image',
								cssClass: 'img-responsive'
							},
							effect: 'sideFade',
							caption: true
						});
					</script>
					<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
					<!-- requried-jsfiles-for owl -->
					<script>
						$(window).load(function () {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script>
						$(window).load(function () {
							$("#flexiselDemo2").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script src="js/jquery.flexisel.js"></script>
					<!-- //password-script -->
					<!--/ start-smoth-scrolling -->
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<!--// end-smoth-scrolling -->

					<script>
						$(document).ready(function () {
							
							var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									};
									

									$().UItoTop({
										easingType: 'easeOutQuart'
									});

								});
							</script>
							<a href="#home" class="scroll" id="toTop" style="display: block;">
								<span id="toTopHover" style="opacity: 1;"> </span>
							</a>

							<!-- //Custom-JavaScript-File-Links -->
							<script src="js/bootstrap.js"></script>


						</body>

						</html>