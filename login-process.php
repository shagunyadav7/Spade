<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once("connect-to-db.php");

http_response_code(500);

if (isset($_POST["method"]) && $_POST["method"] == "google") { //Google Sign In
    $email = esc($_POST["email"]);
    $tokenId = esc($_POST["tokenid"]);

    $query = "select access from spadeadmin where email = '$email' and method = 'google';"; //get account corresponding to email
    $table = mysqli_query($dbRef, $query); //execute query and store results

    if ($table && mysqli_num_rows($table) != 0) {
        $row = mysqli_fetch_array($table); //convert the object into array
        $_SESSION["access"] = $row["access"];
        $_SESSION["spadeadmin"] = $tokenId;
        $_SESSION["method"] = "google";


        $sqlQuery = "update spadeadmin set signedOn = NOW(), password = '$tokenId' where email = '$email' and method = 'google'";
        mysqli_query($dbRef, $sqlQuery);

        $msg = mysqli_error($dbRef);
        if ($msg == "") {
            http_response_code(201);
        }
    }
} else if (isset($_POST["method"]) && $_POST["method"] == "facebook") { //Facebook Sign In
    $email = esc($_POST["email"]);
    $tokenId = esc($_POST["tokenid"]);

    $query = "select access from spadeadmin where email = '$email' and method = 'facebook';"; //get account corresponding to email
    $table = mysqli_query($dbRef, $query); //execute query and store results

    if ($table && mysqli_num_rows($table) != 0) {
        $row = mysqli_fetch_array($table); //convert the object into array
        $_SESSION["access"] = $row["access"];
        $_SESSION["spadeadmin"] = $tokenId;
        $_SESSION["method"] = "facebook";

        $sqlQuery = "update spadeadmin set signedOn = NOW(), password = '$tokenId' where email = '$email' and method = 'facebook'";
        mysqli_query($dbRef, $sqlQuery);

        $msg = mysqli_error($dbRef);
        if ($msg == "") {
            http_response_code(201);
        }
    }
} else {

    $email = esc($_POST["email"]);
    $password = md5(esc($_POST["password"]));

    $query = "select access from spadeadmin where email = '$email' and password = '$password' and method = 'default'"; //get account corresponding to email and password
    $table = mysqli_query($dbRef, $query); //execute query and store results

    if ($table && mysqli_num_rows($table) != 0) {
        $row = mysqli_fetch_array($table); //convert the object into array
        $_SESSION["access"] = $row["access"];
        $_SESSION["spadeadmin"] = $email;
        $_SESSION["method"] = "default";

        $sqlQuery = "update spadeadmin set signedOn = NOW() where email = '$email' and method = 'default'";
        mysqli_query($dbRef, $sqlQuery);

        $msg = mysqli_error($dbRef);
        if ($msg == "") {
            http_response_code(201);
        }
    }
}
