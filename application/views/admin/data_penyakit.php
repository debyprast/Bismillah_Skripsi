<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
								<div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               
								 
								 <a href="<?= base_url(); ?>Admin/tambahpenyakit" type="button" class="btn btn-success">
								<i class="fa fa download"> </i>Tambah Data
								</a>

							<!-- Button trigger modal -->
								<a  type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
								<i class="fa fa download"> </i>Import CSV
								</a>

								 
								 </div> 
								 </div>
								 </div>
								 <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div>
								</div>
								 <div class="row">
								 <div class="col-sm-12">
								 <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nomer</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Id</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Jenis Penyakit</th>
									</tr>
                  </thead>
                  <tbody>
                  <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">1</td>
                    <td>19</td>
                    <td>Drop Eye</td>
                  </tr><tr class="even">
                    <td class="dtr-control sorting_1" tabindex="0">2</td>
                    <td>24</td>
                    <td>Jamur</td>
                     
                  </tr><tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">3</td>
                    <td>55</td>
                    <td>Perut Buncit</td>
                     
										 </tbody>
                  
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Upload CSV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				 </button>
      </div>
			<div class="form-group">
				<label for="foto">Foto *max size 1MB</label>
				<input type="file" class="form-control" name="foto">
		</div>
      <div class="modal-footer">
        <button type="submit" name="simpan" class="btn btn-info"><i class="fa fa-save"></i>Simpan</button>
				<button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
			</form>
    </div>
  </div>
</div>
