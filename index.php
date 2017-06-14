<?php
//echo "Hello"; exit;
//include 'header.php';
//include 'slider.php';
//include 'view.php';
use Contentful\Delivery\Client;
require_once __DIR__ . '/vendor/autoload.php';
$spaceID = 'wjaul0uqh9mi';
$accessToken = '87f82c16ddb35bad4d641a7c7f7fda5d8e658a398cc8868cab32742b25918e67';
$client = new Client($accessToken, $spaceID);
$entries = $client->getEntries();
echo "hello";
print_r($entries);
//include 'footer.php';
?>