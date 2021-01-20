<?php
session_start();
$admin = false;
if (isset($_SESSION["access"]) && $_SESSION["access"] == "events") {
    $admin = true;
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $admin) {
    include_once("connect-to-db.php");

    $id = esc($_GET['id']);
    $event = array();
    $query = "select * from events where id = '$id'";
    $table = mysqli_query($dbRef, $query);
    while ($row = mysqli_fetch_array($table)) {
        $event =  $row;
    }

    $startDate = date("d F Y", strtotime($event["startDate"]));
    $endDate = date("d F Y", strtotime($event["endDate"]));
    $startTime = date("g:i A", strtotime($event["startTime"]));
    $endTime = date("g:i A", strtotime($event["endTime"]));
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
                "address": {
                    "@type": "PostalAddress",
                    "addressCountry": "India",
                    "addressLocality": "Jalandhar Cantt",
                    "addressRegion": "PB",
                    "postalCode": "144024",
                    "streetAddress": "167 New Defence Colony"
                },
                "founder": "Abhishek Kumar Jha",
                "email": "mailto:info@spadeems.com/",
                "contactPoint": [{
                    "@type": "ContactPoint",
                    "telephone": "+917508450610",
                    "contactType": "customer service",
                    "contactOption": "",
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
        <!--Title-->
        <title>Spade Event Management Services | Home</title>
        <!---->

        <!--Bootstrap CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!-- Datepicker -->
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
        <link rel="stylesheet" href="css/events.css">
        <link rel="stylesheet" href="css/main.css">
        <!---->

        <style>
            .btn-info {
                background-color: var(--blue) !important;
            }

            .custom-file-label:after {
                background-color: var(--blue) !important;
                color: white;
            }

            .btn-outline-lightblue:not(.active) {
                color: var(--blue) !important;
                background-color: transparent;
                border: 2px solid var(--blue) !important;
            }

            .btn-outline-lightblue.active {
                color: white !important;
                background-color: var(--blue) !important;
                border: 2px solid var(--blue) !important;
            }

            .btn-outline-lightblue .disabled {
                opacity: 0.2;
            }
        </style>
    </head>

    <body>
        <?php include("header.php"); ?>

        <section class="bg-dark-blue pt-5">
            <br><br>
            <h1 class="heading">
                Edit Event
            </h1>
            <div class="container mt-3">
                <section>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 mb-lg-0 mb-4 text-white">
                            <form method="POST" id="eventForm">
                                <div class="bg-gray p-5 rounded">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="eventId" name="eventId" maxlength="13" hidden value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="eventName" name="eventName" aria-describedby="eventNameHelp" placeholder="Name" maxlength="50" value="<?php echo $event['name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="eventStartDate" name="eventStartDate" aria-describedby="eventStartDateHelp" placeholder="Start Date" value="<?php echo $startDate; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="eventEndDate" name="eventEndDate" aria-describedby="eventEndDateHelp" placeholder="End Date" value="<?php echo $endDate; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="eventStartTime" name="eventStartTime" aria-describedby="eventStartTimeHelp" placeholder="Start Time" value="<?php echo $startTime; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="eventEndTime" name="eventEndTime" aria-describedby="eventEndTimeHelp" placeholder="End Time" value="<?php echo $endTime; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="eventLocation" name="eventLocation" aria-describedby="eventLocationHelp" list="locationList" placeholder="Location" maxlength="100" value="<?php echo $event['location']; ?>">
                                                <datalist id="locationList">
                                                    <option value="Online Webinar">Online Webinar</option>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="eventDescription" name="eventDescription" aria-describedby="eventDescriptionHelp" placeholder="Description" rows="4"><?php echo str_replace("<br>", "\n", $event['description']); ?></textarea>
                                                <small id="eventDescriptionHelp" class="form-text text-muted">Only first 400 characters will be visible on the card.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="eventLink" name="eventLink" aria-describedby="eventLinkHelp" placeholder="Link to register" maxlength="255" value="<?php echo $event['link']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <button type="button" id="eventLinkTest" class="btn btn-block py-2 btn-info bg-blue">Test link</button>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="eventWebsite" name="eventWebsite" aria-describedby="eventWebsiteHelp" placeholder="Website link" maxlength="255" value="<?php echo $event['website']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group text-center">
                                                <input type="text" id="eventImageName" name="eventImageName" hidden value="<?php echo $event['image']; ?>">
                                                <img src="img/<?php echo $event['image'] != "" ? $event['image'] : "noimage.png"; ?>" class="img-fluid" alt="uploaded image" id="eventImagePreview">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="eventImage" name="eventImage" accept="image/*">
                                                    <label class="custom-file-label" for="eventImage" id="eventImageLabel"><?php echo  $event['image'] != "" ? $event['image'] : "Uploaded image..."; ?></label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- mon tue wed thu fri sat sun -->
                                        <div class="col-md-12">
                                            <div class="custom-control custom-radio custom-control-inline my-1 p-0">
                                                <label class="btn rounded btn-outline-lightblue m-0" for="daily">Daily</label>
                                                <input type="radio" id="daily" name="occurence" class="custom-control-input occurence" hidden>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline my-1 p-0">
                                                <label class=" btn rounded btn-outline-lightblue m-0" for="weekends">Weekends</label>
                                                <input type="radio" id="weekends" name="occurence" class="custom-control-input occurence" hidden>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline my-1 p-0">
                                                <label class="btn rounded btn-outline-lightblue m-0" for="custom">Custom</label>
                                                <input type="radio" id="custom" name="occurence" class="custom-control-input occurence" hidden>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class=" btn-group btn-group-toggle flex-wrap">
                                                <label class="btn p-1 rounded btn-outline-lightblue mx-1 my-1" for="mon">
                                                    <input name="mon" class="day" type="checkbox" id="mon" name="mon" value="mon" <?php echo  strpos($event["days"], "mon") !== false ? "checked" : ""; ?>>MON
                                                </label>
                                                <label class="btn p-1 rounded btn-outline-lightblue mx-1 my-1" for="tue">
                                                    <input name="tue" class="day" type="checkbox" id="tue" name="tue" value="tue" <?php echo  strpos($event["days"], "tue") !== false ? "checked" : ""; ?>>TUE
                                                </label>
                                                <label class="btn p-1 rounded btn-outline-lightblue mx-1 my-1" for="wed">
                                                    <input name="wed" class="day" type="checkbox" id="wed" name="wed" value="wed" <?php echo  strpos($event["days"], "wed") !== false ? "checked" : ""; ?>>WED
                                                </label>
                                                <label class="btn p-1 rounded btn-outline-lightblue mx-1 my-1" for="thu">
                                                    <input name="thu" class="day" type="checkbox" id="thu" name="thu" value="thu" <?php echo  strpos($event["days"], "thu") !== false ? "checked" : ""; ?>>THU
                                                </label>
                                                <label class="btn p-1 rounded btn-outline-lightblue mx-1 my-1" for="fri">
                                                    <input name="fri" class="day" type="checkbox" id="fri" name="fri" value="fri" <?php echo  strpos($event["days"], "fri") !== false ? "checked" : ""; ?>>FRI
                                                </label>
                                                <label class="btn p-1 rounded btn-outline-lightblue mx-1 my-1" for="sat">
                                                    <input name="sat" class="day" type="checkbox" id="sat" name="sat" value="sat" <?php echo  strpos($event["days"], "sat") !== false ? "checked" : ""; ?>>SAT
                                                </label>
                                                <label class="btn p-1 rounded btn-outline-lightblue mx-1 my-1" for="sun">
                                                    <input name="sun" class="day" type="checkbox" id="sun" name="sun" value="sun" <?php echo  strpos($event["days"], "sun") !== false ? "checked" : ""; ?>>SUN
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-5">
                                            <button type="submit" id="submit" class="btn btn-block button">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <br><br>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!-- Datepicker -->
        <script>
            $(function() {
                $("#eventStartDate").datepicker({
                    dateFormat: "dd MM yy",
                });
                $("#eventEndDate").datepicker({
                    dateFormat: "dd MM yy",
                });
            });
            $(function() {
                $('#eventStartTime').timepicker({
                    timeFormat: 'h:mm p',
                    interval: 30,
                    startTime: '11:00',
                    dynamic: false,
                    dropdown: true,
                    scrollbar: true,
                    change: changeTime
                });
                $('#eventEndTime').timepicker({
                    timeFormat: 'h:mm p',
                    interval: 30,
                    dynamic: false,
                    startTime: '12:00',
                    dropdown: true,
                    scrollbar: true,
                    change: changeTime
                });

                checkOccurence();

                $(".day").change(function() {
                    if ($(this).is(":checked"))
                        $(this).parent().addClass("active");
                    else
                        $(this).parent().removeClass("active");
                    //occurence
                    let weekdays = ["mon", "tue", "wed", "thu", "fri"];
                    let weekends = ["sat", "sun"];
                    $(".active .day").each(function() {
                        let day = $(this).val();
                        let index = -1;
                        if ((index = weekdays.indexOf(day)) != -1) {
                            weekdays.splice(index, 1);
                        }
                        if ((index = weekends.indexOf(day)) != -1) {
                            weekends.splice(index, 1);
                        }
                    });
                    $(".occurence").prev().removeClass("active");
                    if (weekdays.length == 0 && weekends.length == 0) {
                        $('#daily').prop("checked", true);
                        $("#daily").prev().addClass("active");
                    } else if (weekdays.length == 5 && weekends.length == 0) {
                        $('#weekends').prop("checked", true);
                        $("#weekends").prev().addClass("active");
                    } else {
                        $('#custom').prop("checked", true);
                        $("#custom").prev().addClass("active");
                    }
                });
                $(".occurence").change(function() {
                    $(".occurence").prev().removeClass("active");
                    if ($(this).is(":checked")) {
                        $(this).prev().addClass("active");
                    } else
                        $(this).prev().removeClass("active");
                    //days
                    if ($("#daily").is(":checked")) {
                        $('.day').prop("checked", true);
                        $('.day').change();
                    } else if ($("#weekends").is(":checked")) {
                        $('.day').prop("checked", false);
                        $('#sat').prop("checked", true);
                        $('#sun').prop("checked", true);
                        $('.day ').change();
                    }
                });
                $("#eventEndDate,#eventStartDate").change(function() {

                    if ($("#eventStartDate").val() != "" && $("#eventEndDate").val() != "") {
                        let day = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"];

                        let startDate = new Date($("#eventStartDate").val());
                        let endDate = new Date($("#eventEndDate").val());

                        let DifferenceInTime = endDate.getTime() - startDate.getTime();
                        let DifferenceInDays = Math.ceil(DifferenceInTime / (1000 * 3600 * 24.0)) + 1;

                        if (DifferenceInDays <= 0) {
                            $(this).val("");
                            alert("Start date can't be ahead of end date!");
                            return false;
                        }

                        if (DifferenceInDays >= 7)
                            $('.day').prop("disabled", false).parent().removeClass("disabled");
                        else {
                            $('.day').prop("disabled", true).parent().addClass("disabled");
                            for (let i = 0; i < DifferenceInDays; i++) {
                                $("#" + day[(startDate.getDay() + i) % 7]).prop("disabled", false).parent().removeClass("disabled");
                            }
                        }
                    }
                });

                function changeTime() {
                    if ($("#eventStartTime").val() != "" && $("#eventEndTime").val() != "") {

                        let startTime = new Date("04/16/2020 " + $("#eventStartTime").val());
                        let endTime = new Date("04/16/2020 " + $("#eventEndTime").val());

                        let DifferenceInTime = endTime.getTime() - startTime.getTime();

                        if (DifferenceInTime <= 0) {
                            $(this).val("");
                            alert("Start time can't be ahead of end time!");
                            return false;
                        }
                    }
                }

                function checkOccurence() {
                    let weekdays = ["mon", "tue", "wed", "thu", "fri"];
                    let weekends = ["sat", "sun"];
                    $(".day").each(function() {
                        if ($(this).is(":checked")) {
                            $(this).parent().addClass("active");
                            let day = $(this).val();
                            let index = -1;
                            if ((index = weekdays.indexOf(day)) != -1) {
                                weekdays.splice(index, 1);
                            }
                            if ((index = weekends.indexOf(day)) != -1) {
                                weekends.splice(index, 1);
                            }
                        }
                    });
                    $(".occurence").prev().removeClass("active");
                    if (weekdays.length == 0 && weekends.length == 0) {
                        $('#daily').prop("checked", true);
                        $("#daily").prev().addClass("active");
                    } else if (weekdays.length == 5 && weekends.length == 0) {
                        $('#weekends').prop("checked", true);
                        $("#weekends").prev().addClass("active");
                    } else {
                        $('#custom').prop("checked", true);
                        $("#custom").prev().addClass("active");
                    }
                }
                $("#eventLinkTest").click(function() {
                    if ($("#eventLink").val() != "")
                        window.open($("#eventLink").val(), "_blank");
                });
                //-------------------------------------------------
                $("#eventForm").on('submit', (function(e) {
                    $(".day").each(function() {
                        if ($(this).is(":disabled"))
                            $(this).prop("checked", false);
                    });
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: 'POST', // Type of request to be send, called as method
                        url: "events-edit-process.php", // Url to which the request is send
                        data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                        cache: false, // To unable request pages to be cached
                        contentType: false, // The content type used when sending data to the server.
                        processData: false, // To send DOMDocument or non processed data file it is set to false
                        success: function(data, textStatus, jqXHR) { // A function to be called if request succeeds
                            console.log(textStatus + ": " + jqXHR.status);
                            location = "events.php";
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus + ": " + jqXHR.status + " ");
                            alert("Error Occured, Try Again!");
                        }
                    });
                }));
                $("#eventImage").change(function() {
                    showpreview($(this)[0], $("#eventImagePreview"));
                });

                function showpreview(file, ref) {

                    if (file.files && file.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $(ref).prop('src', e.target.result);
                        };
                        reader.readAsDataURL(file.files[0]);
                    }
                }
            });
        </script>
    <?php include("chat.php"); ?>
    </body>
    </html>
<?php
} else {
    header("location:index.php");
}
?>