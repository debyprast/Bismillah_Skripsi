<div class="container">
		<div class="row mt-2">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<?= form_open_multipart('Importgejala/uploaddata')?>
							<div class="form-row">
								<div class="col-4">
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
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jenis Ikan</th>
                                    <th scope="col">Jenis Penyakit</th>
                                    <th scope="col">Tanggal Input </th>
                                    <th scope="col">Aksi</th>
                                </tr>
																<tbody>
                                <?php $i = 1;
                                foreach ($datagejala as $gejala) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $gejala['ikan']; ?></td>
                                        <td><?= $gejala['penyakit']; ?></td>
                                        <td><?= date('d F Y', $gejala['date_created']);  ?></td>
                                        </tr> <?php endforeach; ?> </tbody>
			</div>
		</div>
	</div>
