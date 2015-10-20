<!DOCTYPE html>
<html>
<head>
	<title>Ali</title>
	<meta charset="utf-8">
	<meta content='user-scalable=0' name='viewport' />
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
			<p class="categoryText">ÜRITUSED</p>
			<a href="https://goo.gl/maps/kZamHvJBYZN2">
				<img src="images/map.svg">
			</a>
		</div>
		<div class="mainPageWrapper">

			<div class="mainPageContent">
				
				<?php include 'eventloader.php';?>

			</div>


			<nav id="bottomNavBar" style="overflow:hidden">
				<div class="percentBlockMainPage">
					<a href="menu"><img src="images/menuFinal.svg" alt="Supid"></a>
				</div>
				<div class="percentBlockMainPage">
					<a href="uritused"><img src="images/event.svg" alt="Pearoad"></a>
				</div>
				<div class="percentBlockMainPage">
					<a href="galerii"><img src="images/gallery.svg" alt="Suupisted"></a>
				</div>
				<div class="percentBlockMainPage">
					<a href="kontakt"><img src="images/contacts.svg" alt="Lastetoit"></a>
				</div>
			</nav>
		</div>

	</body>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile.js"></script>
	<script src="js/script.js"></script>

</html>