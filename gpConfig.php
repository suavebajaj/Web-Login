<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '398491076542-hha8oj7iv84v3ijkh5tuo8fnak43021k.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'ziwj_R27XeKN_nMQBTCBjo2j'; //Google client secret
$redirectURL = 'http://localhost/google_login/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Suave_Web_Login');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>