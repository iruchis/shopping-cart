<?php
session_start();
if (isset($_POST["checkout-btn"])) {
    $order_number = rand(100, 999);
}
session_destroy();
?>
<HTML>
<HEAD>
<TITLE>Simple shopping cart</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/simple-checkout.css" type="text/css"
	rel="stylesheet" />
<script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="./vendor/jquery/jquery-ui.js"></script>
<script type="text/javascript">
	
	fetch('https://fakestoreapi.com/products')
	.then(res => res.json())
	.then(json => console.log(json))
	
</script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="page-heading">Shopping Cart</div>

		<form name="one-page-checkout-form" id="one-page-checkout-form"
			action="" method="post" onsubmit="return checkout()">
			
<?php if(!empty($order_number)){?>

			<div class="order-message order-success">
				Your order has been placed successfully!
				And your order number is <?php echo $order_number;?>.
				<span class="btn-message-close" onclick="this.parentElement.style.display='none';" title="Close">&times;</span>
			</div>
<?php }?>


			<div class="section product-gallery">
        			<?php require_once './view/product-gallery.php'; ?>
      		 </div>
			<div class="billing-details">
		            <?php require_once './view/billing-details.php'; ?>
			</div>

			<div class="cart-error-message" id="cart-error-message">Cart must not
				be emty to checkout</div>
			<div id="shopping-cart" tabindex="1">
				<div id="tbl-cart">
					<div id="txt-heading">
						<div id="cart-heading">Your Shopping Cart</div>
						<div id="close"></div>
					</div>
					<div id="cart-item">
        				<?php require_once './view/shopping-cart.php'; ?>
           			 </div>
				</div>
			</div>

			<div class="payment-details">
				<div class="payment-details-heading">Payment details</div>
				<div class="row">
					<div class="inline-block">
						<div>
							<div class="form-label">Select Payment mode</div><br/>
							<select>
								<option>Cash On Delivery</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div id="inline-block">
					<input type="submit" class="checkout" name="checkout-btn"
						id="checkout-btn" value="Checkout">
				</div>
			</div>
		</form>
	</div>
	<script src="./assets/js/cart.js"></script>
	<script>
	
function checkout() {

	var valid = true;
	
	$("#first-name").removeClass("error-field");
	$("#address").removeClass("error-field");
	$("#city").removeClass("error-field");
	$("#state").removeClass("error-field");
	$("#zipcode").removeClass("error-field");
	$("#phone").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#shopping-cart").removeClass("error-field");
	$("#cart-error-message").hide();
	
	var firstName = $("#first-name").val();
	var address = $("#address").val();
	var cartItem = $("#cart-item-count").val();
	var email = $("#email").val();
	var city =  $("#city").val();
	var state =  $("#state").val();
	var zipcode =  $("#zipcode").val();
	var phone =  $("#phone").val();

	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#first-name-info").html("").hide();
	$("#email-info").html("").hide();
	$("#address-info").html("").hide();
	$("#city-info").html("").hide();
	$("#state-info").html("").hide();
	$("#zipcode-info").html("").hide();
	$("#phone-info").html("").hide();

	if (firstName.trim() == "") {
		$("#first-name-info").html("Please enter the name").css("color", "#ee0000").show();
		$("#first-name").addClass("error-field");
		valid = false;
	}
	if (address.trim() == "") {
		$("#address-info").html("Please enter the address").css("color", "#ee0000").show();
		$("#address").addClass("error-field");
		valid = false;
	}
	if (city.trim() == "") {
		$("#city-info").html("Please enter the city").css("color", "#ee0000").show();
		$("#city").addClass("error-field");
		valid = false;
	}
	if (state.trim() == "") {
		$("#state-info").html("Please enter the state").css("color", "#ee0000").show();
		$("#state").addClass("error-field");
		valid = false;
	}
	if (zipcode.trim() == "") {
		$("#zipcode-info").html("Please enter the zipcode").css("color", "#ee0000").show();
		$("#zipcode").addClass("error-field");
		valid = false;
	}
	if (phone.trim() == "") {
		$("#phone-info").html("Please enter the phone").css("color", "#ee0000").show();
		$("#phone").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("Please enter the Email").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if(cartItem == 0){
		$("#cart-error-message").show();
		$("#shopping-cart").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;	
}
</script>
</BODY>
</HTML>