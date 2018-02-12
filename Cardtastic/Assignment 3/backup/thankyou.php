<?php
	session_start();
	require_once('scripts/shared-content.php');
	add_top("Cardtastic: Thank You", "The thank you page for Cardtastic", "games store cardtastic australia thank you", "Cardtastic Dylan Randall")
?>
	<body>
		<?php
			add_header();
		?>
		
		<main>
			<?php
				if(isset($_SESSION['cart']) && isset($_POST['name'], $_POST['address'], $_POST['phone'], $_POST['email']))
				{
					//record order, create date for product receipt, and clear the cart
					$data = addOrderToCSV();
					
					$_SESSION['receipt']['cart'] = $_SESSION['cart'];
					$_SESSION['receipt']['name'] = $data['name'];
					$_SESSION['receipt']['purchase_date'] = $data['purchase_date'];
					$_SESSION['receipt']['total'] = $data['total'];
					
					unset($_SESSION['cart']);
				}
			?>
			<div class="product-grid">
				<h1>Thank You for you purchase!</h1>
				<form class="login" action="receipt.php" method="post" onsubmit="return validate()">
					<input class="button" type="submit" value="RECEIPT">
				</form>
			</div>
		</main>
		
		<?php
			add_footer();
		?>
	</body>
</html>

<?php
	include_once('/home/eh1/e54061/public_html/wp/debug.php');
?>