<div class="card">
	<div class="card-header">
		<h3 class="card-title">Pilih ikan yang akan di analisa</h3>
	</div>
	<div class="container">
  <div class="row">
   <div class="col-md-3">
    <form action="" id="FormList">
     <select name="" id="dataikan" class="form-control">
      <option>Pilih Ikan</option>
      <?php foreach ($dataikan as $row): ?>
       <option value="<?php echo $row->id_ikan ?>"><?php echo $row->ikan ?></option>
      <?php endforeach ?>
     </select>
     <br>
     <button type="submit" class="btn btn-primary">Show Data</button>
    </form>
   </div>
  <div class="col-md-9">
<div id="tampil"></div>
   </div>
  </div>
 </div>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
		$(document).ready(function() {
		$("#FormList").submit(function(e) {
			e.preventDefault();
			var id = $("#dataikan").val();
			// console.log(id);
			var url = "<?= site_url('Filter/filter/') ?>" + id;
			$('#tampil').load(url);
		})
		});
	</script>
