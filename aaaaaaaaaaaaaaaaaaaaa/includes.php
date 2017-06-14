<?php

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
    //echo "You have entries with these IDs:<br />";
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

function banner_images_func() {
$spaceID = 'wjaul0uqh9mi';
$accessToken = '87f82c16ddb35bad4d641a7c7f7fda5d8e658a398cc8868cab32742b25918e67';
$client = new Client($accessToken, $spaceID);
	$banner_images = array();
	$query = new \Contentful\Delivery\Query;
	$query->setContentType('banner');
	$productEntriesByPrice = $client->getEntries($query);											
	$assets = json_encode($productEntriesByPrice, JSON_PRETTY_PRINT);																									
	$assets_obj = json_decode( $assets, true );
	foreach($assets_obj['items'] as $item) {
		
		//prints($item);
		
		
	  $banner_images[] = $item['fields'];
		$banner_image[] = $item['fields']['banner']['sys']['id'];	
	}
	//prints($banner_image);
	return $banner_images;		
}



function get_menus_func() {
$spaceID = 'wjaul0uqh9mi';
$accessToken = '87f82c16ddb35bad4d641a7c7f7fda5d8e658a398cc8868cab32742b25918e67';
$client = new Client($accessToken, $spaceID);
	$banner_images = array();
	$query = new \Contentful\Delivery\Query;
	$query->setContentType('menu');
	$productEntriesByPrice = $client->getEntries($query);											
	$assets = json_encode($productEntriesByPrice, JSON_PRETTY_PRINT);																									
	$assets_obj = json_decode( $assets, true );
	$banner_image = array();
	foreach($assets_obj['items'] as $item) {
	  $banner_image['name'] = $item['fields']['menuName'];	
	  $banner_image['link'] = $item['fields']['menuLink']['sys']['id'];	

	  $banner_images[] = $banner_image;
	}
	return $banner_images;		
}

function get_post_data($id) {
$spaceID = 'wjaul0uqh9mi';
$accessToken = '87f82c16ddb35bad4d641a7c7f7fda5d8e658a398cc8868cab32742b25918e67';
$client = new Client($accessToken, $spaceID);
$content = $client->getEntry($id);
$assets = json_encode($content, JSON_PRETTY_PRINT);																									
$assets_obj = json_decode( $assets, true );
//prints($assets_obj['fields']);	
$post = '<h1>'.$assets_obj['fields']['title'].'</h1>';
$post .= $assets_obj['fields']['bodyText'];
return $post;
}

function prints($a){
	echo "<pre>";
	print_r($a);
	exit;
}