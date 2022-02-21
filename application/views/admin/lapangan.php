<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="<?= base_url('admin/tambah_lapangan') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm"></i> Tambah</a>
        </div>
	</div>

	<!-- ini adalah alert -->
	<?php if($this->session->flashdata('msg')){ ?>
		<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
		  <?= $this->session->flashdata('msg') ?>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	<?php } ?>
	<!-- end alert -->
	
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
							<a class="btn btn-primary" href="<?= base_url('admin/edit_lapangan/').$d->id ?>">Edit</a>
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