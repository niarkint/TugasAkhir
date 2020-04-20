<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-info">
						<div class="card-body">
							<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
								data-target="#modal-default">
								<i class="fas fa-edit"></i> Add
							</button>
							<table id="datatable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No Inventaris</th>
										<th>Nama</th>
										<th>Jumlah</th>
										<th>Satuan</th>
										<th>Harga Beli</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									foreach ($inventory as $value): ?>
									<tr>
										<td><?php echo $value->no_inv ?></td>
										<td><?php echo $value->nama_inv ?></td>
										<td><?php echo $value->jumlah ?></td>
										<td><?php echo $value->satuan ?></td>
										<td><?php echo $value->harga_beli ?></td>
										<td><?php echo $value->keterangan ?></td>
										<td>
											<a href="<?php echo base_url("inventory/edit/{$value->id_inventory}") ?>"
												class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
											<a href="<?php echo base_url("inventory/delete/{$value->id_inventory}") ?>"
												class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach;?>

								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Default Modal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="card card-info">
							<?php echo ($this->uri->segment(2) == "edit" ? form_open('inventory/update/'.$this->uri->segment(3), 'class="form-horizontal"') : form_open('inventory/save', 'class="form-horizontal"')); ?>
							<div class="card-body">
								<div class="form-group row">
									<label for="no_inv" class="col-sm-3 col-form-label">Nomor</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="no_inv" id="no_inv">
									</div>
								</div>
								<div class="form-group row">
									<label for="nama_inv" class="col-sm-3 col-form-label">Nama Inventaris</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama_inv" id="nama_inv">
									</div>
								</div>
								<div class="form-group row">
									<label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="jumlah" id="jumlah">
									</div>
								</div>
								<div class="form-group row">
									<label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="satuan" id="satuan">
									</div>
								</div>
								<div class="form-group row">
									<label for="harga_beli" class="col-sm-3 col-form-label">Harga Beli</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="harga_beli" id="harga_beli">
									</div>
								</div>
								<div class="form-group row">
									<label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="keterangan" id="keterangan">
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">

							</div>
							<!-- /.card-footer -->
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="submit" class="btn btn-info">Simpan</button>
				<button type="reset" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
