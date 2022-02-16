<div class="card shadow mb-4">
	<div class="card-header py-3">
	    <h6 class="m-0 font-weight-bold text-primary">Jadwal</h6>
	</div>
	<?php if($this->session->flashdata('msg')){ ?>
		<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
		  <?= $this->session->flashdata('msg') ?>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	<?php } ?>
	<div class="card-body">
	    <div class="table-responsive">
	        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th style="width:10px">No.</th>
						<th>Jadwal</th>
						<th style="width:20%">Status</th>
						<th style="width:20%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($jadwal as $d) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $d->jadwal ?></td>
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
							<a class="btn btn-danger" href="<?= base_url('admin/hapus_jadwal/').$d->id ?>">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>