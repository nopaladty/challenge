<style type="text/css">
	table,th,tr,td
	{
		text-align: center;
	}
</style>

<!-- quick email widget -->
<div class="box box-info">
<div class="box-header">
  <h3 class="box-title"> operator</h3>

<div class="pull-right">
	<?php
		echo form_open ('operator/post');
	?>
</div>
<table class="table table-bordered table-hover">

	<tr><td>Nama Operator</td>
		<td><input type="text" name="operator" class="form-control" placeholder="Operator">
		</td></tr>
	<tr><td>Username</td>
		<td><input type="text" name="username" class="form-control" placeholder="username">
		</td></tr>
	<tr><td>password</td>
		<td><input type="text" name="password" class="form-control" placeholder="password">
		</td></tr>
	<tr>
		<td colspan="2"> <button type="submit" class="btn btn-info" name="submit"> simpan </button></td>
	</tr>

</table>
</form>
</div></div>