<body id="page-top">
<?php
 //require 'includes.php';
 //include 'menu.php';
 //include 'header-part.php';
 //include 'about.php';
 //include 'portpolio.php';
 //include 'services.php';
 //include 'contact.php';
 
use Contentful\Delivery\Client;

require_once __DIR__ . '/vendor/autoload.php';

$spaceID = 'wjaul0uqh9mi';
$accessToken = '87f82c16ddb35bad4d641a7c7f7fda5d8e658a398cc8868cab32742b25918e67';

$client = new Client($accessToken, $spaceID);

$entries = $client->getEntries();   

if (count($entries) === 0) {
    echo "Ups, you got no entries in your space. How about creating some?<br />";
}
else {
    echo "You have entries with these IDs:<br />";
		print_r($entries);
		//$menuitems = array(); 
			
		// contentful.php 1.0
		//$client = new Contentful\Delivery\Client($spaceID, '<content_delivery_api_key>');
		//$asset = $client->getAsset('5hzwHleBgsoqAKQyEiqCWC');
			//echo "<pre>";
			//$assets = json_encode($client->getAssets(), JSON_PRETTY_PRINT);
			//$assets_obj = json_decode( $assets, true );
				//foreach($assets_obj['items'] as $item) {
					//echo "<pre>";
					//print_r($item['fields']['file']['url']);			
				//}
			//print_r($assets_obj);
		//$json = json_encode($client->getAsset('5hzwHleBgsoqAKQyEiqCWC'), JSON_PRETTY_PRINT);
		//$obj2 = json_decode( $json, true );
	  //print_r($obj2['fields']['file']['url']);
	
	
} 
 
 
?>




