<?php 
	
	$localhost = "localhost";
	$user = "root";
	$pass = "delfiinidonVÄIKSEMADkoerad";
	$db_name = "items";
	/*$localhost = "46.101.168.209";
	$db_name = "items";
	$user = "root";
	$pass = "";*/

	$link = mysqli_connect($localhost, $user, $pass, $db_name);
	mysqli_set_charset($link , "utf8");
	if(mysqli_connect_errno()){
		echo 'errur';
	}
	$categoryTextDefault = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
	$categoryText = $categoryTextDefault;
	$sql = "SELECT * FROM ". $categoryText. " ORDER BY svgImageLink";
	mysqli_query($link, $sql);
	$result = $link->query($sql);
	echo'
	<!DOCTYPE html>
	<html>
	<head>
		<title>Ali</title>
		<meta charset="utf-8">
		<meta content="user-scalable=0" name="viewport" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="sidebarMenu">
			<nav id="sidebarMenuLinks">
				<a href="index">Avaleht</a>
				<a href="menu">Menüü</a>
				<a href="uritused">Üritused</a>
				<a href="galerii">Galerii</a>
				<a href="kontakt">Kontakt</a>
			</nav>
		</div>
		<div id="mainContent">
			<div id="categoryTextWrapper">
			<div class="hamburger">
				<img src="images/burger.svg">
			</div>
			<p class="categoryText">'.strtoupper($categoryText).'</p>
		</div>
		<div class="items">
			
			';
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				        echo '
				        <div class="item">
					        <div class="itemImage"><img src="images/'.$row['svgImageLink'].'.svg" alt="'.$row['svgImageLink'].'"></div>
							<div class="itemName">'.$row['name'].'</div>
							<div class="itemPrice">'.$row['price'].'€</div>
						</div>';
				    }
				} else {
				    echo "Tühi";
				}
				mysqli_close($link);
			echo'
			
		</div>


		<nav id="bottomNavBar">
			<div class="percentBlock">
				<a href="supid"><img src="images/soup.svg" alt="Supid"></a>
			</div>
			<div class="percentBlock">
				<a href="pearoad"><img src="images/food.svg" alt="Pearoad"></a>
			</div>
			<div class="percentBlock">
				<a href="suupisted"><img src="images/pancake.svg" alt="Suupisted"></a>
			</div>
			<div class="percentBlock">
				<a href="joogid"><img src="images/drink.svg" alt="Joogid"></a>
			</div>
			<div class="percentBlock">
				<a href="lastele"><img src="images/fries.svg" alt="Lastetoit"></a>
			</div>

		</nav>
		
	</body>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile.js"></script>
	<script src="js/script.js"></script>

	</html>';
	
	?>