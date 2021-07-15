<div class="card">
	<div class="card-header">
		<h3 class="card-title">Pilih ikan yang akan di analisa</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<form id="FormList" method="post" class="form-vertikal" enctype="multipart/form-data">
					<div class="form-group">
						<label for="dataikan">Pilih Ikan</label>
						<select class="form-control" name="dataikan" id="dataikan">
							<option disabled selected>Pilih Ikan</option>
							<?php foreach ($dataikan as $row) : ?>
								<option value="<?= $row->id_ikan ?>"><?= $row->ikan ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<br>
					<!-- <button type="submit" class="btn btn-primary">Show Data</button> -->
				</form>
			</div>

			<div class="col-md-9">
				<div id="tampil"></div>
				<div id="tampil1"></div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$("#FormList").change(function(e) {
			e.preventDefault();
			var id = $("#dataikan").val();
			var url = "<?= site_url('Filter/filterag/') ?>" + id;
			$('#tampil').load(url);
			var url = "<?= site_url('Filter/filterap/') ?>" + id;
			$('#tampil1').load(url);
		})
	});
</script>
