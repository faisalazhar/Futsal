<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Jadwal</h1>
        </div>
	</div>
	
	<div class="card-body">
	    <form action="<?= base_url('admin/simpan_jadwal') ?>" method="post">
	    	<div class="form-group">
	    		<label>Jadwal</label>
	    		<input class="form-control" type="text" name="nama">
	    	</div>
	    	<div class="form-group">
	    		<label>Status</label>
	    		<select class="form-control" name="status">
	    			<option value=""></option>
	    			<option value="1">Aktif</option>
	    			<option value="2">Tidak Aktif</option>
	    		</select>
	    	</div>
	    	<div class="form-group">
	    		<a class="btn btn-danger" href="<?= base_url('admin/jadwal') ?>">Batal</a>
	    		<input class="btn btn-primary" type="submit" value="Simpan">
	    	</div>
	    </form>
	</div>
</div>
