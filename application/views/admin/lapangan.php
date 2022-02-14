<div class="card shadow mb-4">
	<div class="card-header py-3">
	    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
	</div>
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
							<a class="btn btn-danger" href="">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>