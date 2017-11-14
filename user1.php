<?php
include('fungsi.php');

$tampil = new hasil;
$pesan_user2 = $_GET['pesan2'];
$isi = "user2 : $pesan_user2 \n";
$hapus = $_GET['hapus'];

if($hapus == "bersihkan")
{
	unlink('pesan.txt');
	fopen('pesan.txt', 'w');
}

if($isi == "")
{
	header('location:user2.php');
}else
{
	$open_file = fopen('pesan.txt', 'a');
		if (!$open_file)
		{
		 	echo "tidak dapat membuka file";
		 	exit;
		}
	fwrite($open_file, $isi);
	fclose($open_file);
}
 
?>

<h3>User1</h3>

<form action="user2.php" method="get">
tulis pesan<br>
<input type="text" name="pesan1"><br>
<input type="submit" value ="KIRIM">
<br>
<br>
hapus pesan<br>
<input type="submit" name="hapus" value ="bersihkan">
</form>
<br>
<br>

<?php 
	$tampil->tampil();
?>
