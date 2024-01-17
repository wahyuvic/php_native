<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
$keterangan=$_POST['keterangan'];
$no=$_POST['no'];
////////
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];

if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	if($nama_gambar=="")
	{
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update tentang_kami set judul='$judul',keterangan='$keterangan',no_wa='$no' where id_kami='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../tentang_kami.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../tentang_kami.php');
		}
	}
	else
	{
	move_uploaded_file($tmp_name,"../../img/$nama_gambar");
	$query = mysqli_query($conn,"update tentang_kami set judul='$judul',keterangan='$keterangan',no_wa='$no',gambar='$nama_gambar' where id_kami='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../tentang_kami.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../tentang_kami.php');
		}
	}
}

?>