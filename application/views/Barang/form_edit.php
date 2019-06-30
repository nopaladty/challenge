<h3> Edit Data Barang</h3>
	<?php
		echo form_open ('barang/edit');
	?>

<input type="hidden" name="id" value="<?php echo $record['id_barang']?>">
<table border="3">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" value="<?php echo $record['nama_barang']?>" placeholder="barang"></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td>
		<select name="kategori">
		<?php
		foreach ($kategori as $k)
		{
			echo "<option value='$k->id_kategori'";
			echo $record['id_kategori']= $k->id_kategori?'selected':'';
			echo">$k->nama_kategori</option>";
		}	
		?>
	</select>
		</td>
	</tr>
	<tr><td>Harga</td>
		<td><input type="text" name="harga" value="<?php echo $record['harga']?>" placeholder="harga"></td></tr>
	<tr>
		<td colspan="2"> <button type="submit" name="submit"> simpan </button></td>
	</tr>

</table>
</form>