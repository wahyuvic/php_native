<?php include('atas.php'); ?>
	<?php
	include "../koneksi.php";
	$id=$_GET['id'];
	$query="SELECT * FROM kontak where id_kontak='$id'";
	$result=mysqli_query($conn,$query);
	while ($hasil_lopping = mysqli_fetch_array($result)) 
	{
	?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Pesan</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
			    <div align="center">
			    
				<div align="center">
				  <form action="olahdata/patner.php" name="form1" method="post" enctype="multipart/form-data">
				     <input name="id" type="hidden" class="form-control" id="id" value="<?php echo"$hasil_lopping[0]";?>"/>
					<p>Pesan Dari Pengunjung </p>
				    <table width="616" border="0">
                      <tr>
                        <td width="145">Nama</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><?php echo"$hasil_lopping[1]";?></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan1"></div></td>
                            </tr>
                          </table>
                         
                        </label></td>
                      </tr>
					  
					   <tr>
                        <td width="145">Email</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><?php echo"$hasil_lopping[2]";?></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan2"></div></td>
                            </tr>
                          </table>
                         
                        </label></td>
                      </tr>
					  
                      <tr>
                        <td colspan="3">No Telepon ( <?php echo"$hasil_lopping[4]";?>
                          )
                            <div id="pemberitahuan3"></div></label></td>
                      </tr>
					  
					  <tr>
                        <td colspan="3">Pesan Pengunjung <br />                          <?php echo"$hasil_lopping[3]";?><br />
                          <div id="pemberitahuan5">
                          <div align="center"><a href="kontak.php">Kembali</a></div>
                        </div></label></td>
                      </tr>
                    </table>
				  </form>
			      </div>
				
			    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php 
}
include('bawah.php'); ?>