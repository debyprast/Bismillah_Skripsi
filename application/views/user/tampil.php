
 <div class="form-group">
											<?php $i = 1; foreach ($test as $key){?>
												<div class="custom-control custom-checkbox">
													<td>
													<input type="checkbox" name="ikan[]" value="<?php echo $key->penyakit;?>">
													</td>
													<td><?php echo $key->penyakit; ?></td>
													</label>
                        </div>
											<?php $i++; }?>
                  </div>
