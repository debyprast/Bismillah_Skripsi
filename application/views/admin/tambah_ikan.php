<div class="container">
		<div class="row mt-2">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form action="<?php echo base_url(). 'Admin/tambahikan1'; ?>" method="post" enctype="multipart/form-data" >			
	<div class="form-group">

	<div class="form-group">
		<label for="ikan">Nama Ikan</label>
			<input class="form-control <?php echo form_error('ikan') ? 'is-invalid':'' ?>" type="text" name="ikan" placeholder="Nama Ikan" />
				<div class="invalid-feedback">
					<?php echo form_error('ikan') ?>
				</div>
	</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
</form>

					</div>
				</div>
			</div>

