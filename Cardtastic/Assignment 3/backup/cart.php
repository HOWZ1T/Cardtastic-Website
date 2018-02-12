<?php
	session_start();
	require_once('scripts/shared-content.php');
	add_top("Cardtastic: Cart", "The cart page for Cardtastic", "games store cardtastic australia cart", "Cardtastic Dylan Randall")
?>
	<body>
		<?php
			add_header();
			if(isset($_POST['id']) && isset($_POST['option']) && isset($_POST['qty'])) /*HANDLES IF SOMETHING IS ADDED TO THE CART*/
			{
				/*$_POST DATA VALIDATION*/
				$isValid = false;
				$products = getProductsFromCSV();
				if(isset($products[$_POST['id']], $products[$_POST['option']])) /*DOES THIS PRODUCT && OPTION EXIST ? YES CONTINUE, NO: DON'T ADD */
				{
					if(!is_nan($_POST['qty'])) //Checks if QTY is a number
					{
						if($_POST['qty'] > 0)
						{
							$isValid = true;
						}
					}
				}
				
				if($isValid == true)
				{
					if(isset($_SESSION['cart'][$_POST['id']]))
					{
						if(isset($_SESSION['cart'][$_POST['id']][$_POST['option']])) /*IF ENTERING THE SAME EXACT (DUPLICATE) PRODUCT JUST ADD TO ITS' QUANTITY*/
						{
							$_SESSION['cart'][$_POST['id']][$_POST['option']]['qty'] += $_POST['qty'];
						}
						else
						{
							$_SESSION['cart'][$_POST['id']][$_POST['option']]['qty'] = $_POST['qty'];
						}
					}
					else
					{
						$_SESSION['cart'][$_POST['id']][$_POST['option']]['qty'] = $_POST['qty'];
					}	
				}
			}
			else if(isset($_POST['id'], $_POST['action']) && isset($_POST['option']))
			{
				if($_POST['action'] == "remove")
				{
					/*REMOVE ITEM FROM CART*/
					if(isset($_SESSION['cart'][$_POST['id']][$_POST['option']])) /*Does the cart actually have the item ? If so remove it */
					{
						unset($_SESSION['cart'][$_POST['id']][$_POST['option']]);
						
						if(count($_SESSION['cart'][$_POST['id']]) == 0)
						{
							unset($_SESSION['cart'][$_POST['id']]);
						}
						
						if(count($_SESSION['cart']) == 0)
						{
							unset($_SESSION['cart']);
						}
					}
				}
			}
			else if(isset($_POST['action']))
			{
				switch($_POST['action'])
				{
					case "reset":
						if(isset($_SESSION['cart'])) //If there is a cart delete it
						{
							unset($_SESSION['cart']);
						}

						header("Location: products.php");
						break;
				}
			}
		?>
		
		<main>
			<div class="cart cart-center">
				<ul>
					<li class="cart-header cart-row">
						<div class="cart-item">
							<h1>CART</h1>
						</div>
					</li>
					
					<?php
						$order_total = (float) 0; //casting to float to ensure decimal accuracy
						if(!isset($_SESSION['cart'])) /*IS THERE A CART ? NO: REPORT IT TO THE USER, YES: LOAD CART*/
						{
							$output = <<<"OUTPUT"
								<li class="cart-row">
									<div class="cart-empty">
										<p>Your Cart is Empty.</p>
									</div>
								</li>
OUTPUT;
							echo $output;
						}
						else
						{
							/*ADDS THE RELAVENT HTML FOR ALL THE PRODUCTS IN THE CONSUMER'S SHOPPING CART*/
							$products = getProductsFromCSV();
							foreach($_SESSION['cart'] as $parent_key => $parent)
							{
								foreach($parent as $child_key => $child)
								{
									if(isset($products[$child_key])) /*ENSURES THAT THE CHILD IS A VALID PRODUCT*/
									{
										$thumb = $products[$child_key]['thumbnail'];
										$name = $products[$child_key]['name'];
										$quantity = $_SESSION['cart'][$parent_key][$child_key]['qty'];
										$price = (float)$products[$child_key]['price']*(float)$quantity;
										$priceStr = number_format($price, 2); 
										
										$output = <<<"OUTPUT"
										<li class="cart-row">
											<div class="cart-item">
												<img src="$thumb" width=200 height=200/>
												<div class="cart-item-details">
													<p>$name</p>

													<div>
														<p>QTY: $quantity</p>
														<p>SUB-TOTAL: &dollar;$priceStr</p>
														
														<form action="" method="POST">
															<input type="hidden" name="id" value="$parent_key">
															<input type="hidden" name="option" value="$child_key">
															<input type="hidden" name="action" value="remove">
															<input class="button-remove" type="submit" value="remove">
														</form>
													</div>
												</div>
											</div>
										</li>
OUTPUT;
										
										echo $output;
										$order_total += $price;
									}
								}
							}
						}
					
						/*PRINT OUT ORDER TOTAL TO THE USER*/
						if($order_total > 0) //only print out if there is a cost greater than 0, i.e. the cart is not empty
						{
							$order_totalStr = number_format($order_total, 2);
							$output = <<<"OUTPUT"
								<h2>ORDER TOTAL: &dollar;$order_totalStr</h2>
								<form action="checkout.php" method="POST">
									<input class="button" type="submit" value="CHECKOUT">
								</form>
OUTPUT;
							echo $output;	
						}
					
						/*TODO CHECKOUT FORM*/
						$output = <<<"OUTPUT"
							<form action="" method="POST">
								<input type="hidden" name="action" value="reset">
								<input class="button-remove" type="submit" value="clear cart">
							</form>
OUTPUT;
						echo $output;
					?>
					
				</ul>
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