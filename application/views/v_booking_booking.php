<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Booking</title>
</head>
<body>
	<h2>Data Diri</h2>
	<form action="<?php echo base_url() ?>booking/seat" method="POST">
	<?php for ($i=0; $i < $_GET['passengers'] ; $i++) { ?>
		<label for="">Name</label>
		<input type="text" name="name[]"><br>
		<label for="">Address</label>
		<input type="text" name="address[]"><br>
		<label for="">Email</label>
		<input type="text" name="email[]"><br>
		<label for="">Gender</label>
		<select name="gender[]" id="">
			<option value="">Laki-laki</option>
			<option value="">Perempuan</option>
		</select>
		<br>
		<br>
	<?php } ?>
	<button name="submit" type="submit">Lanjut pilih kursi</button>
	</form>
</body>
</html>