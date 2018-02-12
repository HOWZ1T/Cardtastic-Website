<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cardtastic: Receipt</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="The cardtastic receipt page">
		<meta name="keywords" content="cardtastic games store receipt australia">
		<meta name="author" content="Cardtastic Dylan Randall">
		
		<link rel="stylesheet" href="css/receipt.css">
	</head>
	
	<?php
		session_start();
		require_once('scripts/shared-content.php');
	?>
	
	<body>
		<main>
			<div id="print" class="receipt center card">
				<div class="title">
					<h1>R E C E I P T</h1>
				</div>
				
				<textarea class="contact">
Address:        38B Scotsburn Avenue
                      Clayton, VIC
                      Australia 3168

Phone:          (03) 8510 3571
Email:          cardtastic@cardtastic.com.au
				</textarea>
				
				<img id="logo" src="../img/cardtastic_logowhite.jpg" width=348 height=100>
				
				
				<?php
					$customer = $_SESSION['receipt']['name'];
					$output = <<<"OUTPUT"
					<p id="customer">$customer</p>
OUTPUT;
					echo $output;
				?>
				
				<?php
					$date = $_SESSION['receipt']['purchase_date'];
					$total = $_SESSION['receipt']['total'];
					$output = <<<"OUTPUT"
				<table id="meta">
					<tr>
						<td class="td-head">Date</td>
						<td class="td-data">$date</td>
					</tr>
					
					<tr>
						<td class="td-head">Amount Due</td>
						<td class="td-data">&dollar;$total</td>
					</tr>
				</table>
OUTPUT;
					echo $output;
				?>
				<table id="products">
					<tr>
						<th>Item</th>
						<th>Description</th>
						<th>Unit Cost</th>
						<th>Quantity</th>
						<th>Subtotal</th>
					</tr>
				<?php 
					
					$products = getProductsFromCSV();
					foreach($_SESSION['receipt']['cart'] as $parent_key => $parent)
					{
						foreach($parent as $child_key => $child)
						{
							$name = $products[$child_key]['name'];
							$description = $products[$child_key]['description'];
							$description = strlen($description) > 60 ? substr($description, 0, 60)."..." : $description; /*LIMITS STRING SIZE*/
							$unit_cost = (float)$products[$child_key]['price'];
							$unit_costStr = number_format($unit_cost, 2);
							$quantity = $_SESSION['receipt']['cart'][$parent_key][$child_key]['qty'];
							$subtotal = $unit_cost * (float)$quantity;
							$subtotalStr = number_format($subtotal, 2);
							
							$output = <<<"OUTPUT"
						<tr>
							<td>$name</td>
							<td>$description</td>
							<td>&dollar;$unit_costStr</td>
							<td>$quantity</td>
							<td>&dollar;$subtotalStr</td>
						</tr>
OUTPUT;
							echo $output;		
						}
					}
				?>
				</table>
				
				<?php
					$total = $_SESSION['receipt']['total'];
					$output = <<<"OUTPUT"
				<table id="total">
					<tr>
						<td class="td-head">Total</td>
						<td class="td-data">&dollar;$total</td>
					</tr>
				</table>
OUTPUT;
					echo $output;
				?>
				
				<div class="tc">
					<h2 class="tc-head">T E R M S</h2>
					<h2>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</h2>
				</div>
			</div>
			
			<div class="align center">
				<input type="button" onclick="printReceipt('print')" value="Print Receipt">
			</div>
			
			<div class="align center">
				<input type="button" onclick="redirect()" value="Back">
			</div>
		</main>
		
		<script type="text/javascript" src="scripts/receipt.js"></script>
	</body>
</html>

<?php
	include_once('/home/eh1/e54061/public_html/wp/debug.php');
?>