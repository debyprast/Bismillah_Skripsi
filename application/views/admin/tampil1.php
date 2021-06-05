<div class="card">
	<div class="card-header">
		<h3 class="card-title">Pilih Penyakit Ikan sesuai gejala</h3>
	</div>
	 <select	elect name="" id="dataikan" class="form-control">
      <option>Pilih Ikan</option>
      <?php foreach ($test1 as $row): ?>
       <option value="<?php echo $row->penyakitp ?>"><?php echo $row->penyakitp ?></option>
      <?php endforeach ?>
     </select>
	<a href="<?= site_url('Proses/proses/') ?>" target="_blank" class="btn btn-warning">Analisa</a>
</div>
