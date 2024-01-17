<?php
	session_start();
	require"../koneksi.php";
	$username=$_GET['username'];
	$password=$_GET['password'];
	$save=md5($_GET['password']); //simpan password ke enkripsi
	if($password=="" && $username==""){ //jika passord dan username tidak benar
	?>
		<script type="text/javascript">		
		alert("Error ! Masukan Username Dan Password Anda Secara Benar   ");
		</script>
		<?php
		header('location:index.php');
		
	}
	else if($password=="" ){
	?>
	
		<script type="text/javascript">		
		alert("Error ! Masukan  Password Anda Secara Benar  ");
		</script>
		<?php
		header('location:index.php');
		
	}
	else if($username=="" ){
	?>
		<script type="text/javascript">		
		alert("Error ! Masukan Username Anda Secara Benar ");
		</script>
		<?php
		header('location:index.php');

	}
	else {
	$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$query=mysqli_query($conn,$sql);
	$record=mysqli_fetch_assoc($query);
	if(!empty($record)){
		setcookie("username","$record[username]");
		header('location:index.php');
		}
	else{
	
	//echo"$username Maaf anda belum Terdaftar";
		?>
		<script type="text/javascript">		
		alert("Maaf Anda Tidak Bisa Masuk");
		</script>
		<?php
		header('location:index.php');
		
	}
	}
	
?>
