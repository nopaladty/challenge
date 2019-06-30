<style type="text/css">
	table,th,tr,td
	{
		text-align: center;
	}
</style>

<!-- quick email widget -->
<div class="box box-info">
<div class="box-header">
  <h3 class="box-title"> Data Barang</h3>

<div class="pull-right">
<?php
	echo anchor('barang/post','Tambah data',array('class' => 'btn btn-success'))
?>
</div>

<table class="table table-bordered table-hover">
	<tr>
		<th>No</th> <th>Nama Barang</th> <th>Kategori Barang</th> <th>Harga</th> <th colspan="2">Aksi</th>
	</tr>

<?php
		$no=1;
	foreach ($record as $r)
	{
		echo "<tr> 
				<td>$no</td> 
				<td>$r->nama_barang</td> 
			    <td>$r->nama_kategori</td> 
			    <td>$r->harga</td> 
				 <td>".anchor ('barang/edit/'.$r->id_barang,'Edit',array('class' => 'btn btn-warning'))."</td> 
				 <td>".anchor ('barang/hapus/'.$r->id_barang,'Hapus',array('class' => 'btn btn-danger'))."</td> 
			</tr>";
		$no++;
	}

	?>
</table>
</div>
</div>