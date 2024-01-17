<?php
require"../../koneksi.php";
//dekralasi variabel 
$nama=htmlspecialchars($_POST['nama']);
$email=htmlspecialchars($_POST['email']);
$pesan=htmlspecialchars($_POST['pesan']);
$nomor=htmlspecialchars($_POST['nomor']);

//no_urut
$no_urut = "SELECT MAX(id_kontak) FROM kontak";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

$query = mysqli_query($conn,"insert  into kontak values('$no_urutnya','$nama','$email','$pesan','$nomor')");
	if($query) {
	//jika query berhasil 
	//echo"berhasil dimasukan";
	//header('location:../../index.php');
	}
	else {
	//jika query tidak berhasil
	//header('location:../../index.php#contact');
	}
?>