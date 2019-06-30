<h3></head>Edit Data Operator</h3>
<?php
	echo form_open('operator/edit');
?>
<input type="hidden" value="<?php echo $record['id_operator']?>" name="id">
<table class="table table-bordered">
				<tr><td>Nama Lengkap</td>
					<td><input type="text" name="nama" placeholder ="nama lengkap"value="<?php echo $record['nama_operator']?>">
					</td></tr>
				<tr><td>Username</td>
					<td><input type="text" name="nama_operator" placeholder ="username"value="<?php echo $record['username']?>">
					</td></tr>
					<tr><td colspan="2"><button class="btn btn-info btn-sm" type="submit" name="submit">Simpan</button>
					<?php echo anchor ('operator','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
					</td></tr>
</form>