<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahdata"><i
                    class="fas fa-plus fa-sm"></i> Tambah</a>
        </div>
	</div>
	<?php if($this->session->flashdata('msg')){ ?>
		<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
		  <?= $this->session->flashdata('msg') ?>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	<?php } ?>

	<!-- start untuk modal tambah data -->
	<div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<form action="<?= base_url('admin/tambah_lapangan') ?>" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Nama Lapangan</label>
							<input class="form-control" type="text" name="nama" required>
						</div>
						<div class="form-group">
							<label>Status</label>
							<select name="status" class="form-control">
								<option value="1">Aktif</option>
								<option value="2">Tidak Aktif</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<input type="Submit" class="btn btn-primary" value="Simpan">
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- end untuk modal tambah data -->
	
	<div class="card-body">
	    <div class="table-responsive">
	        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th style="width:10px">No.</th>
						<th>Lapangan</th>
						<th style="width:20%">Status</th>
						<th style="width:20%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($lapangan as $d) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $d->nama ?></td>
						<td>
							<?php
								if ($d->status == 1) {
									echo "Aktif";
								} else {
									echo "Tidak Aktif";
								}
							?>
						</td>
						<td>
							<a class="btn btn-primary" href="">Edit</a>
							<a class="btn btn-danger" href="<?= base_url('admin/hapus_lapangan/').$d->id ?>">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	
</script>