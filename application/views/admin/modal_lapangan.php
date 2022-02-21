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