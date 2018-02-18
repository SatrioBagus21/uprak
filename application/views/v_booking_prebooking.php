<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prebooking</title>
</head>
<body>
	<h2>Info Rute</h2>
	<p>Depart At : <?php echo $rute[0]['depart_at'] ?></p>
	<p>Rute from : <?php echo $rute[0]['rute_from'] ?></p>
	<p>Rute to : <?php echo $rute[0]['rute_to'] ?></p>
	<p>Class : <?php echo $rute[0]['class'] ?></p>
	<!-- <p>Price : <?php echo $rute[0]['price'] ?></p> -->

	<h2>Ringkasan</h2>
	<p>Harga tiket : <?php echo $rute[0]['price'] ?></p>
	<p>Jumlah Penumpang : <?php echo $_GET['passengers'] ?></p>
	<p>Jumlah bayar : <?php echo $_GET['passengers']*$rute[0]['price']  ?></p>

	<form method="GET" action="<?php echo base_url() ?>booking/booking">
		<input type="hidden" value="<?php echo $_GET['passengers'] ?>" name="passengers">
		<button>Lanjut Booking</button>
	</form>
</body>
</html>