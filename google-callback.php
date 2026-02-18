<?php
session_start();
require 'config.php';

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if (!isset($token['error'])) {

        $client->setAccessToken($token['access_token']);

        $google_service = new Google_Service_Oauth2($client);
        $data = $google_service->userinfo->get();

        $_SESSION['email'] = $data['email'];
        $_SESSION['name']  = $data['name'];

        header("Location: afterlogin.php");
        exit();
    }
}

?>