<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DAPOER UMI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<h1>DAPOER UMI</h1>
            <ul>
                <li><a href="index.php"><h3>Home</h3></a></li>
                <li><a href="about.php"><h3>About</h3></a></li>
                <li><a href="contact.php"><h3>Contact</h3></a></li>
				<li><a href="logout.php"><h3>Logout</h3></a></li>
            </ul>
		</div>
	</header>
	<div class="section">
		<div class="container">
<center><h1>Tentang Kami</h1></center>
			<div class="box">
                <h1>Kami menyediakan berbagai macam makanan khas tradisional, khususnya khas sunda. Diantaranya ada gurame bakar, lalab sambal, ayam goreng lalab sambel, paket nasi liwet, tutug oncom dll. Dan kami juga menyediakan berbagai macam minuman, baik yang tradisional maupun yang kekinian.</h1>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p>Kp. Cibolang, 003/010, Ds. Ciderum, Kec. Caringin, Kab. Bogor, Jawa Barat.</p>

			<h4>Email</h4>
			<p>muhammadnaufalghaisani@smkwikrama.sch.id</p>

			<h4>No. Hp</h4>
			<p>081281162160</p>
			<small>Copyright &copy; 2023 - DAPOER UMI.</small>
		</div>
	</div>
</body>
</html>