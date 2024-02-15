<div id="customer">
	<h3 style="margin-bottom:12px" >Data customer</h3>
	<button data-toggle="modal" data-target="#tmbhcustomer" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>   Tambah customer</button>

<div class="tablle">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<th>No</th>
			<th>Nama customer</th>
			<th>Alamat</th>
            <th>No Telp</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php $no = 1; foreach($customer as $s) { ?>
			<tr class="gradeU">
				<td><?php echo $no++ ?></td>
				<td><?php echo $s->nama_customer ?></td>
				<td><?php echo $s->alamat ?></td>
                <td><?php echo $s->notelp ?></td>
				<td><?php echo anchor('customer/edit/'.$s->id_customer,'Edit',array('class'=>'btn btn-default')); ?> || <?php echo anchor('customer/hapus/'.$s->id_customer,'Hapus',array('class'=>'btn btn-danger')); ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

	<div id="tmbhcustomer" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah customer Baru</h4>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('customer/tambah'); ?>" method="POST">
						<div class="form-group">
							<label>Nama customer</label>
							<input name="nama_customer" type="text" class="form-control" placeholder="Nama customer ..">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input name="alamat" type="text" class="form-control" placeholder="alamat ..">
						</div>	
                        <div class="form-group">
							<label>No Telp</label>
							<input name="notelp" type="text" class="form-control" placeholder="notelp ..">
						</div>																	
				</div>
					<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
							<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
					</form>
			</div>
		</div>
	</div>
</div>