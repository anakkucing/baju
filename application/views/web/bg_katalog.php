
<div id="content" class="col-sm-9"> 
<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
	<li><a href="<?php echo base_url(); ?>katalog/lihat">Download Katalog Produk</a></li>
</ul>

<h1>Download Katalog Produk</h1>
<?php
if(count($katalog->result_array())>0){
foreach($katalog->result_array() as $kt)
{
echo "
<div class='panel panel-default'>
  <div class='panel-heading'>".$kt['judul_file']."</div>
  <div class='panel-body'>
    <table>
	<tr><td width='100'><b>File</b></td><td width='10'> : </td><td>".$kt['judul_file']."</td></tr>
	<tr><td><b>Tanggal</b></td><td> : </td><td>".$kt['tgl_posting']."</td></tr>
	<tr><td><b>Diposting oleh</b></td><td> : </td><td>Administrator</td></tr>
	<tr><td></td><td></td><td align='right'><div class='buttons'><div class='pull-right'><a href='".base_url()."asset/download/".$kt['nama_file']."'><span class='btn btn-primary'>Download File</span></a></div></div></td></tr>
	</table>
  </div>
</div>";
}
}
else{
echo "Maaf, belum ada file katalog yang bisa di download.";
}
?>
</div>
