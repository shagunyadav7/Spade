<!DOCTYPE html>
<html>
<head>
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

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
        margin: 50px 5px;
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
    <section class="footer-content">
        <footer class="footer" id="contact-us">    
            <div class="inner-footer">
                
                            <div class="footer-items">
                                <img src="https://raw.githubusercontent.com/spadeems/web/master/img/brand-logo-white.png"
                                     alt="spadeems logo" class="img-fluid"><br><br>
                                 <p>SPADE is a team of experienced professionals who are guided by their own passion to deliver exhilarating outcomes in the fields of marketing, technical, events, advertising, brand promotions, as well as in exhibitions. With our creative minds at work. we offer the most innovative solutions to help clients take their brands to a whole new level.
                                    <div class="social-media">
                                       <a href="https://www.facebook.com/marketingspade/"><i class="bi bi-facebbok" aria-hidden="true"></i></a>
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
                              Copyright:@2020 SPADE EMS.All rights reserved.
                          </div>
        </footer>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
</body>
</html>