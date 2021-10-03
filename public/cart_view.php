<?php require_once('../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/public_header.php');?>

<style>
div.cart-div {
    min-height: 600px;
	padding-top: 20px;
}
@media screen and (max-width: 992px) {
	.quan{
		width:20%;
	}
}

@media screen and (max-width: 768px) {
	.quan{
		width:30%;
	}
}
</style>

<div class="cart-div">
	<div class="container-fluid">
		<h3 style="padding-left:10px;">YOUR CART</h3>	
		<div>
			<table class="table table-bordered">
				<thead>
					<th></th>
					<th>Photo</th>
					<th>Name</th>
					<th>Price</th>
					<th class="quan" width="15%">Quantity</th>
					<th>Subtotal</th>
				</thead>
				<tbody id="tbody">
				</tbody>
			</table>
		</div>
		<?php
			if(isset($_SESSION['user'])){
				echo "
					<div id='paypal-button'></div>
				";
			}
			else{
				echo "
					<h4>You need to <a href='login.php'>Login</a> to checkout.</h4>
				";
			}
		?>
	</div>
</div>

<?php include(SHARED_PATH . '/public_footer.php');?>

<script>	
	var total = 0;
	$(function(){
		$(document).on('click', '.cart_delete', function(e){
			e.preventDefault();
			var id = $(this).data('id');
			$.ajax({
				type: 'POST',
				url: 'cart_delete.php',
				data: {id:id},
				dataType: 'json',
				success: function(response){
					if(!response.error){
						getDetails();
						getCart();
						getTotal();
					}
				}
			});
		});

		$(document).on('click', '.minus', function(e){
			e.preventDefault();
			var id = $(this).data('id');
			var qty = $('#qty_'+id).val();
			if(qty>1){
				qty--;
			}
			$('#qty_'+id).val(qty);
			$.ajax({
				type: 'POST',
				url: 'cart_update.php',
				data: {
					id: id,
					qty: qty,
				},
				dataType: 'json',
				success: function(response){
					if(!response.error){
						getDetails();
						getCart();
						getTotal();
					}
				}
			});
		});

		$(document).on('click', '.add', function(e){
			e.preventDefault();
			var id = $(this).data('id');
			var qty = $('#qty_'+id).val();
			qty++;
			$('#qty_'+id).val(qty);
			$.ajax({
				type: 'POST',
				url: 'cart_update.php',
				data: {
					id: id,
					qty: qty,
				},
				dataType: 'json',
				success: function(response){
					if(!response.error){
						getDetails();
						getCart();
						getTotal();
					}
				}
			});
		});

		getDetails();
		getTotal();

	});

	function getDetails(){
		
		$.ajax({
			type: 'POST',
			url: 'cart_details.php',
			dataType: 'json',
			success: function(response){
				$('#tbody').html(response);
				getCart();
			}
		});
	}

	function getTotal(){
		$.ajax({
			type: 'POST',
			url: 'cart_total.php',
			dataType: 'json',
			success:function(response){
				total = response;
			}
		});
	}
</script>

