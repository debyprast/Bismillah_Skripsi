<!-- 
<section class="content">
    <div class="row">
        <div class="col-md-6"> -->
            <!-- general form elements -->
<div class="card card-primary">
	<div class="card-header with-border">
			<h3 class="card-title">Tambah Penyakit Ikan</h3>
	</div>
		<form>
			<div class="card-body">
				<div class="form-group">
					<label>Pilih jenis ikan</label>
						<select class="form-control">
							<option>Arwana</option>
							<option>Cupang</option>
							<option>Koi</option>
						</select>
				</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Nama penyakit</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama penyakit">
		</div>
	</div>
	<!-- /.card-body -->

	<div class="card-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>
</div>
</div>

							<!-- <div class="col-md-6"> -->
            <!-- general form elements -->
            <!-- <div class="card card-primary">
                <div class="card-header with-border">
                    <h3 class="card-title">List Data Penyakit</h3>
                </div> -->
                <!-- /.card-header -->
                <!-- form start -->
                <!-- <div class="card-body">
                    <table class="table table-hover">
										<tbody>
														<?php $i = 1;
														foreach ($datapenyakit as $barang) : ?>
																<tr>
																		<td><?= $i++; ?></td>
																		<td><?= $barang['ikanp']; ?></td>
																		<td><?= $barang['penyakitp']; ?></td>
																		<td><?= date('d F Y', $barang['date_created']);  ?></td>
																</tr> 
														<?php endforeach; ?> 
												</tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </div>

