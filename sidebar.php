<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
    /*.cus_co{
   background-color:transparent;
    height: 0pt;
    width: 0px;
    }
*/

.container{
    margin-top: 0px;
    margin-left: 0px;
    
}
.bar{
    border-radius: 10px;
}
.logo_img{
   /* float: right;
    height: 15%;
    width: 15%;
    margin-right: 1px;*/
    float: right;
    height:40px;
    width:200px;
  margin-top: 7px; 
}
.btn-adjust{
    background:royalblue;
}
/*body {
    font-family: 'Poppins', sans-serif;
}*/

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
   padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 490px) {
    .sidenav {
        padding-top: 15px;
    }

    .sidenav a {
        font-size: 18px;
    }
}

.dropbtn {
    background-color: transparent;
    color: transparent;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #1b1b1b;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    text-decoration-color: white;
    
}

.dropdown-content a {
    color: white;
    padding: 20px 87px;
    text-decoration: none;
    display: block;
    width: 100%;
    font-size: 17px;
    text-align:left;
    
}

.dropdown-content a:hover {
    background-color: #333333;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #111111;
}
.mrg{
    margin: 20px;
    margin-left: 0;
   
}
</style>
</head>

<body>
    <!-- As a link -->
    <nav> <!--class="navbar cus_co">-->
        <div class="container">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="mrg">
                    <a href="index.php"><i class="fas fa-home"></i> Home</a>
                </div>
                <!-- <a href="#"><i class="fas fa-info-circle"></i> About</a> -->
                <div class="mrg"><a style="padding: 0; padding-left: 32px;" href="#">
                        <div class="dropdown">
                            <i class="fas fa-info-circle"></i> About<br>
                            <div class="dropdown-content">
                                <a href="ABOUTUS1.php">SpadeEMS</a>
                                <a href="https://www.spadelpu.com/">SpadeLPU</a>

                            </div>
                        </div>
                    </a>
                </div>
<br><br>

                <div class="mrg"><a style="padding: 0; padding-left: 32px;" href="#">
                        <div class="dropdown">
                            <i class="fas fa-table"></i> Events
                            <div class="dropdown-content">
                                <a href="spade events/index.php"><i class="fas fa-magic"></i> Our Events</a>
                                <a href="spade events/ai/index.php"><i class="fas fa-compass"></i> Artificial Intelligence</a>
                                <a href="spade events/gitaandvedant/index.php"><i class="fas fa-om"></i> Geeta and Vedant</a>
                                <a href="spade events/Event-Gallery/index.php"><i class="fas fa-bolt"></i> Gallery</a>

                            </div>
                        </div>
                    </a></div>
<br><br>
                <div class="mrg"><a href="skp/index.php"><i class="fas fa-square"></i> SKP</a></div>
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
<br><br>
                <div class="mrg"><a href="blog/index.php"><i class="fas fa-th"><br></i> Blog</a></div>
                <div class="mrg"><a href="internship/internship.php"><i class="fas fa-peace"></i> Internship</a></div>
                <div class="mrg"><a href="https://www.spadeems.org/"><i class="fas fa-clock"></i> Campus Ambassador</a></div>
                <div class="mrg"><a href="contact/contact.php"><i class="fas fa-envelope"></i> Contact</a></div>
            </div>


            <span style="font-size:40px;cursor:pointer; color: black;margin-top:0px;margin-left:0px" class="bar"onclick="openNav()">&#9776; </span>



            <img class="logo_img" style="margin-left:0px;"src="logo.png" alt="SpadeEms">
        </div>
       
    </nav>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>



</body>

</html>