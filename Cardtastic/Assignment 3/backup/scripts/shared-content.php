<?php

	function add_header()
	{
		$output = <<<"HEADER"
		<header class="sticky_header">
			<!-- Original image sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
			<a href="index.php"><img src="../img/cardtastic_logo_black600pxlesswide.jpg" alt="Cardtastic logo" width="254px" height="80px" class="head_logo"></a>

			<div>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="coming-soon.php">ABOUT US</a></li>
					<li><a href="coming-soon.php">FAQS</a></li>
					<li><a href="coming-soon.php">BLOG</a></li>
					<li><a href="coming-soon.php">CONTACT</a></li>
					<li><a href="login.php">MY ACCOUNT</a></li>
					<!-- Image sourced from: http://www.clker.com/cliparts/U/D/n/G/6/h/white-shopping-cart-md.png and adapted for educational purposes -->
					<li><a id="cart" href="cart.php"><img src="../img/cart.png" width=18 height=18/></a></li>
				</ul>
			</div>
		</header>

		<nav class="sticky_nav">
			<div>
				<ul>
					<li><a href="coming-soon.php">UPCOMING</a></li>
					<li>
						<div class="dropdown">
							<a onclick="onClick()" class="dropLink">PRODUCTS</a>
							<div id="dropmenu" class="dropdown-content">
								<a href="products.php?filter=all">All</a>
								<a href="products.php?filter=card_games">Card Games</a>
								<a href="products.php?filter=board_games">Board Games</a>
								<a href="products.php?filter=rpgs">RPGS</a>
								<a href="products.php?filter=miniatures">Miniatures</a>
								<a href="products.php?filter=loot">Loot</a>
								<a href="coming-soon.php">Board Game <wbr>Library</a>
							</div>
						</div>
					</li>
					<li><a href="products.php?filter=gift_vouchers">GIFT VOUCHERS</a></li>
					<li><a href="coming-soon.php">TOURNAMENTS</a></li>
				</ul>
			</div>
		</nav>
HEADER;
		
		echo $output;
	}

	function add_footer()
	{
		$output = <<<"FOOTER"
		<footer id="footer">
			<div class="container">
				<div class="brands">
					<ul>
						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/magic-grey-logo.png" width="116px" height="35px">						
						</li>

						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/yu-grey-logo.png" width="125px" height="45px">
						</li>

						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/pokemon-grey-logo.png" width="118px" height="46px">
						</li>

						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/walking-dead-grey-logo.png" width="67px" height="58px">
						</li>

						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/warcraft-grey-logo.png" width="126px" height="51px">
						</li>

						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/minecraft-grey-logo.png" width="136px" height="27px">
						</li>

						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/thrones-grey-logo.png" width="99px" height="47px">
						</li>

						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/star-trek-grey-logo.png" width="118px" height="31px">
						</li>

						<li>
							<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
							<img src="../img/afl-grey-logo.png" width="79px" height="46px">
						</li>
					</ul>
				</div>

				<div id="store">
					<div id="logo">
						<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
						<img src="../img/cardtastic_logo_black600pxlesswide.jpg" width="254px" height="80px">
					</div>

					<div id="social_media">
						<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
						<a href="https://www.facebook.com/cardtasticcollectables/">
							<img src="../img/fb-icon.jpg" width="30px" height="30px">
						</a>
						
						<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
						<a href="https://plus.google.com/117404141267737160750">
							<img src="../img/gplus-icon.jpg" width="30px" height="30px">
						</a>
					</div>

					<div id="details">
						<table class="tbl">
							<tr>
								<td>
									<h4>Store</h4>
								</td>

								<td>
									<h4>
										38B Scotsburn Avenue<br>Clayton, VIC<br>Australia 3168
									</h4>
								</td>
							</tr>

							<tr>
								<td>
									<h4>Phone</h4>
								</td>

								<td>
									<h4>(03) 8510 3571</h4>
								</td>
							</tr>

							<tr>
								<td>
									<h4>Email</h4>
								</td>

								<td>
									<!-- TODO PROPERLY VERTICALLY ALIGN-->
									<a href="mailto:cardtastic@cardtastic.com.au">cardtastic@cardtastic.com.au</a>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="site-map">
					<h4>COMPANY</h4>
					<ul class="sub_details">
						<li>
							<a href="coming-soon.php"><p>HOME</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>ABOUT US</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>BLOG</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>OUR PARTNERS</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>WORK WITH US</p></a>
						</li>
					</ul>

					<h4 id="tournaments">TOURNAMENTS</h4>
					<ul class="sub_details">
						<li>
							<a href="coming-soon.php"><p>UPCOMING TOURNAMENTS</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>TOURNAMENT INFO</p></a>
						</li>
					</ul>
				</div>

				<div class="site-map">
					<h4>ASSISTANCE</h4>
					<ul class="sub_details">
						<li>
							<a href="login.php"><p>MY ACCOUNT</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>REGISTER</p></a>
						</li>
						
						<li>
							<a href="cart.php"><p>SHOPPING CART</p></a>
						</li>
						
						<li>
							<a href="coming-soon.php"><p>OUR STORES</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>CONTACT US</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>FAQS</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>SHIPPING INFO</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>HAVE A QUESTION?</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>TERMS &amp; CONDITIONS</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>PRIVACY POLICY</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>SECURITY POLICY</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>WHOLESALE APPLICATION</p></a>
						</li>
					</ul>
				</div>

				<div class="site-map">
					<h4>PRODUCTS</h4>
					<ul class="sub_details">
						<li>
							<a href="coming-soon.php"><p>UPCOMING RELEASES</p></a>
						</li>

						<li>
							<a href="products.php?filter=gift_vouchers"><p>GIFT VOUCHERS</p></a>
						</li>

						<li>
							<a href="products.php?filter=mtg"><p>MAGIC THE GATHERING</p></a>
						</li>

						<li>
							<a href="products.php?filter=pokemon"><p>POKEMON</p></a>
						</li>

						<li>
							<a href="products.php?filter=yugioh"><p>YU-GI-OH!</p></a>
						</li>

						<li>
							<a href="products.php?filter=card_games"><p>GAMING - TCG &amp; CCG</p></a>
						</li>

						<li>
							<a href="products.php?filter=card_games"><p>TRADING CARDS</p></a>
						</li>

						<li>
							<a href="products.php?filter=miniatures"><p>MINIATURES</p></a>
						</li>

						<li>
							<a href="products.php?filter=board_games"><p>BOARD GAMES</p></a>
						</li>

						<li>
							<a href="products.php?filter=rpgs"><p>RPG</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>ACCESSORIES</p></a>
						</li>

						<li>
							<a href="products.php?filter=loot"><p>MERCHANDISE</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>CONSOLE ACCESSORIES</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>AFL</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>POP VINYL</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>BOARD GAME LIBRARY</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>TOURNAMENTS</p></a>
						</li>

						<li>
							<a href="products.php?filter=fidget_spinner"><p>FIDGET SPINNERS</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>STATUES</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>SPECIAL OFFERS</p></a>
						</li>

						<li>
							<a href="coming-soon.php"><p>WHAT'S NEW</p></a>
						</li>
					</ul>
				</div>

				<div id="legal">
					<p id="copy">&copy; Copyright 2018. Cardtastic Collectables and Gaming.</p>

					<a id="developer" href="mailto:dylan.d.randall@gmail.com">
						<p>Website designed by Dylan Randall</p>
					</a>
				</div>
			</div>
		</footer>
		
		<!--JAVASCRIPT IMPORTS-->
		<script type="text/javascript" src="scripts/dropdown.js"></script>
FOOTER;
		echo $output;
	}

	function add_top($title, $description, $keywords, $author)
	{
		$output = <<<"META"
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>$title</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="$description">
		<meta name="keywords" content="$keywords">
		<meta name="author" content="$author">
		
		<link rel="stylesheet" href="css/sticky_heads.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/landing.css">
		<link rel="stylesheet" href="css/cart.css">
	</head>
META;
		echo $output;
	}

	function getProductsFromCSV()
	{
		$products_file = fopen("data/products.csv", "r") or die("Unable to open the file!");
		$index = 0;
		$id_index = -1;
		$name_index = -1;
		$desc_index = -1;
		$thumb_index = -1;
		$price_index = -1;
		$child_product_ids_index = -1;
		$tags_index = -1;
		$header;

		$products = array();
		while($line = fgets($products_file))
		{
			$data = explode("|", $line);
			if($index == 0)
			{
				$header = $data;	
				/*FIND THE ELEMENT INDEX THUS ENABLING THE USE OF THE ELEMENT AS AN INDEXER/IDENTIFIER FOR THE ASSOCIATIVE ARRAY*/
				foreach($header as $iter => $head)
				{
					switch(trim($head))
					{
						case "id":
							$id_index = $iter;
							break;

						case "name":
							$name_index = $iter;
							break;

						case "description":
							$desc_index = $iter;
							break;

						case "thumbnail":
							$thumb_index = $iter;
							break;

						case "price":
							$price_index = $iter;
							break;

						case "child_product_ids":
							$child_product_ids_index = $iter;
							break;

						case "tags":
							$tags_index = $iter;
							break;
					}
				}
			}
			else
			{
				$product = array("name"=>$data[$name_index], 
								 "description"=>$data[$desc_index], 
								 "thumbnail"=>$data[$thumb_index], 
								 "price"=>$data[$price_index], 
								 "child_product_ids"=>$data[$child_product_ids_index], 
								 "tags"=>$data[$tags_index]);

				$products[$data[$id_index]] = $product;
			}
			$index += 1;
		}
		fclose($products_file);
		return $products;
	}

	function addOrderToCSV()
	{	
		$products = getProductsFromCSV();
		$purchase_date = date("d/m/Y");
		$total = (float)0;
		
		$ordersFile = fopen('data/orders.csv', 'a') or die("can't open file!");
		flock($ordersFile, LOCK_EX);
		foreach($_SESSION['cart'] as $parent_key => $parent)
		{
			foreach($parent as $child_key => $child)
			{
				$quantity = $_SESSION['cart'][$parent_key][$child_key]['qty'];
				$unit_price = (float)$products[$child_key]['price'];
				$subtotal = (float)$quantity*$unit_price;
				$total += $subtotal;
				
				fwrite($ordersFile, $purchase_date);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $_POST['name']);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $_POST['address']);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $_POST['phone']);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $_POST['email']);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $parent_key);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $child_key);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $quantity);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $unit_price);
				fwrite($ordersFile, "|");
				fwrite($ordersFile, $subtotal);
				fwrite($ordersFile, "\n");
			}
		}
		flock($ordersFile, LOCK_UN);
		fclose($ordersFile);
		$totalStr = number_format($total, 2);
		return array('name'=>$_POST['name'], 'purchase_date'=>$purchase_date, 'total'=>$totalStr);
	}
?>