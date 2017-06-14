<?php
use Contentful\Delivery\Client;
require_once __DIR__ . '/vendor/autoload.php';
$spaceID = 'wjaul0uqh9mi';
$accessToken = '87f82c16ddb35bad4d641a7c7f7fda5d8e658a398cc8868cab32742b25918e67';
$client = new Client($accessToken, $spaceID);
$entries = $client->getEntries();

print_r($entries); 

?>
<body id="page-top">
<?php
 //require 'includes.php';
 //include 'menu.php';
 //include 'header-part.php';
 //include 'about.php';
 //include 'portpolio.php';
 //include 'services.php';
 //include 'contact.php';

?>




