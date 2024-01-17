
<?php 
include('atas.php');
?>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Data Protofolio</h6>
              </div>
            </div>
			 <div align="center">
			   <?php
				echo"<a href='form_portofolio.php' > -- Data Baru -- </a>";
				 ?>
		    </div>
			 <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
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
										$query_br  ="SELECT * FROM profil order by id_profil DESC  LIMIT $offset, $dataPerPage ";
										$result_br = mysqli_query($conn,$query_br);
										while ($hasil_lopping = mysqli_fetch_array($result_br)) {
										$i++;
										?>
                    <tr>
                      <td><div class="d-flex px-2 py-1">
                          <div><img src="../img/<?php echo"$hasil_lopping[3]";?>" alt="user1" width="120" height="103" class="avatar avatar-sm me-3 border-radius-lg" /></div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo"$hasil_lopping[1]";?></h6>
                        </div>
                      </div></td>
                      <td><?php echo"$hasil_lopping[2]";?></p>
                      <td class="align-middle">
					 
						<a href="edit_portofolio.php?id=<?php echo"$hasil_lopping[0]";?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Data"> Edit </a> -  <a href="olahdata/portofolio.php?id=<?php echo"$hasil_lopping[0]";?>&Olahdata=delete" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus Data" onclick="return confirm('apakah yakin menghapus ?');"> Hapus </a></td>
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
      <div align="center"><strong>Cari: 
						        <?php
echo "</table>";
$query   = "SELECT COUNT(*) AS jumData FROM profil";
$hasil  = mysqli_query($conn,$query);
$data     = mysqli_fetch_array($hasil);
$jumData = $data['jumData'];
$jumPage = ceil($jumData/$dataPerPage);
if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Kembali</a>";
for($page = 1; $page <= $jumPage; $page++)
	{
	$show = $page;
	if ((($page >= $noPage-3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
		{
	if (($show==1)&&($page != 2)) echo "|";
	if (($show !=($jumPage - 1))&&($page == $jumPage))  echo "|";
	if ($page == $noPage) echo " <b>".$page."</b> ";
	else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
}
}
if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Selanjutnya &gt;&gt;</a>";
?>
			                    </strong></strong></div>
        </div>
      <?php 
	  include('bawah.php');
	  ?>
	  <?php 
	  include('bawah.php');
	  ?>