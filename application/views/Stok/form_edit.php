<h3> Edit Data Stok</h3>
	<?php
		echo form_open ('stok/edit');
	?>

<input type="hidden" name="id" value="<?php echo $record['id_stok']?>">
<table border="3">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" value="<?php echo $record['nama_barang']?>" placeholder="barang"></td>
	</tr>
	<tr>
		<td colspan="2"> <button type="submit" name="submit"> simpan </button></td>
	</tr>

</table>
</form>