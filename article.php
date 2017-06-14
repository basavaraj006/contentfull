<body id="page-top">
<?php
require 'includes.php';
include 'header.php';
$param = $_GET['id'];
$product = get_product_details($param); 
?>
<div class="container">
  <h2>Buy Product</h2>
  <div class="panel panel-default">
		<div class="row">
			<div class="col-sm-4" style="text-align:center"> <img src="<?php print $product['image']; ?>" alt="" /></div>
			<div class="col-sm-8" style="">
			<h3><?php print $product['name']; ?> </h3>	
			<?php print $product['description']; ?> 
			<br>			
			<h3>RS : <?php print $product['price']; ?><h3>
      <a href="#" class="btn btn-info">Add to Cart</a>			
			</div>
		</div>	
  </div>
	
</div>

<?php
include 'footer.php';
?>

