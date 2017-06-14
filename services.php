<?php

$servicess = get_products_list();
$services = array();
foreach($servicess as $item) {
	$service = array();
	$service['title'] = $item['name'];
	$service['price'] = $item['price'];
	$service['description'] = $item['description'];
	$service['image'] = $item['image'];
	$service['id'] = $item['id'];		
	$services[] = $service;	
}


?>

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
				<?php foreach($services as $item) { ?>
						<div class="col-lg-3 col-md-6 text-center">
								<div class="service-box">
										<img src="<?php print $item['image']; ?>" alt="#" />
										<h3><?php print $item['title'] ?></h3>
										<p class="text-muted"><?php print $item['description']; ?></p>
										<a href="<?php print "article.php?id=".$item['id']; ?>" class="btn btn-primary btn-md col-centered">BuyNow</a>
								</div>
						</div>
					<?php  } ?>
          
				</div>
		</div>
</section>