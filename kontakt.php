<!DOCTYPE html>
<html>
<head>
	<title>Ali</title>
	<meta charset="utf-8">
	<meta content='user-scalable=0' name='viewport' />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id="sidebarMenu" style="padding-top:146px">
		<?php include 'sidebarMenu.php' ?>
	</div>
	<div id="mainContent">
		<div id="categoryTextWrapper">
			<div class="hamburger">
				<img src="images/burger.svg">
			</div>
			<p class="categoryText">KONTAKT</p>
			<a href="https://goo.gl/maps/kZamHvJBYZN2">
				<img src="images/map.svg">
			</a>
		</div>
		<div class="mainPageWrapper">

			<div class="mainPageContent">
				<div id="map"></div>
				<p id="welcome">Viplala baar</p>
				<p id="text-contactpage">Paldiski maantee 50</p>
				<p id="text-contactpage">56904956</p>
				<p id="text-contactpage">viplala@baar.ee</p>
				<p id="text-contactpage" style="color:#f1c40f">Happy hour iga päev kell 20:00-21:00</p>
				<p id="text-contactpage" style="color:#2e8ece">P-N 12:00-00:00</p>
				<p id="text-contactpage" style="color:#2e8ece">R-L 10:00-04:00</p>

			</div>


			<nav id="bottomNavBar" style="overflow:hidden">
				<div class="percentBlockMainPage">
					<a href="menu.php"><img src="images/menuFinal.svg" alt="Supid"></a>
				</div>
				<div class="percentBlockMainPage">
					<a href="uritused.php"><img src="images/event.svg" alt="Pearoad"></a>
				</div>
				<div class="percentBlockMainPage">
					<a href="galerii.php"><img src="images/gallery.svg" alt="Suupisted"></a>
				</div>
				<div class="percentBlockMainPage">
					<a href="kontakt.php"><img src="images/contacts.svg" alt="Lastetoit"></a>
				</div>

			</nav>
		</div>

	</body>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile.js"></script>
	<script src="js/script.js"></script>
	<script src="js/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>

	</html>