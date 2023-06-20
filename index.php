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
                <li><a href="Contact.php"><h3>Contact</h3></a></li>
				<li><a href="logout.php"><h3>Logout</h3></a></li>
            </ul>
		</div>
	</header>
	<div class="section">
		<div class="container">
<center><h2>Makanan</h2></center>
			<div class="box">
						<div class="col-4">	
							<img src="img/ayambakar.jpe">
							<p class="nama">Ayam Bakar</p>
							<p class="harga">Rp. 25.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="1">
                    		<input type="hidden" name="product_name" value="Ayam Bakar"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_1" name="quantity_1" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/ayamgeprek.jpg">
							<p class="nama">Ayam Geprek</p>
							<p class="harga">Rp. 20.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="2">
                    		<input type="hidden" name="product_name" value="Ayam Geprek"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_2" name="quantity_2" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/guramebakar.jpeg">
							<p class="nama">Gurame Bakar</p>
							<p class="harga">Rp. 35.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="3">
                    		<input type="hidden" name="product_name" value="Gurame Bakar"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_3" name="quantity_3" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/cumisauspadang.jpg">
							<p class="nama">Cumi Saus Padang</p>
							<p class="harga">Rp. 35.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="4">
                    		<input type="hidden" name="product_name" value="Cumi Saus Padang"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_4" name="quantity_4" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/lalapsambal.jpg">
							<p class="nama">Lalap Sambal</p>
							<p class="harga">Rp. 10.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="5">
                    		<input type="hidden" name="product_name" value="Lalap Sambal"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_5" name="quantity_5" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/ayamgorengsambellalapan.jpg">
							<p class="nama">Ayam Goreng Lalapan</p>
							<p class="harga">Rp. 25.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="6">
                    		<input type="hidden" name="product_name" value="Ayam Goreng Lalapan"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_6" name="quantity_6" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/nasiliwet.png">
							<p class="nama">Paket Nasi Liwet</p>
							<p class="harga">Rp. 65.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="7">
                    		<input type="hidden" name="product_name" value="Paket Nasi Liwet"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_7" name="quantity_7" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/tutugoncom.jpg">
							<p class="nama">Tutug Oncom</p>
							<p class="harga">Rp. 25.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="8">
                    		<input type="hidden" name="product_name" value="Tutug Oncom"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_8" name="quantity_8" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
<center><h2>Minuman</h2></center>
			<div class="box">
						<div class="col-4">
							<img src="img/estehmanis.jpg">
							<p class="nama">Es Teh Manis</p>
							<p class="harga">Rp. 5.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="9">
                    		<input type="hidden" name="product_name" value="Es Teh Manis"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_9" name="quantity_9" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/eskopisusu.jpg">
							<p class="nama">Es Kopi Susu</p>
							<p class="harga">Rp. 7.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="10">
                    		<input type="hidden" name="product_name" value="Es Kopi Susu"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_10" name="quantity_10" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/esjeruk.jpg">
							<p class="nama">Es Jeruk</p>
							<p class="harga">Rp. 5.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="11">
                    		<input type="hidden" name="product_name" value="Es Jeruk"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_11" name="quantity_11" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/escappucino.jpg">
							<p class="nama">Es Cappucino</p>
							<p class="harga">Rp. 10.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="12">
                    		<input type="hidden" name="product_name" value="Es Cappucino"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_12" name="quantity_12" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/escincauhijau.jpeg">
							<p class="nama">Es Cincau Hijau</p>
							<p class="harga">Rp. 10.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="13">
                    		<input type="hidden" name="product_name" value="Es Cincau Hijau"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_13" name="quantity_13" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/escendol.jpeg">
							<p class="nama">Es Cendol</p>
							<p class="harga">Rp. 10.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="14">
                    		<input type="hidden" name="product_name" value="Es Cendol"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_14" name="quantity_14" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/eskuwut.jpg">
							<p class="nama">Es Kuwut Bali</p>
							<p class="harga">Rp. 10.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="15">
                    		<input type="hidden" name="product_name" value="Es Kuwut Bali"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_15" name="quantity_15" min="1" max="15" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
						<div class="col-4">
							<img src="img/esdawet.jpg">
							<p class="nama">Es Dawet</p>
							<p class="harga">Rp. 10.000</p>
							<form method="post" action="proses.php">
                    		<input type="hidden" name="product_id" value="16">
                    		<input type="hidden" name="product_name" value="Es Dawet"><label for="quantity_3">Masukkan Jumlah:</label>
                   			<input type="number" id="quantity_16" name="quantity_16" min="1" max="10" value="1" required>
                   			<button type="submit" name="buy_now">Beli Sekarang</button>
                			</form>
						</div>
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