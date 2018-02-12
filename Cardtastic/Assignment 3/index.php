<?php
	session_start();
	require_once('scripts/shared-content.php');
	add_top("Cardtastic", "The home page for Cardtastic", "games store cardtastic australia", "Cardtastic Dylan Randall")
?>
	<body>
		<?php
			add_header();
		?>
		
		<main>
			<div id="main_categories" class="categories">
				
				<div class="about-us">
					<h1>Welcome To Cardtastic</h1>
					<p>
						CardTastic is dedicated to bringing the latest collectable and gaming products.
						<br><br>
						We aim to provide you with great prices and quality products. Our team are extremely knowledgeable so feel to drop into our Clayton Store or contact us online to ask about something you may be looking for.
						<br><br>
						We carry product lines including Magic the Gathering, Yi-Gi-Oh!, Pokemon, World of Warcraft, Start Trek, Star Wars, Game of Thrones, AFL, Minecraft and The Walking Dead, collectable and gaming products.
						<br><br>
						At our store we run a large range of tournament including pre-release event for most of the CCG's that we sell. We are a Premier store for Wizards of the Coast.
						<br><br>
						With over 16 years of industry experience we hope to meet your gaming and collectable needs.
					</p>
				</div>
				
				<a href="coming-soon.php">
					<!-- Original images sourced and adapted for educational purposes:
						 https://jerimumgeek.oportaln10.com.br/yu-gi-oh-anime-novo-protagonista-2017-6256/
						 https://magic.wizards.com/en/articles/archive/beyond-basics/death-planeswalkers-2017-06-29
					     http://au.ign.com/articles/2017/06/06/pokken-tournament-dx-announced-for-nintendo-switch-->
					<span id="category" class="upcoming highlight">
						<h3>Upcoming</h3>
					</span>
				</a>

				<div class="sub_categories">
					<a href="products.php?filter=board_games">
						<!-- Original images sourced and adapted for educational purposes: 
							 https://wallpapersontheweb.net/13496-chess-game-a-world-of-chess/ -->
						<span id="category" class="board_games inline">
							<h3>Board <wbr>Games</h3>
						</span>
					</a>

					<a href="products.php?filter=rpgs">
						<!-- Original images sourced and adapted for educational purposes: 
							 http://pictures-and-images.com/content/role-playing-images.html -->
						<span id="category" class="rpgs inline">
							<h3>RPGS</h3>
						</span>
					</a>
					
					<a href="products.php?filter=miniatures">
						<!-- Original images sourced and adapted for educational purposes: 
							 https://i2.wp.com/www.stonewallfigures.co.uk/wp-content/uploads/2017/12/CM-WS1-Pack-All.jpg?resize=300%2C300-->
						<span id="category" class="miniatures inline">
							<h3>Miniatures</h3>
						</span>
					</a>
				</div>

				<a href="products.php?filter=card_games">
					<!-- Original images sourced and adapted for educational purposes: 
						 https://lh3.googleusercontent.com/Ic-6ysJ8OROmkPhrJE1SCWekoaqqa590G1Ue7tB2mt-R_lTfc90GWVNdFuSMR-kYCxKvdw=s85-->
					<span id="category" class="card_games highlight">
						<h3>Card <wbr>Games</h3>
					</span>
				</a>

				<div class="sub_categories">
					<a href="products.php?filter=gift_vouchers">
						<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
						<span id="category"  class="gift_vouchers inline">
						</span>
					</a>

					<a href="coming-soon.php">
						<!-- Original images sourced from Jason at Cardtastic and adapted for educational purposes: 
							 https://www.cardtastic.com.au/ -->
						<span id="category"  class="tournaments inline">
							<h3>Tournaments</h3>
						</span>
					</a>

					<a href="coming-soon.php">
						<!-- Original images sourced and adapted for educational purposes: 
							 http://www.sunpack.com/game-boxes-that-pop-building-a-better-shelfie/-->
						<span id="category"  class="board_game_library inline">
							<h3>Board <wbr>Game <wbr>Library</h3>
						</span>
					</a>
				</div>
				
				<a href="products.php?filter=loot">
					<!-- Original images sourced and adapted for educational purposes: 
						 https://www.purewow.com/family/best-subscription-boxes-for-kids-->
					<span id="category"  class="loot highlight">
						<h3>Loot</h3>
					</span>
				</a>
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