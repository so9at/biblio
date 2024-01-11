<html>
<head>
	<title>
		GESTION DE BIBLIOTHEQUE
	</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="../admin/image/logo.jpg">
			<h1 style="color: white; margin-left: 10px;">GESTION DE BIBLIOTHEQUE</h1>
		</div>

			<nav>
				<ul>
					<li><a href="student_index.php">ACCUEIL</a></li>
					<li><a href="panier.php">VOTRE_LIVRES</a></li>
					<li><a href="feedback.php">COMMENTAIRES</a></li>
					<li><a href="../admin/admin_index.php"><img src="../admin/image/login.png" />ADMIN</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<br><br><br>
		<div id="main-nav">
				<center>
				<div id="search">
					<form action="search.php" method="GET">
						<input class="search-area" type="text" name="searcharea" placeholder="chercher votre livre">
						<button class="search-btn" type="submit" name="search"><img src="../admin/image/search.png"></button>
					</form>
				</div>
				</center>
		</div>
		<br><br><br>
		<ul>
			<?php include "function.php"; ?>
			<?php get_prod_search(); ?>
		</ul>  
		<br><br><br><br><br><br>
		</section>
		<footer>
				<br>
			<h3 style="color:white;text-align: center;">Contact us through social media</h3><br>

			<div style="margin:0px 485px; width: 600px; height: 50px;">
				<ul>
				<li><a href="https://facebook.com" class="fa"><img src="../admin/image/fa.png"></a></li>
				<li><a href="https://instagram.com" class="fa"><img src="../admin/image/insta.png"></a></li>
				<li><a href="https://youtube.com" class="fa"><img src="../admin/image/you.png"></a></li>
				<li><a href="https://gmail.com" class="fa"><img src="../admin/image/gm.png"></a></li>
				</ul>
			</div>

			<br>
			<p style="color:white;text-align: center;">
				<br>
				Email:&nbsp; Online.library@gmail.com <br><br>
				Mobile:&nbsp; &nbsp; +21627******

			</p>
		</footer>

	</div>
</body>
</html>