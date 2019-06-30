<style type="text/css">
		table,th,tr,td
		{
			text-align: center;
		}
</style>

<div class="box box-info">
<div class="box-header">
  <h3 class="box-title"> kategori Barang</h3>
 
<div class="pull-right">
<?php
echo anchor('kategori/post','Tambah Data',array('class' => 'btn btn-success'));
?>
</div>
	<table class="table table-bordered table-hover"> 
		<tr> <th>No</th> <th>Nama Kategori</th> <th colspan="2">Aksi</th> </tr>

	<?php
		$no=1;
	foreach ($record->result() as $a)
	{
		echo "<tr> 
				<td>$no</td> 
				<td>$a->nama_kategori</td> 
				 <td>".anchor ('kategori/edit/'.$a->id_kategori,'Edit',array('class' => 'btn btn-warning'))."</td> 
				 <td>".anchor ('kategori/hapus/'.$a->id_kategori,'Hapus',array('class' => 'btn btn-danger'))."</td> 
			</tr>";
		$no++;
	}

	?>

	</table>
 </div>
</div>