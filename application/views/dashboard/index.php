<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				<span class="page-title-icon bg-gradient-primary text-white me-2">
					<i class="mdi mdi-home"></i>
				</span> <?= $nama ?>
			</h3>
		</div>
		<div class="row">
			<div class="col-lg grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title d-flex justify-content-between">
							<?= $nama ?>
							<div>
								<a href="<?= base_url() ?>dashboard/pdf" class="btn btn-sm btn-success btn-pill" target="_blank">Export</a>
								<a href="<?= base_url() ?>dashboard/tambah" class="btn btn-sm btn-primary btn-pill">Tambah Data</a>
							</div>
						</h4>
						</p>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>NRP</th>
									<th>Email</th>
									<th>Jurusan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($res_mahasiswa as $row) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $row['nama'] ?></td>
										<td><?= $row['nrp'] ?></td>
										<td><?= $row['email'] ?></td>
										<td><?= $row['jurusan'] ?></td>
										<td>
											<a href="<?= base_url() ?>dashboard/edit/<?= $row['id'] ?>" class="btn btn-sm btn-info">Edit</a>
											<a href="<?= base_url() ?>dashboard/delete/<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Form Input Data -->
	<!-- content-wrapper ends -->