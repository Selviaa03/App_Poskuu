<h3 style="margin-bottom:12px">Edit Identitas</h3>
<?php foreach($identitas as $s) { ?>
	<form action="<?php echo base_url('identitas/load_edit') ?>" method="POST">
		<div class="form-group">
			<label>Nama Identitas</label>
			<input name="id_identitas" type="hidden" value="<?php echo $s->id_identitas ?>">
			<input name="nama_identitas" type="text" class="form-control" value="<?php echo $s->nama_identitas ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input name="email" type="text" class="form-control" value="<?php echo $s->email ?>">
		</div>
        <div class="form-group">
			<label>Alamat</label>
			<input name="alamat" type="text" class="form-control" value="<?php echo $s->alamat ?>">
		</div>
        <div class="form-group">
			<label>No Telepon</label>
			<input name="no_telepon" type="text" class="form-control" value="<?php echo $s->no_telepon ?>">
		</div>
		<?php echo anchor('identitas','Kembali',array('class'=>'btn btn-danger'))?> || <input type="submit" class="btn btn-primary" value="Simpan">
	</form>
<?php } ?>