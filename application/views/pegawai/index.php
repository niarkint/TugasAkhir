<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-info">
						<div class="card-body">
							<button type="button" class="btn btn-sm btn-success mb-4" data-toggle="modal"
								data-target="#modal-default">
								<i class="fas fa-edit"></i> Add
							</button>
							<table id="datatable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Jabatan</th>
										<th>Username</th>
										<th>No Telp</th>
										<th>Alamat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
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
							<form class="form-horizontal" id="form_input">
							<div class="card-body">
								<div class="form-group row">
									<label for="nama_pegawai" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai">
									</div>
								</div>
								<div class="form-group row">
									<label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="jabatan" id="jabatan">
									</div>
								</div>
								<div class="form-group row">
									<label for="username" class="col-sm-3 col-form-label">Username</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="username" id="username">
									</div>
								</div>
								<div class="form-group row">
									<label for="password" class="col-sm-3 col-form-label">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="password" id="password">
									</div>
								</div>
								<div class="form-group row">
									<label for="no_telp" class="col-sm-3 col-form-label">No Telp</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" name="no_telp" id="no_telp">
									</div>
								</div>
								<div class="form-group row">
									<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="alamat" id="alamat">
									</div>
								</div>
							</div>
							<div class="card-footer">

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="submit" class="btn btn-info">Simpan</button>
				<button type="reset" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- <div class="modal fade" id="modal-default">
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
							<?php echo ($this->uri->segment(2) == "edit" ? form_open('pegawai/update/'.$this->uri->segment(3), 'class="form-horizontal"') : form_open('pegawai/save', 'class="form-horizontal"')); ?>
							<div class="card-body">
								<div class="form-group row">
									<label for="nama_pegawai" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai">
									</div>
								</div>
								<div class="form-group row">
									<label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="jabatan" id="jabatan">
									</div>
								</div>
								<div class="form-group row">
									<label for="username" class="col-sm-3 col-form-label">Username</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="username" id="username">
									</div>
								</div>
								<div class="form-group row">
									<label for="password" class="col-sm-3 col-form-label">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="password" id="password">
									</div>
								</div>
								<div class="form-group row">
									<label for="no_telp" class="col-sm-3 col-form-label">No Telp</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" name="no_telp" id="no_telp">
									</div>
								</div>
								<div class="form-group row">
									<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="alamat" id="alamat">
									</div>
								</div>
							</div>
							<div class="card-footer">

							</div>
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
	</div>
</div> -->

<script>
	var base_url ='<?= base_url() ?>';
</script>