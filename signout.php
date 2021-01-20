<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!-- Google signout -->
<div class="g-signin2 mb-3" data-onsuccess="onSignIn" hidden></div>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="1042854806165-b41icvs7m9k1qfn8u507g390c0iu00pf.apps.googleusercontent.com"><!-- Update Key Here-->
<script>
    function onSignIn(googleUser) {

        var auth2 = gapi.auth2.getAuthInstance();

        if (auth2 != null) {
            auth2.signOut().then(auth2.disconnect().then());
            console.log('User signed out.');
        }
    };
</script>
<!---->
<?php
session_destroy(); //Delete all session variables
echo "<h1>User Signed Out...";
$referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
if (!empty($referer)) {
    echo '<p><a href="' . $referer . '" title="Return to the previous page">&laquo; Go back</a></p>';
} else {

    echo '<p><a href="javascript:history.go(-1)" title="Return to the previous page">&laquo; Go back</a></p>';
}
echo "</h1>";
?>