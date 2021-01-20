<style>
    .abcRioButton {
        width: 228px !important;
        background-color: transparent !important;
        border-radius: 10px;
        border: 2px solid #4285f4 !important;
    }

    .abcRioButtonContentWrapper {
        border-color: #4285f4 !important;
        border-radius: 10px;
    }

    .abcRioButtonIcon {
        background-color: transparent !important;
    }

    .abcRioButton .abcRioButtonContents span {
        color: #4285f4 !important;
        font-size: 1.5rem !important;
    }

    .abcRioButton.abcRioButtonLightBlue {
        margin: 0px;
        padding: 0px;
        width: 228px !important;
    }

    .abcRioButtonSvgImageWithFallback.abcRioButtonIconImage.abcRioButtonIconImage18 {
        height: 100%;

    }
</style>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="1042854806165-b41icvs7m9k1qfn8u507g390c0iu00pf.apps.googleusercontent.com"><!-- Update Google Key Here-->

<script>
    // $(".abcRioButtonContents span:contains(Sign in)").text("Log in With Google");

    function onSignIn(googleUser) {
        let id_token = googleUser.getAuthResponse().id_token;
        if (id_token) {
            $.getJSON("https://oauth2.googleapis.com/tokeninfo?id_token=" + id_token, function(response) {

                let exp = parseInt(response.exp);
                let now = Date.now() / 1000;

                if (now > exp) {
                    alert("Session Expired, Please Sign In Again!");
                    return;
                }

                let jsonObj = {
                    tokenid: id_token,
                    email: response.email,
                    method: "google"
                };

                let formData = new FormData();
                for (let i in jsonObj) {
                    formData.append(i, jsonObj[i]);
                }

                $.ajax({
                    type: 'POST', // Type of request to be send, called as method
                    url: "login-process.php", // Url to which the request is send
                    data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    cache: false, // To unable request pages to be cached
                    contentType: false, // The content type used when sending data to the server.
                    processData: false, // To send DOMDocument or non processed data file it is set to false
                    success: function(data, textStatus, jqXHR) { // A function to be called if request succeeds
                        console.log(textStatus + ": " + jqXHR.status);
                        alert("You successfully signed in using google");
                        location = "index.php";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus + ": " + jqXHR.status + " ");
                        alert("Acess Denied!");
                        location = "signout.php";
                    }
                });

            });
        }
    }
</script>