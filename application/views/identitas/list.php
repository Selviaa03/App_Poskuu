<div id="identitas">
	<h3 style="margin-bottom:12px" >Data Identitas</h3>
	<button data-toggle="modal" data-target="#tmbhidentitas" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>   Tambah Barang</button>

<div class="tablle">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<th>No</th>
			<th>Nama Identitas</th>
			<th>Email</th>
            <th>Alamat</th>
			<th>No Telepon</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php $no = 1; foreach($identitas as $s) { ?>
			<tr class="gradeU">
				<td><?php echo $no++ ?></td>
				<td><?php echo $s->nama_identitas ?></td>
				<td><?php echo $s->email ?></td>
                <td><?php echo $s->alamat ?></td>
                <td><?php
                if (!empty($s->no_telepon)) {
                    $whatsappLink = 'https://wa.me/' . preg_replace('/[^\d]+/', '', $s->no_telepon);
                    echo '<a href="' . $whatsappLink . '" target="_blank">' . $s->no_telepon . '</a>';
                } else {
                    echo 'No Telepon not provided';
                }
                ?></td>
				<td><?php echo anchor('identitas/edit/'.$s->id_identitas,'Edit',array('class'=>'btn btn-default')); ?> || <?php echo anchor('identitas/hapus/'.$s->id_identitas,'Hapus',array('class'=>'btn btn-danger')); ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

	<div id="tmbhidentitas" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah Identitas Baru</h4>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('identitas/tambah'); ?>" method="POST">
						<div class="form-group">
							<label>Nama Identitas</label>
							<input name="nama_identitas" type="text" class="form-control" placeholder="Nama Identitas ..">
						</div>
                        <div class="form-group">
							<label>Email</label>
							<input name="email" type="text" class="form-control" placeholder="Email ..">
						</div>
                        <div class="form-group">
							<label>Alamat</label>
							<input name="alamat" type="text" class="form-control" placeholder="Alamat ..">
						</div>
						<div class="form-group">
							<label>No Teleppon</label>
							<input name="no_telepon" type="text" class="form-control" placeholder="No Telepon ..">
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