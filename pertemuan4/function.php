<?php 
function salam($waktu = "Datang", $nama = "Admin") {
	// echo "Hello world";
	return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Sandhika"); ?></h1>
</body>
</html>