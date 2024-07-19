<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Donor | BloodVault</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<?php
   require_once '../googlelogin.php';
   if (isset($_GET['code'])) {
      $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
      $client->setAccessToken($token['access_token']);
    
      // get profile info
      $google_oauth = new Google_Service_Oauth2($client);
      $google_account_info = $google_oauth->userinfo->get();
      $userInfo = [
        'email' => $google_account_info['email'],
        'firstName' => $google_account_info['givenName'],
        'lastName' => $google_account_info['familyName'],
        'verifiedEmail' => $google_account_info['verifiedEmail'],
        'token' => $google_account_info['id']
      ];

      $sql = "SELECT * FROM donor WHERE email = '{$userInfo['email']}'";

      $result = $conn->query($sql);
      if(mysqli_num_rows($result) > 0){
        $info = mysqli_fetch_assoc($result);
        $token = $userInfo['token'];
      }
      else{
        $sql = "INSERT INTO donor (firstname,lastname,email) VALUES ('{$userInfo['firstName']}','{$userInfo['lastName']}','{$userInfo['email']}')";
        }
        $result = $conn->query($sql);
        if($result){
            $token = $userInfo['token'];
        }
        else{
            echo "User is not created";
            die();
        }
        $_SESSION['user_token'] = $token;
  
        if(!isset($_SESSION['user_token'])){
          header("Location: ../index.php");
          die();
        }
      }
 ?>