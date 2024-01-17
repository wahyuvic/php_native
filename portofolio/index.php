<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital@1&family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
</head>
<body>
     <!-- header -->
     <header>
        <h3 class="logo">Wahyu Ardiansyah</h3>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#portfolio">Portofolio</a></li>
            <li><a href="#service">Servis</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
        <a href="CV.doc" class="top-btn">Download CV</a>
    </header>

    <!-- home -->
    <section class="home" id="home">
         <?php
				$query_beranda  ="SELECT * FROM beranda where id_beranda='1' ";
			  	$result_beranda = mysqli_query($conn,$query_beranda);
			    while ($hasil_beranda = mysqli_fetch_array($result_beranda))
				{
				?>
		<div class="home-text">
            <h3>Hallo Nama Saya</h3>
            <h1><?php echo"$hasil_beranda[1]";?></h1>
            <h5><?php echo"$hasil_beranda[2]";?>  </h5>
            <p><?php echo"$hasil_beranda[3]";?></p>
            <div class="social">
                <a href="<?php echo"$hasil_beranda[4]";?>"><i class='bx bxl-facebook'></i></a>
                <a href="<?php echo"$hasil_beranda[5]";?>"><i class='bx bxl-twitter' ></i></a>
                <a href="<?php echo"$hasil_beranda[6]";?>"><i class='bx bxl-linkedin' ></i></a>
                <a href="#contact"><i class='bx bx-envelope' ></i></a>
            </div>
            <a href="#about" class="btn">Tentang Kami</a>
        </div>

        <div class="home-img">
            <img src="img/<?php echo"$hasil_beranda[7]";?>">
        </div>
		<?php 
		}?>
		
    </section>

    <!-- Sub Section -->
    <section class="sub-service">
        <div class="items">
            <div class="sub-box">
                <div class="sub-img">
                    <img src="img/target.svg">
                </div>
                <h3>Pixel Sempurna</h3>
                <p>Metode paling umum untuk mendesain situs web yang berfungsi dengan baik di desktop adalah desain responsif dan adaptif.</p>
            </div>

            <div class="sub-box">
                <div class="sub-img">
                    <img src="img/brush.svg">
                </div>
                <h3>Kualitas Tinggi</h3>
                <p>Kualitas tinggi dalam mengerjakan desain dan system</p>
            </div>

            <div class="sub-box">
                <div class="sub-img">
                    <img src="img/energy.svg">
                </div>
                <h3>Ide Istimewa</h3>
                <p>mempunyai ide yang istimewa dalam membuat webiste company profil ,ecomerce system informasi dll.</p>
            </div>
			
			
			
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
	 <?php
				$query_kami  ="SELECT * FROM tentang_kami where id_kami='1' ";
			  	$result_kami = mysqli_query($conn,$query_kami);
			    while ($hasil_kami = mysqli_fetch_array($result_kami))
				{
				?>
        <div class="about-img">
            <img src="img/<?php echo"$hasil_kami[4]";?>">
        </div>
      <div class="about-text">
            <h3><?php echo"$hasil_kami[1]";?></h3>
            <h2>saya akan mengembangkan ,membuat,meperbaiki Project dari anda</h2>
            <p><?php echo"$hasil_kami[2]";?></p>
            <a href="https://api.whatsapp.com/send?phone=<?php echo"$hasil_kami[3]";?>&text=Teks" class="btn">Mempekerjakan saya<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="30px" height="30px"> </a>
        </div>
		<?php }?>
    </section>


    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h3>Portofolio</h2>
            <h2>
            Pekerjaan Saya </h3>
            <p>beriku ini perkerjaan yang telah saya buat <br> dengan baik dan benar</p>
        </div>

        <div class="portfolio-content">
            <?php
		     	
				$query_portofolio  ="SELECT * FROM profil order by id_profil DESC  LIMIT 30 ";
			  	$result_portofolio = mysqli_query($conn,$query_portofolio);
			    while ($hasil_portofolio = mysqli_fetch_array($result_portofolio))
				{
				?> 
			<div class="col">
                <img src="img/<?php echo"$hasil_portofolio[3]";?>" width="700 px" height="500 px">
                <div class="layer">
                    <h3><?php echo"$hasil_portofolio[1]";?></h3>
                    <h5><?php echo"$hasil_portofolio[2]";?></h5>
                </div>
            </div>
				<?php }?>
            
        </div>
    </section>

    <!-- service -->
    <section class="service">
        <div class="heading" id="service">
            <h3>Servis</h2>
            <h2>Apa yang Saya Lakukan Untuk Klien</h3>
            <p>adalah membuat dan mengembangkan webiste company profile ,ecomerce ,system informasi dll</p>
        </div>
        <div class="service-content">
		
		 <?php
		     	
				$query_servis  ="SELECT * FROM servis order by id_servis DESC  LIMIT 30 ";
			  	$result_servis = mysqli_query($conn,$query_servis);
			    while ($hasil_servis = mysqli_fetch_array($result_servis))
				{
				?> 
				
            <div class="row">
                <div class="s s-one">
                    <img src="img/energy.svg">
                </div>
                <h3><?php echo"$hasil_servis[1]";?></h3>
                <h5>Mulai Dari<span> Rp <?php echo"$hasil_servis[2]";?></span></h5>
                <p><?php echo"$hasil_servis[3]";?></p>
            </div>
			<?php }
			?>
			
            
        </div>
    </section>

    <!-- work -->
    <section class="cta">
	 <?php
				$query_projek  ="SELECT * FROM projek where id_projek='1' ";
			  	$result_projek = mysqli_query($conn,$query_projek);
			    while ($hasil_projek = mysqli_fetch_array($result_projek))
				{
				?>
        <div class="heading">
            <h2>Project <?php echo"$hasil_projek[1]";?> <br> Sukses Selama <?php echo"$hasil_projek[4]";?> Tahun</h2>
        </div>
        <div class="cta-box">
            <div class="wrap-one">
                <h3><?php echo"$hasil_projek[2]";?></h3>
                <p>Projek Selesai</p>
            </div>
            <div class="wrap-two">
                <h3><?php echo"$hasil_projek[3]";?></h3>
                <p>Klien Bahagia</p>
            </div>
        </div>
		<?php } ?>
    </section>

    <!--------contact---->
	<section class="contact" id="contact">
		<div class="container">
			<div class="center">
				<h3>jika tertarik dan berada di indonesia</h3>
				<p>jangan menyukai ? kirim nama dan email anda.</p>
			</div>

			<div class="action">
				<form  name="form1" >
					<p>
					  <input type="text" class="nama" id="nama" name="nama" placeholder="Nama Anda" required >
					  <br>
					  <input type="email" name="email" id="email" placeholder="Masukan Email Anda" required  onchange="validateForm()">
				  </p>
					<p>
					  <input name="nomor" type="text" class="nama" id="nomor" placeholder="Nomoer Telepon/HP Anda" required>
