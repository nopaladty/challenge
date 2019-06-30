<style type="text/css">
	table,th,tr,td
	{
		text-align: center;
	}
</style>

<!-- quick email widget -->
<div class="box box-info">
<div class="box-header">
  <h3 class="box-title"> Tambah Data Stok</h3>

<div class="pull-right">

	<?php
		echo form_open ('stok/post');
	?>
</div>
<table class="table table-bordered table-hover">

	
	<tr>
		<td>Barang</td><td>
			<select class="form-control select22"  name="kategori">
				<?php
				foreach ($barang as $b)
				{
					echo "<option value=' $b->id_barang'>$b->nama_barang</option>";
				}
				?>
			</select>
		</td>
	</tr>
	<tr> 
		<tr><td>Stok</td>
			<td><input type="text" name="stok" class="form-control" placholder="stok"></td></tr>
		<tr><td colspan="2"> <button type="submit" class="btn btn-info" name="submit"> simpan </button></td></tr>
	</tr>

</table>
</form>
</div></div>