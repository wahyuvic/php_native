
<?php 
include('atas.php');
?>
        <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Data Projek</h6>
              </div>
            </div>
			  <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th colspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><div align="center">Keterangan</div></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php	
										$dataPerPage = 10;
										if(isset($_GET['page']))
										{
										$noPage = $_GET['page'];
										}
										else $noPage = 1;
										$i=0;
										$offset = ($noPage - 1) * $dataPerPage;
										$query_br  ="SELECT * FROM projek order by id_projek DESC  LIMIT $offset, $dataPerPage ";
										$result_br = mysqli_query($conn,$query_br);
										while ($hasil_lopping = mysqli_fetch_array($result_br)) {
										$i++;
										?>
                    <tr>
                      <td><div class="d-flex px-2 py-1">
                          <div><span class="mb-0 text-sm">Jumlah Projek Yang Digarap:<?php echo"$hasil_lopping[1]";?> Projek</span></div>
                        <div class="d-flex flex-column justify-content-center"></div>
                      </div></td>
                      <td><p>Projek Selesai  :<?php echo"$hasil_lopping[2]";?> Projek</p>
                        <p>Klien Bahagia: <?php echo"$hasil_lopping[3]";?> Klien</p>
                        <p>Tahun: <?php echo"$hasil_lopping[4]";?> Tahun</p>
                      <td class="align-middle">
					 
						<a href="edit_projek.php?id=<?php echo"$hasil_lopping[0]";?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Data"> Edit </a></td>
                    </tr>
					<?php } ?>
                  </tbody>
                </table>
				
              </div>
            </div>
          </div>
        </div>
      </div>
	  <div align="center"><strong>
					                </strong></div>
      <?php 
	  include('bawah.php');
	  ?>