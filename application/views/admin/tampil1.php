<div class="card">
	<div class="card-header">
		<h3 class="card-title">Pilih Penyakit Ikan sesuai gejala</h3>
	</div>
	<form action="<?php echo base_url() . 'Proses/save'; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
		<select name="penyakitp" id="penyakitp" class="form-control">
			<option>Pilih Ikan</option>
			<?php foreach ($test1 as $row) : ?>
				<option value="<?php echo $row->penyakitp ?>"><?php echo $row->penyakitp ?></option>
			<?php endforeach ?>
		</select>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</form>
</div>
