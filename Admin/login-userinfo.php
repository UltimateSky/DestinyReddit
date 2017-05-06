<?php
//REFERENCE:http://destinydevs.github.io/BungieNetPlatform/docs/Authentication

require_once ('../config.php');

$accesstoken = $_COOKIE["bungie_access_token"];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,'https://www.bungie.net/Platform/User/GetCurrentBungieAccount/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-API-KEY: '.$BUNGIE_API_X,
        'Authorization: Bearer '.$accesstoken
));

$userinfo = curl_exec($ch);
//$userinfo = json_decode($userinfo);

curl_close($ch);

?>

<html>
 <head>
  <title>Welcome to /r/DTG/</title>
 </head>
 <body>
    <h1>Admin - Login User Info</h1>
    <h2>[This is page should not be visible to public]</h2>
    <h3><?php echo $accesstoken ?></h3>
    <p><?php echo $userinfo ?></p>
 </body>
</html>