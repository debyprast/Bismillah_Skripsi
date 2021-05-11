<div class="card">
	<div class="card-header">
		<h3 class="card-title">Centang jika ikan mengalami gejala berikut</h3>
	</div>
	
	<?php $i = 1; foreach ($test as $row):?>
		<div class="custom-control custom-checkbox">
			<td>
				<input type="checkbox"  value="<?php echo $row->penyakit;?>">
			</td>
			<td>
				<?php echo $row->penyakit; ?>
			</td>
			
		</div>
	<?php endforeach ?>
	<a href="<?= site_url('Cetak_Filter/cetak/'. $idikan) ?>" target="_blank" class="btn btn-warning">Analisa</a>
</div>
