<?php

$dbRef = mysqli_connect("localhost:3307", "root", "", "spadeems_events"); //to establish connection to database

// $msg=mysqli_connect_error();
// if($msg=="")
// 	echo "Connnected...";
// else
// 	echo $msg;

function esc(String $value)
{
    global $dbRef;
    $val = trim($value);
    $val = mysqli_real_escape_string($dbRef, $value);
    return $val;
}
