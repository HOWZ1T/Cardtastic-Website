<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Receipt</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="$description">
		<meta name="keywords" content="$keywords">
		<meta name="author" content="$author">
		
		<link rel="stylesheet" href="css/receipt.css">
	</head>
	
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
				
				<p id="customer">Dylan David Randall</p>
				
				<table id="meta">
					<tr>
						<td class="td-head">Date</td>
						<td class="td-data">February 12, 2018</td>
					</tr>
					
					<tr>
						<td class="td-head">Amount Due</td>
						<td class="td-data">$101.98</td>
					</tr>
				</table>
				
				<table id="products">
					<tr>
						<th>Item</th>
						<th>Description</th>
						<th>Unit Cost</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>
					
					<tr>
						<td>Test item</td>
						<td>This is a test item description</td>
						<td>$10.00</td>
						<td>2</td>
						<td>$20.00</td>
					</tr>
				</table>
				
				<table id="total">
					<tr>
						<td class="td-head">Total</td>
						<td class="td-data">$20.00</td>
					</tr>
				</table>
				
				<div class="tc">
					<h2 class="tc-head">T E R M S</h2>
					<h2>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</h2>
				</div>
			</div>
			
			<div class="align center">
				<input type="button" onclick="printReceipt('print')" value="Print Receipt">
			</div>
		</main>
		
		<script type="text/javascript" src="scripts/receipt.js"></script>
	</body>
</html>