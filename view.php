<body id="page-top">
<?php

use Contentful\Delivery\Client;
echo $path = __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

$spaceID = 'wjaul0uqh9mi';
$accessToken = '87f82c16ddb35bad4d641a7c7f7fda5d8e658a398cc8868cab32742b25918e67';

$client = new Client($accessToken, $spaceID);
print_r($client);
$entries = $client->getEntries(); 


print_r($entries);








 //require 'includes.php';
 //include 'menu.php';
 //include 'header-part.php';
 //include 'about.php';
 //include 'portpolio.php';
 //include 'services.php';
 //include 'contact.php';

?>




