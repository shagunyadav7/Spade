<?php
session_start();
if (isset($_SESSION["spadeadmin"])) {
    if (isset($_SERVER['HTTP_REFERER'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Event Management Services">
    <meta name="keywords" content="spade,lpu,spadeems,spadelpu,Abhishekjha,pooja">
    <meta name="author" content="Suraj Mani">
    <link rel="canonical" href="https://spadeems.com/">
    <meta property="og:title" content="SPADE EMS">
    <meta property="og:url" content="https://spadeems.com/">
    <meta property="og:image" content="img/favicon.png">
    <meta property="og:description" content="Event Management Services">
    <meta property="og:locale" content="en_IN">
    <meta property="og:site_name" content="spadeems">
    <meta name="twitter:card" content="Event Management Services">
    <meta name="twitter:site" content="@EmsSpade">
    <meta name="twitter:creator" content="@EmsSpade">
    <meta name="twitter:title" content="SPADE EMS">
    <meta name="twitter:description" content="Event Management Services">
    <meta name="twitter:image" content="img/favicon.png">
    <!---->
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-P9B3G3J"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "SPADE Event Management Services Private Limited",
            "alternateName": "SPADE EMS",
            "url": "https://spadeems.com/",
            "logo": "https://spadeems.com/img/logo.png",
			"image": "https://spadeems.com/img/brand-logo-white.png",
			"description": "SPADE is a team of experienced professionals who are guided by their own passion to deliver exhilarating outcomes in the fields of marketing, technical, events, advertising, brand promotions, as well as in exhibitions. With our creative minds at work. We offer the most innovative solutions to help clients take their brands to a whole new level.",
            "priceRange": "$$",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "167 New Defence Colony",
				"addressLocality": "Jalandhar Cantt",
				"addressRegion": "PB",
				"postalCode": "144024",
				"addressCountry": "India"
			  },
            "founder": "Abhishek Kumar Jha",
            "email": "mailto:info@spadeems.com/",
			"telephone": "+917508450610",
			"geo": {
			"@type": "GeoCoordinates",
			"latitude": "31.283247",
			"longitude": "75.6536515"
			},
			"hasMap": "https://g.page/spade-ems",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+917508450610",
                "contactType": "customer service",
                "areaServed": "IN",
                "availableLanguage": ["en", "Hindi"]
            }],
            "sameAs": [
                "https://www.facebook.com/marketingspade/",
                "https://twitter.com/EmsSpade",
                "https://www.instagram.com/marketingspade/",
                "https://www.youtube.com/spadeems/",
                "https://www.linkedin.com/company/marketingspade/",
                "https://in.pinterest.com/spadeems/",
                "https://spadeems.com/",
                "https://wa.me/917508450610"
            ]
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165834254-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-165834254-1');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NC3RLGK');
    </script>
    <!-- End Google Tag Manager -->
    <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=ecda7d6659e59' async='true'></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "ff58910b-bdab-4803-82d4-264b2f9e67a1",
            });
        });
    </script>

    <!--External Css File-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/main.css">
    <!---->

    <!--Title-->
    <title>Spade Event Management Services | Home</title>
    <!---->

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!---->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!---->

    <!--Font Awesome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!---->
    <style>
        .navbar-start {
            background-image: var(--blue-linear-gradient) !important;
        }

        .navbar-start .nav-link {
            color: white !important;
        }
    </style>
</head>

<body>

    <?php include("header.php"); ?>

    <section class="bg-dark-blue py-5 mt-5" id="events">
        <h2 class="heading">Login</h2>
        <div class="container">
            <section class="my-5">
                <form class="needs-validation" id="loginForm" novalidate>
                    <!-- .row starts -->
                    <div class="row">
                        <div class="col-xl-3 border-right offset-xl-3 col-lg-4 offset-lg-2 col-md-5 offset-md-1 col-sm-6 ">
                            <center class=" text-sm-left">
                                <!-- .form-row starts -->
                                <div class="form-row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <label for="email" class="font-weight-bold d-none d-md-block">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required style="width: 228px !important;">
                                        <div class="invalid-feedback">
                                            Enter your Email?
                                        </div>
                                    </div>
                                </div>
                                <!-- .form-row ends -->
                                <!-- .form-row starts -->
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">

                                        <label for="password" class="font-weight-bold d-none d-md-block">Password</label>
                                        <input type="password" class="form-control " name="password" placeholder="Password" required style="width: 228px !important;">
                                        <div class="invalid-feedback">
                                            Enter your password?

                                        </div>
                                    </div>
                                    <!-- .form-row ends -->
                            </center>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-3 col-sm-6 mt-3 text-center text-sm-left">

                            <button class="button bg-transparent mb-3 py-0" type="submit" id="login" style="width: 228px !important;">Login</button>
                            <!-- Google signin button -->
                            <center class=" text-sm-left">
                                <div class="g-signin2 mb-3" data-onsuccess="onSignIn"></div>
                            </center>
                            <!-- Facebook signin button -->
<!--                             
                            <div class="fb-login-button" data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="true" data-use-continue-as="false" data-width="" scope="public_profile,email" onlogin="checkLoginState();"></div> -->

                        </div>
                </form>

        </div>
        <!-- .row ends -->

    </section>
    </div>
    </section>

    <?php include("footer.php"); ?>

    <!--Bootstrap links-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!---->
    <script src="js/main.js"></script>

    <script>
        //-----------------------------------------------------------------
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        //-----------------------------------------------------------------
        $("#loginForm").submit(function(e) {
            e.preventDefault();
            if (this.checkValidity() === false)
                return false;
            var formData = new FormData(this);
            $.ajax({
                type: 'POST', // Type of request to be send, called as method
                url: "login-process.php", // Url to which the request is send
                data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                cache: false, // To unable request pages to be cached
                contentType: false, // The content type used when sending data to the server.
                processData: false, // To send DOMDocument or non processed data file it is set to false
                success: function(data, textStatus, jqXHR) { // A function to be called if request succeeds
                    console.log(textStatus + ": " + jqXHR.status);
                    location = "index.php";
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus + ": " + jqXHR.status + " ");
                    alert("Invalid password or email!");
                }
            });
        });
    </script>

    <?php include("login-google.php"); ?>
    <?php //include("login-facebook.php"); ?>
    <?php include("chat.php"); ?>
</body>

</html>