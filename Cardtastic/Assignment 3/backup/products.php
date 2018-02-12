<?php
	session_start();
	require_once('scripts/shared-content.php');
	add_top("Cardtastic: Products", "The products page for Cardtastic", "games store cardtastic australia products", "Cardtastic Dylan Randall");
		
	$filter = "";
?>
	<body>
		<?php
			add_header();
			if(isset($_GET['filter']) == true)
			{
				global $filter;
				$filter = $_GET['filter'];
			}
			else
			{
				global $filter;
				$filter = 'all';
			}
		
			global $filter;
			$filter = trim($filter);
		?>
		
		<main>
			<!-- ALL IMAGES SOURCED FROM CARDTASTIC AND ADAPTED FOR EDUCATIONAL PURPOSES -->
			<div class="product-grid">
				<ul id="products">
					<?php
						$products = getProductsFromCSV();
						$noProducts = true;
						foreach($products as $iter => $product)
						{
							if($product["child_product_ids"] != "-1")
							{
								$matchesFilter = false;
								if($filter != 'all')
								{
									$tags = explode(" ", $product["tags"]);
									foreach($tags as $tIndex => $tag)
									{
										if(trim($tag) == $filter)
										{
											$matchesFilter = true;
											break;
										}
									}
								}
								else
								{
									$matchesFilter = true;
								}

								if($matchesFilter == true)
								{
									$name = $product["name"];
									$thumb = $product["thumbnail"];
									$price = number_format((float)$product["price"], 2, ".", " ");
									$output = <<<"ITEM"
									<li class="product inline-block">
										<a class="product-thumb" href="product.php?product_id=$iter">
											<img src="$thumb" width=200 height=200/>
										</a>
										<p>$name</p>
										<h2>&dollar;$price</h2>
									</li>
ITEM;
									echo $output;
									
									$noProducts = false;
								}
							}
						}
					
						if($noProducts == true)
						{
							echo "<h1>No products found.</h1>";
						}
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