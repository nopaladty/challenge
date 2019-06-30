<style type="text/css">
		table,th,tr,td
		{
			text-align: center;
		}
</style>

<div class="box box-info">
<div class="box-header">
  <h3 class="box-title"> Operator</h3>
 
<div class="pull-center">

<?php
echo anchor('operator/post','Tambah Data',array('class' => 'btn btn-success'));
?>
</div>
	<table class="table table-bordered table-striped table-hover"> 
		<tr>
			 <th>No</th> 
			 <th>Nama Operator</th> 
			 <th>Username </th>
			 <th colspan="2">Operasi</th>

		</tr>

	<?php
		$no=1;
	foreach ($record as $operator)
	{

	// var_dump($operator);
	// die;

		echo "<tr> 
				<td>$no</td> 
				<td>$operator->nama_operator</td>
				<td>$operator->username</td>
				 <td>".anchor ('operator/edit/'.$operator->id_operator,'Edit')."</td> 
				 <td>".anchor ('operator/hapus/'.$operator->id_operator,'Hapus')."</td> 
			</tr>";
		$no++;
	}

	?>

	</table>
</div></div>