<div class="container">
		<div class="row mt-2">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="col">
							<form method="post"  action="<?php  echo base_url(). "admin/tambahikan"; ?>">
								<button class="btn btn-primary" id="submit-buttons" type="submit" ​​​​​>Tambah Ikan</button>
							</form>
						</div>
						<?= form_open_multipart('Importikan/uploaddata')?>
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
                                    <th scope="col">Aksi</th>
                                </tr>
																<tbody>
                                <?php $i = 1;
                                foreach ($dataikan as $ikan) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $ikan['ikan']; ?></td>
										<td>
										<?php echo anchor('Admin/editikan/'.$ikan['id_ikan'],'<button class="btn btn-primary margin" type="button"><span class="fa fa-pencil"></span> Edit </button>'); ?>
							<?php echo anchor('Admin/deleteikan/'.$ikan['id_ikan'],'<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>	
										</td>
                                        </tr> <?php endforeach; ?> </tbody>
			</div>
		</div>
	</div>
