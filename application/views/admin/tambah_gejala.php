<form action="<?php echo base_url(). 'Admin/tambahgejala1'; ?>" method="post" enctype="multipart/form-data" >			
	<div class="form-group">
		<label for="ikan">pilih id ikan</label>
			<select class="form-control" name="ikan">
				<option disabled selected >Pilih kan</option>
					<?php foreach($dataikan as $row):?>
						<option value="<?= $row->ikan?>"><?= $row->ikan?></option>
					<?php endforeach; ?>
			</select>
	</div>
	
	<div class="form-group">
		<label for="gejala">Nama gejala</label>
			<input class="form-control <?php echo form_error('gejala') ? 'is-invalid':'' ?>" type="text" name="gejala" placeholder="Nama Kelas" />
				<div class="invalid-feedback">
					<?php echo form_error('gejala') ?>
				</div>
	</div>
	<div class="form-group">
		<label for="id_ikan">pilih id ikan</label>
			<select class="form-control" name="id_ikan">
				<option disabled selected >Pilih kan</option>
					<?php foreach($dataikan as $row):?>
					<option value="<?= $row->id_ikan?>"><?= $row->id_ikan?></option>
					<?php endforeach; ?>
			</select>
	</div>

				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
		</form>

	