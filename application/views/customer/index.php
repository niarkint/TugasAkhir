

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-info">
						<div class="card-body">
							<table id="datatable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>No Telp</th>
										<th>Alamat</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($customer as $value): ?>
										<tr>
											<td><?php echo $value->nama_customer?></td>
											<td><?php echo $value->no_telp ?></td>
											<td><?php echo $value->alamat ?></td>
										</tr>
									<?php 
									$no++;
									endforeach;?>

								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
