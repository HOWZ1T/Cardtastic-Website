<?php
	session_start();
	require_once('scripts/shared-content.php');
	add_top("Cardtastic: Login", "The login page for Cardtastic", "games store cardtastic australia login", "Cardtastic Dylan Randall");
?>
	<body>
		<?php
			add_header();
		?>
		
		<main>
			<div class="product-grid">
				<form class="login" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post" onsubmit="return validate()">
					<label id="lblEmail"><input id="email" name="email" type="text" value="" placeholder="Enter email" oninput="emailUpdate()"></label>
					<label id="lblPswd"><input id="pswd" name="password" type="password" value="" placeholder="Enter password" oninput="passwordUpdate()"></label>
					
					<input class="button" type="submit" value="LOGIN">
				</form>
			</div>
		</main>
		
		<?php
			add_footer();
		?>
		<script type="text/javascript" src="scripts/login.js"></script>
	</body>
</html>

<?php
	include_once('/home/eh1/e54061/public_html/wp/debug.php');
?>