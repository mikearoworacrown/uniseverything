<?php require_once('../private/initialize.php'); 
?>

<?php
    $product_slug = $_GET['product'];
    $product_slug_id = $_GET['i'];

?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/single_product.css?version=3'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/css/single_product_responsive.css?version=3'); ?>" />

<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">
				<div class="callout col-lg-5" id="callout" style="display:none;">
					<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
					<span class="message" style="color:black; font-size: 1.2em;">Product Added</span>
				</div>
			</div>
			<div class="row">
				<?php single_product($product_slug_id); ?>
			</div>
		</div>
	</div>



<?php include(SHARED_PATH . '/public_footer.php'); ?>