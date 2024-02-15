<h3 style="margin-bottom:12px">Edit customer</h3>
<?php foreach($customer as $s) { ?>
	<form action="<?php echo base_url('customer/load_edit') ?>" method="POST">
		<div class="form-group">
			<label>Nama customer</label>
			<input name="id_customer" type="hidden" value="<?php echo $s->id_customer ?>">
			<input name="nama_customer" type="text" class="form-control" value="<?php echo $s->nama_customer ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input name="alamat" type="text" class="form-control" value="<?php echo $s->alamat ?>">
		</div>
        <div class="form-group">
			<label>No Telepon</label>
			<input name="notelp" type="text" class="form-control" value="<?php echo $s->notelp ?>">
		</div>
		<?php echo anchor('customer','Kembali',array('class'=>'btn btn-danger'))?> || <input type="submit" class="btn btn-primary" value="Simpan">
	</form>
<?php } ?>