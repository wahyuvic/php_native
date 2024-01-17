<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
//$tanggal=$_POST['Tanggal'];
$keterangan=$_POST['keterangan'];
$harga=$_POST['harga'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
/*$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];
////////////gambar 2///////////////////
$tmp_name2=$_FILES['icon']['tmp_name'];
$nama_gambar2=$_FILES['icon']['name'];
/////////////////////////////membuat insert update delete //////////////////////////////*/
//no_urut
$no_urut = "SELECT MAX(id_servis) FROM servis";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 
/*
move_uploaded_file($tmp_name,"../../img/$nama_gambar");
move_uploaded_file($tmp_name2,"../../img/icon/$nama_gambar2");
*/
$query = mysqli_query($conn,"insert  into servis values('$no_urutnya','$judul','$harga','$keterangan')");
	if($query) {
	//jika query tidak berhasil 
	header('location:../layanan.php');
	}
	else {
	//jika query tidak berhasil
	header('location:../layanan.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	
	$query = mysqli_query($conn,"update servis set judul='$judul',harga='$harga',keterangan='$keterangan' where id_servis='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../layanan.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../layanan.php');
		}
	
	/*
	if($nama_gambar=="" && $nama_gambar2=="")
	{
	//kondisi ketika edit tapi gambar tidak dirubah
	$query = mysqli_query($conn,"update layanan set judul='$judul',isi='$keterangan' where id_layanan='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../layanan.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../layanan.php');
		}
	}
	else if ($nama_gambar2=="")
	{
	move_uploaded_file($tmp_name,"../../img/$nama_gambar");
	$query = mysqli_query($conn,"update layanan set judul='$judul',isi='$keterangan',gambar='$nama_gambar' where id_layanan='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../layanan.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../layanan.php.php');
		}
	}
	
	else if ($nama_gambar=="")
	{
	move_uploaded_file($tmp_name,"../../img/$nama_gambar");
	$query = mysqli_query($conn,"update layanan set judul='$judul',isi='$keterangan',icon='$nama_gambar2' where id_layanan='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../layanan.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../layanan.php.php');
		}
	}*/
	
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="delete from servis where id_servis='$id'";
$query=mysqli_query($conn,$sql);
header('location:../layanan.php');
}
?>