<h3 style="margin-bottom:12px" >Laporan</h3>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('laporan', array('class'=>'form-inline')); ?>
                    <div class="form-group">
                        <label for="exampleInputName2">Tanggal</label>
                        <input type="text" name="tanggal1" class="form-control" placeholder="Tanggal Mulai">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2"> - </label>
                        <input type="text" name="tanggal2" class="form-control" placeholder="Tanggal Selesai">
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Tampilkan</button>
                </form>
            </div>
        </div>
        <!-- /. PANEL  -->
    </div>


    <div class="col-md-12">
        <div class="panell">
            <div class="panell-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal Transaksi</th>
                                <th>Operator</th>
                                <th>Total Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                            <tr class="gradeU">
                                <td><?php echo $no ?></td>
                                <td><?php echo $r->tanggal_transaksi ?></td>
                                <td><?php echo $r->nama_lengkap ?></td>
                                <td><?php echo $r->total ?></td>
                            </tr>
                        <?php $no++; $total=$total+$r->total; } ?>
                            <tr>
                                <td colspan="3">Total</td>
                                <td><?php echo $total;?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /. TABLE  -->
            </div>
        </div>
    </div>
</div>
<!-- /. ROW  -->