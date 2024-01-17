<?php
require"../../koneksi.php";
//dekralasi variabel 
$jumlah=$_POST['jumlah'];
$selesai=$_POST['p_selesai'];
$klien=$_POST['klien'];
$tahun=$_POST['tahun'];
////////
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 

if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update projek set jumlah='$jumlah',jumlah_selesai='$selesai',Klien='$klien',tahun='$tahun' where id_projek='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../projek.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../projek.php');
		}
}

?>