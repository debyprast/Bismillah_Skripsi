<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Custom Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
											<?php $i = 1; foreach ($dataikan as $key){?>
												<div class="custom-control custom-checkbox">
													<td>
													<input type="checkbox" name="ikan[]" value="<?php echo $key->penyakit;?>">
													</td>
													<td><?php echo $key->penyakit; ?></td>
													</label>
                        </div>
											<?php $i++; }?>
                  </div>

								<div class="active">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
