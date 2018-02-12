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
				if(isset($_SESSION['cart']) && isset($_POST['name'], $_POST['address'], $_POST['email'], $_POST['phone'], $_POST['creditCard'], $_POST['expiryDate']))
				{		   
					//VALIDATE USER ENTERED DATA
					$isValid_Name = preg_match("~^[a-zA-Z .,'-]+$~", $_POST['name']);
					$isValid_Address = preg_match("~^[a-zA-Z0-9 .,'-/\n]+$~", $_POST['address']);
					$isValid_Email = preg_match("~^[^\.][a-zA-Z0-9!#$%&'*+-/=?^_`{|}.]{1,64}@{1}[a-zA-Z0-9-.]{1,255}.[a-zA-Z0-9-.]{1,63}\.[a-zA-Z0-9]{1,63}$~", $_POST['email']);
					$isValid_Phone = preg_match("~^(\+614|[(]04[)]|04)[ ][0-9]{3,3}[ ][0-9]{3,3}[ ][0-9]{2,2}$~", $_POST['phone']);
					$isValid_CreditCard = preg_match("~^[^ ][ 0-9]{12,21}$~", $_POST['creditCard']);
					
					$expiryDate = explode("-", $_POST['expiryDate']);
					$cur_date = explode("-", date("Y-d-m"));
					$expiryYear = (int)$expiryDate[0];
					$expiryMonth = (int)$expiryDate[2];
					
					$curYear = (int)$cur_date[0];
					$curMonth = (int)$cur_date[2];
					
					$dateDiff = ($expiryYear-$curYear)*12+13-$curMonth-(12-$expiryMonth); //gets the difference between the dates in months

					$isValid = false;
					if($dateDiff >= 1 && $isValid_Name == 1 && $isValid_Address == 1 && $isValid_Email == 1 && $isValid_Phone == 1 && $isValid_CreditCard == 1)
					{
						$isValid = true;
					}
					
					if($isValid == true)
					{
						//record order, create date for product receipt, and clear the cart
						$data = addOrderToCSV();

						$_SESSION['receipt']['cart'] = $_SESSION['cart'];
						$_SESSION['receipt']['name'] = $data['name'];
						$_SESSION['receipt']['purchase_date'] = $data['purchase_date'];
						$_SESSION['receipt']['total'] = $data['total'];	
					}
					
					unset($_SESSION['cart']);
				}
			?>
			<div class="product-grid">
				<h1>Thank You for you purchase!</h1>
				<form class="login" action="receipt.php" method="post" onsubmit="return validate()">
					<input class="button depad" type="submit" value="RECEIPT">
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