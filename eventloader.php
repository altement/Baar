<?php 
	error_reporting(0);
	$localhost = "localhost";
	$user = "root";
	$pass = "delfiinidonVÄIKSEMADkoerad";
	$db_name = "items";
	$today = date('Y-m-j');

	/*$localhost = "mysql7.000webhost.com";
	$db_name = "a3432704_uko";
	$user = "a3432704_uko";
	$pass = "uko123";*/
	$nmeng = array('january', 'february', 'march', 'april', 'may', 'june', 'july', 'october', 'december');
	$nmest = array('jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'oktoober', 'detsember');

	$link = mysqli_connect($localhost, $user, $pass, $db_name);
	mysqli_set_charset($link , "utf8");
	if(mysqli_connect_errno()){
		echo 'errur';
	}
	$sql = "SELECT * FROM events WHERE date > '$today'";
	mysqli_query($link, $sql);
	
	$result = $link->query($sql);



	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
			echo '
				<div class="event">
					<div class="date">'.str_ireplace($nmeng, $nmest, date("d F",strtotime($row['date']))).'</div>
					<div class="eventName">'.$row['name'].'</div>
					<div class="eventDesc">'.$row['desc'].'</div>
				</div>';
		}
	} else {
		echo "Ühtegi üritust ei toimu!";
	}

	mysqli_close($link);

?>
