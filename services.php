


<section id="services">
		<div class="container">
				<div class="row">
						<div class="col-lg-12 text-center">
								<h2 class="section-heading">Our Products</h2>
								<hr class="primary">
						</div>
				</div>
		</div>
		<div class="container">
				<div class="row">	

	
	
	
	
<?php	
$assets_obj = get_products_list();
	foreach($assets_obj['items'] as $item) {		
		// $product = array();
		// $product['id'] = $item['sys']['id'];
		// $product['name'] = $item['fields']['title'];
		// $product['price'] = $item['fields']['price'];		
		// $product['description'] = $item['fields']['description'];	
	  // $asset = $client->getAsset($item['fields']['image']['sys']['id']);
	  // $product['image'] = $asset->getFile()->getUrl();		
    // $products[] = $product;		
$asset = $client->getAsset($item['fields']['image']['sys']['id']);
$product['image'] = $asset->getFile()->getUrl();
?>
		<div class="col-lg-3 col-md-6 text-center">
				<div class="service-box">
						<img src="<?php print $product['image'] ?>" alt="#" />
						<h3><?php print $item['fields']['title'] ?></h3>
						<p class="text-muted"><?php print $item['fields']['description']; ?></p>
						<a href="<?php print "article.php?id=".$item['sys']['id']; ?>" class="btn btn-primary btn-md col-centered">BuyNow</a>
				</div>
		</div>   
						
	<?php } ?>					
				</div>
		</div>
</section>