</p>
					<p>
					  <textarea name="pesan" class="pesan" id="pesan" placeholder="Masukan Apa Yang Anda Pesan" required="required"></textarea>
					</p>
					<p>
					  
					  <input name="Kirim" type="button" id="Kirim" value="Kirim">
				        </p>
				</form>
			</div>
		</div>
	</section>

	<!--------ends---->
	<div class="ends">
		<p>Pembuat Wahyu Ardiansyah S,kom © 2024 |<a href="admin/login.php">Masuk Sebagai Admin</a></p>
	</div>
	<script src="https://unpkg.com/scrollreveal"></script>

    <!-- Link to JS -->
    <script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	
	function validateForm()
		{
			 var email = document.getElementById("email").value;
			 var x=email;
			 var atpos=x.indexOf("@");
			 var dotpos=x.lastIndexOf(".");
			 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			 {
			 //alert("Masukan Email Dengan Benar");
			 swal("Masukan Email Dengan Benar");
			 }
		}
	$("#Kirim").click(function() {
			
		var nama = document.getElementById("nama").value;
		var telepon = document.getElementById("nomor").value;
		var email = document.getElementById("email").value;
		var pesan = document.getElementById("pesan").value;

		function contoh() {
		swal({

								title: "Selamat "+nama+" Berhasil!",

								text: "Memasukan Pesan",

								icon: "success",

								button: true

							});
		 }	
		var data_lengkap = 'nama=' + nama + '&email=' + email + '&nomor=' + telepon + '&pesan=' + pesan ;
		//alert('uang');
		 
		if(nama==""||telepon==""||email==""||pesan==""){
		Swal.fire("salah satu data tidak terisi dengan benar");			 
		}
		else{
		$.ajax({ 
								type:"POST", 
								url:"admin/olahdata/pesan_pengirim.php", 
								data:data_lengkap, 
								success: function(data)
							{
								contoh(); 
								var nama = document.getElementById("nama").value="";
								var telepon = document.getElementById("nomor").value="";
								var email = document.getElementById("email").value="";
								var pesan = document.getElementById("pesan").value="";
								
											
		}});
		
		}				
	});
	</script>
</body>

</html>
