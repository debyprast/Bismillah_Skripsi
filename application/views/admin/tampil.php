<div class="card">
	<div class="card-header">
		<h3 class="card-title" for="gejala">Centang jika ikan mengalami penyakit berikut</h3>
	</div>
	<form id="gejala" name="gejala" method="post" action="tampil" enctype="multipart/form-data">
		<?php $i = 1;
		foreach ($test as $row) : ?>
			<div class="custom-control custom-checkbox">
				<td>
					<input class="form-check-input" name="gejala<?= $row->gejala ?>" type="checkbox" value="<?php echo $row->gejala; ?>">
				</td>
				<td><?php echo $row->gejala; ?></td>

			</div>
		<?php endforeach ?>
	</form>
</div>
