<style type="text/css">
		table,th,tr,td
		{
			text-align: center;
		}
</style>

<div class="box box-info">
<div class="box-header">
  <h3 class="box-title">Stok</h3>
 
<div class="pull-right">

<?php
echo anchor('stok/post','Tambah Data',array('class' => 'btn btn-success'));
?>
</div>
	<table class="table table-bordered table-striped table-hover"> 
		<tr>
			 <th>No</th> 
			 <th>Nama barang</th> 
			 <th>Kategori barang</th>
			 <th>Harga Barang</th>
			 <th>Stok Barang</th>
			 <th>Tanggal</th>
			 <th colspan="2">Pilihan</th>
		</tr>

	<?php
		$no=1;
	foreach ($stok as $s);
	{
	
		echo "<tr> 
				<td>$no</td>
				<td>$s->nama_barang</td>
				<td>$s->nama_kategori</td>
				<td>$s->harga</td> 
				<td>$s->stok_barang</td>
				<td>$s->tanggal_stok</td>
				 <td>".anchor ('stok/edit/'.$s->id_stok,'Edit', array('class' => 'btn btn-warning'))."</td> 
				 <td>".anchor ('stok/hapus/'.$s->id_stok,'Hapus', array('class' => 'btn btn-danger'))."</td> 
			</tr>";
		$no++;
	}

	?>

	</table>
</div></div>