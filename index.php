<?php
	require_once 'assets/lib/twelve_days.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<title><?php echo getTitle();?> Lyrics</title>
	<link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<h1><?php echo getTitle();?></h1>

	<?php echo getLyrics();?>

	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>