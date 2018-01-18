<?php
	require_once 'assets/lib/twelve_days.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php echo getTitle();?> Lyrics</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	

	<h1><?php echo getTitle();?></h1>

	<?php
		for ($x=0; $x < 12; $x++) {
			echo getLyrics($x) . '<br>';
		}
	?>
	
	<hr>

	<button>More Lyrics</button>

	<script type="text/javascript">
		
	</script>

</body>
</html>