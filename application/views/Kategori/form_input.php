<style type="text/css">
	table,th,tr,td
	{
		text-align: center;
	}
</style>

<!-- quick email widget -->
<div class="box box-info">
<div class="box-header">
  <h3 class="box-title"> Tambah Data Kategori</h3>

<div class="pull-right">
	<?php
		echo form_open ('kategori/post');
	?>
</div>
<table class="table table-bordered table-hover">

	<tr><td>Nama Kategori</td>
		<td><input type="text" name="kategori" class="form-control" placeholder="kategori"></td>
	</tr>
	<tr>
		<td colspan="2"> <button type="submit"  class="btn btn-info" name="submit"> simpan </button></td>
	</tr>

</table>
</form>
</div></div>