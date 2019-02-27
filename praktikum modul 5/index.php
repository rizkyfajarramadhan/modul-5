<!DOCTYPE html>
<html>
<head>
	<title>KALKULATOR MASSA JENIS DAN USAHA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$gaya = $_POST['gaya'];
		$jarak = $_POST['jarak'];
		$massa = $_POST['massa'];
		$volume = $_POST['volume'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'usaha':
				$hasil = $gaya*$jarak;
			break;
			case 'massa jenis':
				$hasil = $massa/$volume;
			break;
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR MASSA JENIS DAN USAHA</h2>
		<form method="post" action="index.php">			
			<input type="text" name="gaya" class="bil" autocomplete="off" placeholder="Masukkan Nilai Gaya">
			<input type="text" name="jarak" class="bil" autocomplete="off" placeholder="Masukkan Nilai Jarak">
			<input type="text" name="massa" class="bil" autocomplete="off" placeholder="Masukkan Nilai Massa">
			<input type="text" name="volume" class="bil" autocomplete="off" placeholder="Masukkan Nilai Volume">
			<select class="opt" name="operasi">
				<option value="usaha">usaha</option>
				<option value="massa jenis">Massa jenis</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>