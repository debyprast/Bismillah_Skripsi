<div class="container">
		<div class="row mt-2">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
					<div class="col">
							<form method="post"  action="<?php  echo base_url(). "admin/tambahgejala"; ?>">
								<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Gejala</button>
							</form>
						</div>
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
                                    <th scope="col">Kode Ikan </th>
                                    <th scope="col">Tanggal Input </th>
                                    <th scope="col">Aksi</th>
                                </tr>
							</thead>
                                <?php $i = 1;
                                foreach ($datagejala as $gejala) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $gejala['ikan']; ?></td>
                                        <td><?= $gejala['penyakit']; ?></td>
										<td><?= $gejala['idikan']; ?></td>
                                        <td><?= date('d F Y', $gejala['date_created']);  ?></td>
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
		</div>
	</div>
