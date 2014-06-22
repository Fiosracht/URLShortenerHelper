<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./style/style.css">
<title>URL shortener helper</title>
</head>
<body>
<div class="main-container">
	<div class="ListSelector">
			<div class="List float-left">
					<div class="ListHeader">选择项目</div>
					
			
<?php
mysqli_query ( $con, "SET NAMES utf8" );
$result = mysqli_query ( $con, "SELECT * FROM items" );

while ( $row = mysqli_fetch_array ( $result ) ) {
	echo "<div class=\"ListItem\">
		<input type=\"checkbox\" name=\"items\" onclick=\"check()\" id=\"item-check-".$row ['id']."\" value=\"" . $row ['id'] . "\" />
		<label for=\"item-check-".$row ['id']."\">" . $row ['name'] . "</label>
		</div>";
}
?>
</div>
			<div class="List float-right">
					<div class="ListHeader">选择用途</div>
					
					
<?php
$result = mysqli_query ( $con, "SELECT * FROM places" );

while ( $row = mysqli_fetch_array ( $result ) ) {

	echo "<div class=\"ListItem\">
		<input type=\"checkbox\" name=\"places\" value=\"" . $row ['id'] . "\" />
		<label for=\"item-check-".$row ['id']."\">" . $row ['name'] . "</label>
		</div>";
}
?>
			</div>
			<br class="clear" />
		</div>

		
		
<!-- 		<div class="button">
			<div>asdasdasdasdadsadas</div>
			<a href="action.php?act=check">check</a>
		</div>
		<div class="button">
			<div>asdadasd</div>
			<a href="action.php?act=export">export</a>
		</div> -->
		</div>
</body>
</html>

<?php
mysqli_close ( $con );
?>