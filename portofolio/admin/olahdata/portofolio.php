<?php
require"../../koneksi.php";
//dekralasi variabel 
$judul=$_POST['Judul'];
//$tanggal=$_POST['Tanggal'];
$keterangan=$_POST['keterangan'];
//$harga=$_POST['harga'];
$delete=$_GET['Olahdata'];
$olah_data=$_POST['Olahdata'];
//variabel menguplod gambar 
$tmp_name=$_FILES['gambar']['tmp_name'];
$nama_gambar=$_FILES['gambar']['name'];
/*///////////gambar 2///////////////////
$tmp_name2=$_FILES['icon']['tmp_name'];
$nama_gambar2=$_FILES['icon']['name'];
/////////////////////////////membuat insert update delete //////////////////////////////*/
//no_urut
$no_urut = "SELECT MAX(id_profil) FROM profil";
$result = mysqli_query($conn,$no_urut);
$array_no_urut = mysqli_fetch_array($result);
$no_urutnya=$array_no_urut[0]+1;
////////////////////////////////////////////////////////////////////////////////////////

if($olah_data=="Simpan")
{
//kondisi ketika gambar di simpan 

move_uploaded_file($tmp_name,"../../img/$nama_gambar");

$query = mysqli_query($conn,"insert  into profil values('$no_urutnya','$judul','$keterangan','$nama_gambar')");
	if($query) {
	//jika query tidak berhasil 
	header('location:../portofolio.php');
	}
	else {
	//jika query tidak berhasil
	header('location:../portofolio.php');
	}
} 

else if($olah_data=="Edit")
{
	$id=$_POST['id'];// dekralarsi edit untuk pengecualian
	if($nama_gambar==""){
	   $query = mysqli_query($conn,"update profil set judul='$judul',keterangan='$keterangan' where id_profil='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../portofolio.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../portofolio.php');
		}
	}
	else{
	move_uploaded_file($tmp_name,"../../img/$nama_gambar");
	 $query = mysqli_query($conn,"update profil set judul='$judul',keterangan='$keterangan',gambar='$nama_gambar' where id_profil='$id'");
		if($query) 
		{
		//jika query  berhasil 
		header('location:../portofolio.php');
		}
		else 
		{
		//jika query tidak berhasil
		header('location:../portofolio.php');
		}
	}
	
}

else if($delete=="delete")
{
$id=$_GET['id'];
$sql="delete from profil where id_profil='$id'";
$query=mysqli_query($conn,$sql);
header('location:../portofolio.php');
}
?>