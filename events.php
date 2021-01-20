<?php
session_start();
$admin = false;
if (isset($_SESSION["access"]) && $_SESSION["access"] == "events") {
    $admin = true;
}

include_once("connect-to-db.php");
$ongoingEvents = array();
$query = "select * from events where startDate <= CURDATE() and CURDATE() <= endDate order by endDate desc limit 3";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
    $ongoingEvents[] =  $row;
}

$upcomingEvents = array();
$query = "select * from events where CURDATE() < startDate order by endDate desc limit 3";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
    $upcomingEvents[] =  $row;
}

$successfulEvents = array();
$query = "select * from events where endDate < CURDATE() order by endDate desc limit 3";
$table = mysqli_query($dbRef, $query);
while ($row = mysqli_fetch_array($table)) {
    $successfulEvents[] =  $row;
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

    <!--Title-->
    <title>Spade Event Management Services | Events</title>
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

    <!--External Css File-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/previous_events.css">
    <!---->

    <style>
        .events .close i:hover {
            color: var(--danger) !important;
        }

        .events .edit i:hover {
            color: var(--blue) !important;
        }

        .edit:hover {
            opacity: 0.75;
        }

        .edit {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            float: left;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
        }
    </style>
</head>

<body>

    <?php include("header.php"); ?>

    <?php
    if (!empty($ongoingEvents)) {
    ?>
        <section class="bg-dark-blue py-5 mt-5 events">

            <h2 class="heading pt-5">Our ongoing
                Events
            </h2>
            <div class="container mt-5">

                <section class="pb-5">

                    <div class="row justify-content-md-center">
                        <?php
                        $cardId = 1;
                        foreach ($ongoingEvents as $event) {

                            $startDate = date("j F Y", strtotime($event["startDate"]));
                            $endDate = date("j F Y", strtotime($event["endDate"]));
                            $startTime = date("g:i A", strtotime($event["startTime"]));
                            $endTime = date("g:i A", strtotime($event["endTime"]));
                            $website = false;
                            if ($event["website"])
                                $website = true;
                        ?>
                            <div class="col-lg-4 col-md-6 card-parent">
                                <div class="card mb-3" id="card1<?php echo $cardId; ?>">
                                    <div class="card-img-overlay card-front">
                                        <?php
                                        if ($admin) {
                                        ?>
                                            <form method="GET" class="eventForm position-relative">
                                                <input type="text" class="form-control" name="id" maxlength="13" value="<?php echo $event['id'] ?>" hidden>
                                                <button type="submit" class="edit ml-2 mt-2" aria-label="Edit" data-toggle="tooltip" data-placement="top" title="Edit Event" formaction="events-edit.php">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="submit" class="close mr-2 mt-2" aria-label="Close" data-toggle="tooltip" data-placement="top" title="Delete Event">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                        <?php
                                        }
                                        ?>
                                        <style>
                                            <?php echo "#card1" . $cardId; ?>:before {
                                                background-image: url(<?php echo "img/" . ($event['image'] != "" ? $event['image'] : "noimage.png"); ?>);
                                            }
                                        </style>
                                        <div class="content">
                                            <h2 class="title"><?php echo $event["name"] ?></h2>
                                            <ul style="list-style-type: none;">
                                                <li><?php echo $startDate . " - " . $endDate ?></li>
                                                <li><?php echo $startTime . " - " . $endTime ?></li>
                                                <li><?php echo $event["location"]; ?></li>
                                                <li class="days" hidden>
                                                    <span class="<?php echo  strpos($event['days'], 'mon') !== false ? 'active' : ''; ?>">MON</span>
                                                    <span class="<?php echo  strpos($event['days'], 'tue') !== false ? 'active' : ''; ?>">TUE</span>
                                                    <span class="<?php echo  strpos($event['days'], 'wed') !== false ? 'active' : ''; ?>">WED</span>
                                                    <span class="<?php echo  strpos($event['days'], 'thu') !== false ? 'active' : ''; ?>">THU</span>
                                                    <span class="<?php echo  strpos($event['days'], 'fri') !== false ? 'active' : ''; ?>">FRI</span>
                                                    <span class="<?php echo  strpos($event['days'], 'sat') !== false ? 'active' : ''; ?>">SAT</span>
                                                    <span class="<?php echo  strpos($event['days'], 'sun') !== false ? 'active' : ''; ?>">SUN</span>
                                                </li>
                                                <?php
                                                if ($website) {
                                                ?>
                                                    <li class="mb-2"><a href="<?php echo $event['website']; ?>" style="color: white!important;">View More</a></li>
                                                <?php
                                                } else if ($event['description']) {
                                                ?>
                                                    <li><a class="btn btn-link" style="color: white!important;">View more</a></li>
                                                <?php
                                                }
                                                if ($event['link']) {
                                                ?>
                                                    <li> <a class="btn btn-card" href="<?php echo $event['link'] ?>" target="_blank">Register</a></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                    if (!$website && $event['description']) {
                                    ?>
                                        <div class="card-img-overlay card-back text-justify p-4" style="display: none;">
                                            <?php echo $event['description']; ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php
                            $cardId++;
                        }
                        ?>
                    </div>
                </section>
            </div>
        </section>
    <?php
    }
    if (!empty($upcomingEvents) || empty($ongoingEvents)) {
    ?>
    <section class="bg-white py-5 events">

        <h2 class="heading pt-5">Our upcoming
            Events
        </h2>
        <div class="container mt-5">

            <section class="pb-5">

                <div class="row justify-content-md-center">
                    <?php
                    if (empty($upcomingEvents)) {
                    ?>
                        <div class="col-lg-12 col-md-12 card-parent">

                            <div class="card mb-3" id="cardno">

                                <div class="card-img-overlay card-front">
                                    <style>
                                        #cardno:before {
                                            background-image: url("https://raw.githubusercontent.com/spadeems/web/master/img/events/no_events.png");
                                            background-size: contain;
                                            background-repeat: no-repeat;
                                        }
                                    </style>
                                    <div style="align-self:center;">
                                        <h2 class="title">&nbsp;</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    $cardId = 1;
                    foreach ($upcomingEvents as $event) {
                        $startDate = date("j F Y", strtotime($event["startDate"]));
                        $endDate = date("j F Y", strtotime($event["endDate"]));
                        $startTime = date("g:i A", strtotime($event["startTime"]));
                        $endTime = date("g:i A", strtotime($event["endTime"]));
                        $website = false;
                        if ($event["website"])
                            $website = true;
                    ?>
                        <div class="col-lg-4 col-md-6 card-parent">
                            <div class="card mb-3" id="card2<?php echo $cardId; ?>">
                                <div class="card-img-overlay card-front">
                                    <?php
                                    if ($admin) {
                                    ?>

                                        <form method="GET" class="eventForm">
                                            <input type="text" class="form-control" name="id" maxlength="13" value="<?php echo $event['id'] ?>" hidden>
                                            <button type="submit" class="edit ml-2 mt-2" aria-label="Edit" data-toggle="tooltip" data-placement="top" title="Edit Event" formaction="events-edit.php">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="submit" class="close mr-2 mt-2" aria-label="Close" data-toggle="tooltip" data-placement="top" title="Delete Event">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>

                                    <?php
                                    }
                                    ?>
                                    <style>
                                        <?php echo "#card2" . $cardId; ?>:before {
                                            background-image: url(<?php echo "img/" . ($event['image'] != "" ? $event['image'] : "noimage.png"); ?>);
                                        }
                                    </style>
                                    <div class="content">
                                        <h2 class="title"><?php echo $event["name"] ?></h2>
                                        <ul style="list-style-type: none;">
                                            <li><?php echo $startDate . " - " . $endDate ?></li>
                                            <li><?php echo $startTime . " - " . $endTime ?></li>
                                            <li><?php echo $event["location"] ?></li>
                                            <li class="days" hidden>
                                                <span class="<?php echo  strpos($event['days'], 'mon') !== false ? 'active' : ''; ?>">MON</span>
                                                <span class="<?php echo  strpos($event['days'], 'tue') !== false ? 'active' : ''; ?>">TUE</span>
                                                <span class="<?php echo  strpos($event['days'], 'wed') !== false ? 'active' : ''; ?>">WED</span>
                                                <span class="<?php echo  strpos($event['days'], 'thu') !== false ? 'active' : ''; ?>">THU</span>
                                                <span class="<?php echo  strpos($event['days'], 'fri') !== false ? 'active' : ''; ?>">FRI</span>
                                                <span class="<?php echo  strpos($event['days'], 'sat') !== false ? 'active' : ''; ?>">SAT</span>
                                                <span class="<?php echo  strpos($event['days'], 'sun') !== false ? 'active' : ''; ?>">SUN</span>
                                            </li>
                                            <?php
                                            if ($website) {
                                            ?>
                                                <li class="mb-2"><a href="<?php echo $event['website']; ?>" style="color: white!important;">View More</a></li>
                                            <?php
                                            } else if ($event['description']) {
                                            ?>
                                                <li><a class="btn btn-link" style="color: white!important;">View more</a></li>
                                            <?php
                                            }
                                            if ($event['link']) {
                                            ?>
                                                <li> <a class="btn btn-card" href="<?php echo $event['link'] ?>" target="_blank">Register</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                if (!$website && $event['description']) {
                                ?>
                                    <div class="card-img-overlay card-back text-justify p-4" style="display: none;">
                                        <?php echo $event['description']; ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                        $cardId++;
                    }
                    ?>
                    <?php
                    if ($admin) {
                    ?>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <style>
                                #card-add:before {
                                    background-image: url("https://raw.githubusercontent.com/spadeems/web/master/img/events/add-event.png");
                                }
                            </style>
                            <a href="events-add.php" class="btn w-100" data-toggle="tooltip" data-placement="bottom" title="Add an event">
                                <div class="card" id="card-add">
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </section>

        </div>
    </section>
    <?php
    }
    ?>
    <section class="bg-dark-blue py-5 events" id="successful">
        <h2 class="heading pt-5 text-white">Our Recently Completed Events
        </h2>
        <div class="container mt-5">

            <section class="pb-5">

                <div class="row justify-content-md-center">
                    <?php
                    $cardId = 1;
                    foreach ($successfulEvents as $event) {
                        $startDate = date("j F Y", strtotime($event["startDate"]));
                        $endDate = date("j F Y", strtotime($event["endDate"]));
                        $startTime = date("g:i A", strtotime($event["startTime"]));
                        $endTime = date("g:i A", strtotime($event["endTime"]));
                        $website = false;
                        if ($event["website"])
                            $website = true;
                    ?>
                        <div class="col-lg-4 col-md-6 card-parent">

                            <div class="card mb-3" id="card3<?php echo $cardId; ?>">

                                <div class="card-img-overlay card-front">
                                    <?php
                                    if ($admin) {
                                    ?>

                                        <form method="GET" class="eventForm">
                                            <input type="text" class="form-control" name="id" maxlength="13" value="<?php echo $event['id'] ?>" hidden>
                                            <button type="submit" class="edit ml-2 mt-2" aria-label="Edit" data-toggle="tooltip" data-placement="top" title="Edit Event" formaction="events-edit.php">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="submit" class="close mr-2 mt-2" aria-label="Close" data-toggle="tooltip" data-placement="top" title="Delete Event">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>

                                    <?php
                                    }
                                    ?>
                                    <style>
                                        <?php echo "#card3" . $cardId; ?>:before {
                                            background-image: url(<?php echo "img/" . ($event['image'] != "" ? $event['image'] : "noimage.png"); ?>);
                                        }
                                    </style>
                                    <div class="content">
                                        <h2 class="title"><?php echo $event["name"] ?></h2>
                                        <ul style="list-style-type: none;">
                                            <li><?php echo $startDate . " - " . $endDate ?></li>
                                            <li><?php echo $startTime . " - " . $endTime ?></li>
                                            <li><?php echo $event["location"] ?></li>
                                            <li class="days" hidden>
                                                <span class="<?php echo  strpos($event['days'], 'mon') !== false ? 'active' : ''; ?>">MON</span>
                                                <span class="<?php echo  strpos($event['days'], 'tue') !== false ? 'active' : ''; ?>">TUE</span>
                                                <span class="<?php echo  strpos($event['days'], 'wed') !== false ? 'active' : ''; ?>">WED</span>
                                                <span class="<?php echo  strpos($event['days'], 'thu') !== false ? 'active' : ''; ?>">THU</span>
                                                <span class="<?php echo  strpos($event['days'], 'fri') !== false ? 'active' : ''; ?>">FRI</span>
                                                <span class="<?php echo  strpos($event['days'], 'sat') !== false ? 'active' : ''; ?>">SAT</span>
                                                <span class="<?php echo  strpos($event['days'], 'sun') !== false ? 'active' : ''; ?>">SUN</span>
                                            </li>
                                            <?php
                                            if ($website) {
                                            ?>
                                                <li><a href="<?php echo $event['website']; ?>" style="color: white!important;">View More</a></li>
                                            <?php
                                            } else if ($event['description']) {
                                            ?>
                                                <li><a class="btn btn-link" style="color: white!important;">View more</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php
                                if (!$website && $event['description']) {
                                ?>
                                    <div class="card-img-overlay card-back text-justify p-4" style="display: none;">
                                        <?php echo $event['description']; ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                        $cardId++;
                    }
                    ?>
                </div>
            </section>

        </div>
    </section>
    <section class="bg-white py-5 events" id="previous">
        <h2 class="heading pt-5">Directory of past events
        </h2>
        <div class="container mt-5">
            <div class="cd-slider-wrapper">
                <ul class="cd-slider" data-step1="M1402,800h-2V0h1c0.6,0,1,0.4,1,1V800z" data-step2="M1400,800H379L771.2,0H1399c0.6,0,1,0.4,1,1V800z" data-step3="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" data-step4="M-2,800h2V0h-1c-0.6,0-1,0.4-1,1V800z" data-step5="M0,800h1021L628.8,0L1,0C0.4,0,0,0.4,0,1L0,800z" data-step6="M0,800h1400V0L1,0C0.4,0,0,0.4,0,1L0,800z">
                    <li class="visible">
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-1">
                                        <path id="cd-changing-path-1" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/1.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>

                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-2">
                                        <path id="cd-changing-path-2" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/2.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>

                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-3">
                                        <path id="cd-changing-path-3" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/3.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>

                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-4">
                                        <path id="cd-changing-path-4" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/4.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>

                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-6">
                                        <path id="cd-changing-path-6" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-6)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/6.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>

                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-7">
                                        <path id="cd-changing-path-7" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-7)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/7.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>
                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-8">
                                        <path id="cd-changing-path-8" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-8)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/8.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>
                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-9">
                                        <path id="cd-changing-path-9" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-9)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/9.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>
                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-10">
                                        <path id="cd-changing-path-10" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-10)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/10.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>
                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-11">
                                        <path id="cd-changing-path-11" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-11)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/11.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>
                    <li>
                        <div class="cd-svg-wrapper">
                            <svg viewBox="0 0 1400 800">
                                <title>Event Portfolio</title>
                                <defs>
                                    <clipPath id="cd-image-12">
                                        <path id="cd-changing-path-12" d="M1400,800H0V0h1399c0.6,0,1,0.4,1,1V800z" />
                                    </clipPath>
                                </defs>

                                <image height='800px' width="1400px" clip-path="url(#cd-image-12)" xlink:href="https://raw.githubusercontent.com/spadeems/web/master/img/events/previous/12.jpg"></image>
                            </svg>
                        </div> <!-- .cd-svg-wrapper -->
                    </li>
                </ul> <!-- .cd-slider -->

                <ul class="cd-slider-navigation">
                    <li><a href="#0" class="next-slide">Next</a></li>
                    <li><a href="#0" class="prev-slide">Prev</a></li>
                </ul> <!-- .cd-slider-navigation -->

                <ol class="cd-slider-controls">
                    <li class="selected"><a href="#0"><em>Item 1</em></a></li>
                    <li><a href="#0"><em>Item 2</em></a></li>
                    <li><a href="#0"><em>Item 3</em></a></li>
                    <li><a href="#0"><em>Item 4</em></a></li>
                    <li><a href="#0"><em>Item 5</em></a></li>
                    <li><a href="#0"><em>Item 6</em></a></li>
                    <li><a href="#0"><em>Item 7</em></a></li>
                    <li><a href="#0"><em>Item 8</em></a></li>
                    <li><a href="#0"><em>Item 9</em></a></li>
                    <li><a href="#0"><em>Item 10</em></a></li>
                    <li><a href="#0"><em>Item 11</em></a></li>
                </ol> <!-- .cd-slider-controls -->
            </div> <!-- .cd-slider-wrapper -->
        </div>
    </section>

    <?php include("footer.php"); ?>

    <!--Bootstrap links-->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/snap.svg-min.js"></script>
    <!---->

    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
    <script src="js/previous_events.js"></script>

    <script>
        let x = 24;
        $(document).ready(function() {
            $("#basicExampleNav .nav-link:contains(Events)").addClass("active");
            <?php
            if ($admin) {
            ?>
                $(".close").click(function() {
                    $(this).addClass("clicked");
                });
                $(".eventForm").submit(function(e) {
                    if ($(this).find(".close").hasClass("clicked")) {
                        $(this).find(".close").removeClass("clicked");
                        e.preventDefault();
                        var formData = new FormData(this);
                        $.ajax({
                            type: 'POST', // Type of request to be send, called as method
                            url: "events-delete-process.php", // Url to which the request is send
                            data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                            cache: false, // To unable request pages to be cached
                            contentType: false, // The content type used when sending data to the server.
                            processData: false, // To send DOMDocument or non processed data file it is set to false
                            success: function(data, textStatus, jqXHR) { // A function to be called if request succeeds
                                console.log(textStatus + ": " + jqXHR.status);
                                location.href = "events.php";
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.log(textStatus + ": " + jqXHR.status + " ");
                                alert("Error Occured, Try Again!");
                            }
                        });
                    }
                });
            <?php
            }
            ?>
        });
    </script>
    <?php include("chat.php"); ?>
</body>

</html>