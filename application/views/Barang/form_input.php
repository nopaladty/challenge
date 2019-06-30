<style type="text/css">
	table,th,tr,td
	{
		text-align: center;
	}
</style>

<!-- quick email widget -->
<div class="box box-info">
<div class="box-header">
  <h3 class="box-title"> Tambah Data Barang</h3>

<div class="pull-right">

	<?php
		echo form_open ('barang/post');
	?>
</div>
<table class="table table-bordered table-hover">

	<tr><td>Barang</td>
		<td><input type="text" class="form-control" name="nama_barang" placeholder="nama barang"></td>
	</tr>
	<tr>
		<tr><td>Kategori</td><td>
			<select class="form-control"  name="kategori">
				<?php
				foreach ($kategori as $k)
				{
					echo "<option value=' $k->id_kategori'>$k->nama_kategori</option>";
				}
				?>
			</select>
		</td>
	</tr>
		<tr><td>Harga</td>
			<td><input type="text" name="harga" class="form-control" placholder="harga"></td></tr>
		<tr><td colspan="2"> <button type="submit" class="btn btn-info" name="submit"> simpan </button></td></tr>
	</tr>

</table>
</form>
</div></div>