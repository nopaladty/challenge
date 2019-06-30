<h3> Edit Data Kategori</h3>
	<?php
		echo form_open ('kategori/edit');
	?>
<table border="3">

		<input type="hidden" name="id" value ="  <?php echo $record['id_kategori']; ?> " placeholder="kategori">
	<tr><td>Nama Kategori</td>
		<td><input type="text" name="kategori" value= " <?php echo $record['nama_kategori']; ?> " placeholder="kategori"></td>
	</tr>
	<tr>
		<td colspan="2"> <button type="submit" name="submit"> simpan </button></td>
	</tr>

</table>
</form>