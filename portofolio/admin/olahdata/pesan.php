<?php
require"../../koneksi.php";
//dekralasi variabel 
$delete=$_GET['Olahdata'];
////////////////////////////////////////////////////////////////////////////////////////
if($delete=="delete")
{
$id=$_GET['id'];
$sql="delete from kontak where id_kontak='$id'";
$query=mysqli_query($conn,$sql);
header('location:../kontak.php');
}
?>