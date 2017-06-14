<?php

use Contentful\Delivery\Client;

require_once __DIR__ . '/vendor/autoload.php';

$spaceID = 'wjaul0uqh9mi';
$accessToken = '87f82c16ddb35bad4d641a7c7f7fda5d8e658a398cc8868cab32742b25918e67';

global $client;
$client = new Client($accessToken, $spaceID);




function banner_images_func() {
	global $client;
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
	global $client;
	$banner_images = array();
	$query = new \Contentful\Delivery\Query;
	$query->setContentType('menu');
	$productEntriesByPrice = $client->getEntries($query);											
	$assets = json_encode($productEntriesByPrice, JSON_PRETTY_PRINT);																									
	$assets_obj = json_decode( $assets, true );
	$banner_image = array();
	foreach($assets_obj['items'] as $item) {
	  $banner_image['name'] = $item['fields']['menuName'];	
	 

	  $banner_images[] = $banner_image;
	}
	return $banner_images;		
}

function get_post_data($id) {
global $client;	
$content = $client->getEntry($id);
$assets = json_encode($content, JSON_PRETTY_PRINT);																									
$assets_obj = json_decode( $assets, true );

$post = '<h1>'.$assets_obj['fields']['title'].'</h1>';
$post .= $assets_obj['fields']['bodyText'];
return $post;
}

function prints($a){
	echo "<pre>";
	print_r($a);
	exit;
}





function get_site_settings() {
	global $client;	
	$return = array();
	$content = $client->getEntry('3v9iUdLW9GEyaCMcMYCo6S');
	$contentstructure = json_encode($content, JSON_PRETTY_PRINT);																									
	$contentstructure_array = json_decode( $contentstructure, true );
	$return['name'] = $contentstructure_array['fields']['name'];
	$return['logo'] = $contentstructure_array['fields']['logo']['sys']['id'];
	return $return;		
}




function get_post_header() {
	global $client;	
	$content = $client->getEntry('6dXdfzeIDYcQyUwsIYIq2G');
	$contentstructure = json_encode($content, JSON_PRETTY_PRINT);																									
	$contentstructure_array = json_decode( $contentstructure, true );
	$return['name'] = $contentstructure_array['fields']['title'];
	$return['bodytext'] = $contentstructure_array['fields']['bodyText'];
	
	return $return;	
}



function get_post_about() {
	global $client;	
	$return = '';
	$content = $client->getEntry('XizZnKnYKysOACka2cQiw');
	$contentstructure = json_encode($content, JSON_PRETTY_PRINT);																									
	$contentstructure_array = json_decode( $contentstructure, true );
	$return['name'] = $contentstructure_array['fields']['title'];
	$return['bodytext'] = $contentstructure_array['fields']['bodyText'];
	
	return $return;	
}



function get_assets_list() {
global $client;	
	$banner_images = array();
	$query = new \Contentful\Delivery\Query;
	$query->setContentType('banner');
	$productEntriesByPrice = $client->getEntries($query);											
	$assets = json_encode($productEntriesByPrice, JSON_PRETTY_PRINT);																									
	$assets_obj = json_decode( $assets, true );
	
	foreach($assets_obj['items'] as $item) {		
	  $asset = $client->getAsset($item['fields']['banner']['sys']['id']);
	  $banner_image[] = $asset->getFile()->getUrl();			
	}
	
	return $banner_image;
}


function get_products_list() {
  global $client;	
	$products = array();
	$query = new \Contentful\Delivery\Query;
	$query->setContentType('product');
	$query->setLimit(3);
	$productEntriesByPrice = $client->getEntries($query);											
	$assets = json_encode($productEntriesByPrice, JSON_PRETTY_PRINT);																									
	$assets_obj = json_decode( $assets, true );

	foreach($assets_obj['items'] as $item) {		
		$product = array();
		$product['id'] = $item['sys']['id'];
		$product['name'] = $item['fields']['title'];
		$product['price'] = $item['fields']['price'];		
		$product['description'] = $item['fields']['description'];	
	  $asset = $client->getAsset($item['fields']['image']['sys']['id']);
	  $product['image'] = $asset->getFile()->getUrl();		
    $products[] = $product;		
	}
		
	return $products;
}


function get_product_details($id) {
	global $client;	
	$return = array();
	$content = $client->getEntry($id);
	$contentstructure = json_encode($content, JSON_PRETTY_PRINT);																									
	$contentstructure_array = json_decode( $contentstructure, true );

	
	$return['name'] = $contentstructure_array['fields']['title'];
	$return['price'] = $contentstructure_array['fields']['price'];
	$return['description'] = $contentstructure_array['fields']['description'];	
	$imageid = $contentstructure_array['fields']['image']['sys']['id'];
	$asset = $client->getAsset($imageid);
	$return['image'] = $asset->getFile()->getUrl();

	return $return;		
}



function get_contact_details($id = '1LveRdswNm4MUEA2q8oEKm') {
	global $client;	
	$return = array();
	
	$content = $client->getEntry($id);
	$contentstructure = json_encode($content, JSON_PRETTY_PRINT);																									
	$contentstructure_array = json_decode( $contentstructure, true );

	
	$return['title'] = $contentstructure_array['fields']['title'];	
	$return['email'] = $contentstructure_array['fields']['email'];
	$return['phone'] = $contentstructure_array['fields']['phone'];
	$return['description'] = $contentstructure_array['fields']['description'];	
	$return['lat'] = $contentstructure_array['fields']['location']['lat'];
	$return['lang'] = $contentstructure_array['fields']['location']['long'];
		

	return $return;		
}




