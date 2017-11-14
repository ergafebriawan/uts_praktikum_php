<?php
include('fungsi.php');

$tampil = new hasil;
$pesan_user1 = $_GET['pesan1'];
$isi = "user1 : $pesan_user1 \n";
$hapus = $_GET['hapus'];

if($hapus == "bersihkan")
{
	unlink('pesan.txt');
	fopen('pesan.txt', 'w');
}


if($isi == "")
{
	header('location:user1.php');
}else
{
	$open_file = fopen('pesan.txt', 'a');
	if (!$open_file)
	{
	 	echo "tidak dapat ditampilkan";
	 	exit;
	}
	fwrite($open_file, $isi);
	fclose($open_file);
}

?>

<h3>User1</h3>

<form action="user1.php" method="get">
tulis pesan<br>
<input type="text" name="pesan2"><br>
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
