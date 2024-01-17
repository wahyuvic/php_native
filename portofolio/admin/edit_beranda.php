<?php include('atas.php'); ?>

<script type="text/javascript" src="../js/jquery.min.js"></script>							<!--JQuery standard library-->		
	<script type="text/javascript">
	$( document ).ready(function() {
	 
	 $('#Judul').change(function () {
	 $("#Judul").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan1").innerHTML="";
	 });
	  
	  $('#keterangan').change(function () {
	 $("#keterangan").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan3").innerHTML="";
	 });
	 
	  $('#nama').change(function () {
	 $("#nama").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan2").innerHTML="";
	 });
	  $('#fb').change(function () {
	 $("#fb").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan4").innerHTML="";
	 });
	 
	  $('#tw').change(function () {
	 $("#tw").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan5").innerHTML="";
	 });
	 
	  $('#ins').change(function () {
	 $("#ins").css("border","solid #a9a9a9 1px");
	 document.getElementById("pemberitahuan6").innerHTML="";
	 });
	 
	$("#ok").click(function() {
	//////////////////////////////////////////////////////////////////////////////////
	//dekralasi varibel
	var Judul = document.getElementById("Judul").value;
	var nama = document.getElementById("nama").value;
	var Keterangan = document.getElementById("keterangan").value;
	var fb = document.getElementById("fb").value;
	var tw = document.getElementById("tw").value;
	var ins = document.getElementById("ins").value;
		
	//////////////////////////////////////////////////////////////////////////////////
	if(Judul==""){
	event.preventDefault();
	document.getElementById("pemberitahuan1").innerHTML=" Judul ? ";
	document.getElementById("pemberitahuan1").style.color = "red";
	$("#Judul").css("border","solid red 1px");	
	}
	
	if(nama==""){
	event.preventDefault();
	document.getElementById("pemberitahuan2").innerHTML=" Nama  ";
	document.getElementById("pemberitahuan2").style.color = "red";
	$("#nama").css("border","solid red 1px");	
	}
	
	if(keterangan==""){
	event.preventDefault();
	document.getElementById("pemberitahuan3").innerHTML=" Keterangan  ";
	document.getElementById("pemberitahuan3").style.color = "red";
	$("#keterangan").css("border","solid red 1px");	
	}
	
	if(fb==""){
	event.preventDefault();
	document.getElementById("pemberitahuan4").innerHTML=" link Facebook  ";
	document.getElementById("pemberitahuan4").style.color = "red";
	$("#fb").css("border","solid red 1px");	
	}
	
	if(tw==""){
	event.preventDefault();
	document.getElementById("pemberitahuan5").innerHTML=" link twitter  ";
	document.getElementById("pemberitahuan5").style.color = "red";
	$("#tw").css("border","solid red 1px");	
	}
	
	if(ins==""){
	event.preventDefault();
	document.getElementById("pemberitahuan6").innerHTML=" link Instagram  ";
	document.getElementById("pemberitahuan6").style.color = "red";
	$("#ins").css("border","solid red 1px");	
	}
		
	});
			
	});
	</script>
	
	<?php
	include "../koneksi.php";
	$id=$_GET['id'];
	$query="SELECT * FROM beranda where id_beranda='$id'";
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
                <h6 class="text-white text-capitalize ps-3">Edit Beranda </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
			    <div align="center">
			    
				<div align="center">
				  <form action="olahdata/beranda.php" name="form1" method="post" enctype="multipart/form-data">
				     <input name="id" type="hidden" class="form-control" id="id" value="<?php echo"$hasil_lopping[0]";?>"/>
					<p> Data Beranda  </p>
				    <table width="616" border="0">
                      <tr>
                        <td width="145">Nama</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><input name="nama" type="text" class="form-control" id="nama" value="<?php echo"$hasil_lopping[1]";?>"/></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan2"></div></td>
                            </tr>
                          </table>
                         
                        </label></td>
                      <tr>
                        <td width="145">Judul</td>
                        <td width="19">:</td>
                        <td width="445"><label>
                          <table width="452" border="0">
                            <tr>
                              <td width="188"><input name="Judul" type="text" class="form-control" id="Judul" value="<?php echo"$hasil_lopping[2]";?>"/></td>
                              <td></td>
							  <td width="251">  <div id="pemberitahuan1"></div></td>
                            </tr>
                          </table>
                        </label></td>
					  <tr>
                        <td colspan="3">Keterangan
                          <textarea name="keterangan" rows="15" cols="100" id="keterangan"><?php echo"$hasil_lopping[3]";?></textarea>
                        <div id="pemberitahuan3"></div></label></td>
                      </tr>
					  
					  <tr>
                        <td>Facebook(link)</td>
					    <td>:</td>
					    <td><label>
                            <table width="452" border="0">
                              <tr>
                                <td width="188"><input name="fb" type="text" class="form-control" id="fb" value="<?php echo"$hasil_lopping[4]";?>"/></td>
                                <td></td>
                                <td width="251"><div id="pemberitahuan4"></div></td>
                              </tr>
                            </table>
					      </label></td>
					   </tr>
					  <tr>
                        <td>Twitter(link)</td>
					    <td>:</td>
					    <td><label>
                            <table width="452" border="0">
                              <tr>
                                <td width="188"><input name="tw" type="text" class="form-control" id="tw" value="<?php echo"$hasil_lopping[5]";?>"/></td>
                                <td></td>
                                <td width="251"><div id="pemberitahuan5"></div></td>
                              </tr>
                            </table>
					      </label></td>
					    </tr>
					  
					  <tr>
                        <td>Instagram(link)</td>
					    <td>:</td>
					    <td><label>
                            <table width="452" border="0">
                              <tr>
                                <td width="188"><input name="ins" type="text" class="form-control" id="ins" value="<?php echo"$hasil_lopping[6]";?>"/></td>
                                <td></td>
                                <td width="251"><div id="pemberitahuan6"></div></td>
                              </tr>
                            </table>
					      </label></td>
					     </tr>
                      <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><table width="453" border="0">
                            <tr>
                              <td width="218"><span class="form-group">
                                <input name="gambar" type="file" id="gambar" />
                              </span></td>
							  <td></td><td></td>
                              <td width="225"> <div id="pemberitahuan4"></div></td>
                            </tr>
                          </table>
                          <span class="form-group">                          </span>                          </td>
                      </tr>
                      
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label>
                        <input type="submit" name="Olahdata" value="Edit" class="btn btn-danger" id="ok"/>
                        <input type="reset" name="Submit2" value="Reset" class="btn btn-danger"/>
                        </label></td>
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
?>
<?php include('bawah.php'); ?>
		