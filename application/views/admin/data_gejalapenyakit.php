<div class="container">
		<div class="row mt-2">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="col">
							<form method="post"  action="<?php  echo base_url(). "admin/tambahpenyakit"; ?>">
								<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Penyakit</button>
							</form>
						</div>
						<?= form_open_multipart('Importpenyakit/uploaddata')?>
							<div class="form-row">
								<div class="col">
								<input type="file" class="form-control-file" id="importexcel" name="importexcel" accept=".xls, .xlsx">
								</div>
								<div class="col">
								<button type="submit" class="btn btn-primary">import</button>
								</div>
								<div class="col">
								<?= $this->session->flashdata('pesan');?>
								</div>
							</div>
						<?= form_close();?>
					</div>
				</div>
<div class="card mt-2">
	<div class="card-body">
		<table class="table table-hover" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">ID Ikan</th>
					<th scope="col">Id Gejala</th>
					<th scope="col">ID Penyakit</th>
					<th scope="col">Aksi</th>
				</tr>
				<tbody>
					<?php $i = 1;
					foreach ($datahasil as $h) : ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $h['id_ikan']; ?></td>
							<td><?= $h['id_gejala']; ?></td>
							<td><?= $h['id_penyakit']; ?></td>
							<td>
							<button class="btn btn-primary margin" type="button">Edit</button>
							<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>
							</td>
						</tr> 
					<?php endforeach; ?> 
				</tbody>
	</div>
</div>
</div>
