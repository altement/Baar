<?php 
	$localhost = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "items";

	$link = mysqli_connect($localhost, $user, $pass, $db_name);
	if(mysqli_connect_errno()){
		echo 'errur';
	}
	$categoryTextDefault = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
	$categoryTextLower = strtolower($categoryTextDefault);
	$categoryText = ucfirst($categoryTextLower);
	mysqli_query($link, "SELECT * FROM ". $categoryText);
	$sql = "SELECT * FROM ". $categoryText;
	$result = $link->query($sql);
	

	echo'
	<html>
	<head>
		<title>Ali</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="categoryTextWrapper">
			<p class="categoryText">'.$categoryText.'</p>
		</div>
		<div class="items">
			
			';
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo '
				        <div class="item">
					        <div class="itemImage"><img src="images/'.$row['svgImageLink'].'.svg" alt="'.$row['svgImageLink'].'"></div>
							<div class="itemName">'.$row['name'].'</div>
							<div class="itemPrice">'.$row['price'].'</div>
						</div>';
				    }
				} else {
				    echo "0 results";
				}
				mysqli_close($link);
			echo'
			
		</div>


		<nav id="bottomNavBar">
			<div class="percentBlock">
				<a href="supid.php"><img src="images/soup.svg" alt="Supid"></a>
			</div>
			<div class="percentBlock">
				<a href="pearoad.php"><img src="images/food.svg" alt="Pearoad"></a>
			</div>
			<div class="percentBlock">
				<a href="suupisted.php"><img src="images/pancake.svg" alt="Suupisted"></a>
			</div>
			<div class="percentBlock">
				<a href="joogid.php"><img src="images/drink.svg" alt="Joogid"></a>
			</div>
			<div class="percentBlock">
				<a href="lastele.php"><img src="images/fries.svg" alt="Lastetoit"></a>
			</div>

		</nav>
		
	</body>
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>

	</html>';
	
	?>