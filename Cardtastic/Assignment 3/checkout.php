<?php
	session_start();
	require_once('scripts/shared-content.php');
	add_top("Cardtastic", "The checkout page for Cardtastic", "games store cardtastic australia checkout", "Cardtastic Dylan Randall");
?>
	<body>
		<?php
			add_header();
		?>
		
		<main>
			<div class="product-grid">
				<form class="login" action="thankyou.php" method="post" onsubmit="return validate()">
					<label id="lblName"><input id="name" name="name" type="text" value="" placeholder="Enter your first and last name" oninput="nameUpdate()"></label>
					<label id="lblEmail"><input id="email" name="email" type="text" value="" placeholder="Enter your email" oninput="emailUpdate()"></label>
					<label id="lblAddress"><input id="address" name="address" type="text area" value="" placeholder="Enter your address" oninput="addressUpdate()"></label>
					<label id="lblPhone"><input id="phone" name="phone" type="text" value="" placeholder="Enter your phone number" oninput="phoneUpdate()"></label>
					<label id="lblCreditCard"><input id="creditCard" name="creditCard" type="text" value="" placeholder="Enter your Credit Card Number" oninput="creditCardUpdate()"></label>
					<label id="lblExpiryDate"><input id="expiryDate" name="expiryDate" type="date" value="" oninput="expiryDateUpdate()" required></label>

					<input class="button" type="submit" value="PURCHASE">
				</form>
			</div>
		</main>
		
		<?php
			add_footer();
		?>
		<script type="text/javascript" src="scripts/checkout.js"></script>
	</body>
</html>

<?php
	include_once('/home/eh1/e54061/public_html/wp/debug.php');
?>