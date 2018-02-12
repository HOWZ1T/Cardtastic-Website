<?php
	session_start();
	require_once('scripts/shared-content.php');
	add_top("Cardtastic: Product", "The product page for Cardtastic", "games store cardtastic australia product", "Cardtastic Dylan Randall")
?>
	<body>
		<?php
			add_header();
		?>
		
		<main>
			<div class="product-grid">
				<?php
					if(isset($_GET["product_id"]) != true)
					{
						echo "<h1>Product doesn't exist!</h1>";
					}
					else
					{
						$products = getProductsFromCSV();
						foreach($products as $iter => $product)
						{
							if($iter == $_GET["product_id"])
							{
								$name = $product["name"];
								$description = $product["description"];
								$thumb = $product["thumbnail"];
								
								$output = <<<"PRODUCT"
								<div class="description-col">
									<h1>$name</h1>
									<p>$description</p>
								</div>
								
								<div class="product-col">
									<!--ALL IMAGES SOURCED FROM CARDTASTIC AND ADAPTED FOR EDUCATIONAL PURPOSES-->
									<img class="img-highlight" src="$thumb"/>

									<form class="radio-list" action="cart.php" method="post" onsubmit="return validate()">
										<input type="hidden" name="id" value="$iter">
PRODUCT;
								echo $output;
								
								$subprodsID = explode(" ", $product["child_product_ids"]);
								$chckd = false;
								foreach($subprodsID as $jIndex => $sID)
								{
									foreach($products as $kIter => $kProduct)
									{
										if($sID == $kIter)
										{
											$kname = $kProduct["name"];
											$kdescription = $kProduct["description"];
											$kthumb = $kProduct["thumbnail"];
											$kprice = $kProduct["price"];
											
											if($chckd != true)
											{
												$output = <<<"PRODUCT"
												<input id="$kIter" type="radio" name="option" value="$kIter" checked data-name="$kname" data-desc="$kdescription" data-thumb="$kthumb" data-price="$kprice">
												<label for="$kIter">$kname</label><br>
PRODUCT;
												echo $output;
												$chckd = true;
											}
											else
											{
												$output = <<<"PRODUCT"
												<input id="$kIter" type="radio" name="option" value="$kIter" data-name="$kname" data-desc="$kdescription" data-thumb="$kthumb" data-price="$kprice">
												<label for="$kIter">$kname</label><br>
PRODUCT;
												echo $output;
											}
										}
									}
								}
								
								$price = number_format((float)$product["price"], 2, ".", " ");
								$output = <<<"PRODUCT"
										<p class="price">&dollar;$price</p>
										<div class="quantity">
											<input class="minus" type="button" onclick="minus()" value="-">
											<input name="qty" class="input" type="text" value=0 onchange="qtyChange()">
											<input class="plus" type="button" onclick="plus()" value="+">
										</div>
										<input class="button" type="submit" value="ADD TO CART">
									</form>
								</div>
PRODUCT;
								echo $output;
								break;
							}
						}
					}
				?>
			</div>
		</main>
		
		<?php
			add_footer();
		?>
		<script type="text/javascript" src="scripts/product.js"></script>
	</body>
</html>

<?php
	include_once('/home/eh1/e54061/public_html/wp/debug.php');
?>