<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pilih Jenis Ikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
								<div class="form-group">
                        <label>Pilih ikan</label>
                        <select class="form-control">
                          <?php foreach ($dataikan as $key):?>
													<option value ="<?php echo $key->idikan?>">
													<?php echo $key->ikan?></option>
													<?php endforeach?>
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
				<a href="<?= base_url(); ?>User/listpenyakit" button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
							</div>
