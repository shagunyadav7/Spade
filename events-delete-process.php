<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once("connect-to-db.php");

http_response_code(500);

$admin = false;
if (isset($_SESSION["access"]) && $_SESSION["access"] == "events") {
    $admin = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $admin) {

    $id = esc($_POST["id"]);
    include_once("connect-to-db.php");
    $query = "delete from events where id='$id'";
    mysqli_query($dbRef, $query);

    if (mysqli_affected_rows($dbRef) != 0) {
        http_response_code(201);
        echo "Event Deleted Succesfully";
    }
} else {
    header("location:index.php");
}
