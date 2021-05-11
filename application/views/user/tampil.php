<?php $i = 1; foreach ($test as $row):?>
	<div class="custom-control custom-checkbox">
		<td>
		<input type="checkbox"  value="<?php echo $row->penyakit;?>">
		</td>
		<td><?php echo $row->penyakit; ?></td>
		</label>
	</div>
<?php endforeach ?>
<a href="<?= site_url('Cetak_Filter/cetak/'. $idikan) ?>" target="_blank" class="btn btn-warning">Analisa</a>
