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
					
				<div class="card mt-2">
	<div class="card-body">
		<table class="table table-hover" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Username</th>
					<th scope="col">Password</th>
					<th scope="col">Aksi</th>
				</tr>
				<tbody>
					<?php $i = 1;
					foreach ($datauser as $user) : ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $user['username']; ?></td>
							<td><?= $user['password']; ?></td>
							<td>
							<?php echo anchor('Admin/edituser/'.$user['id_user'],'<button class="btn btn-primary margin" type="button"><span class="fa fa-pencil"></span> Edit </button>'); ?>
							<?php echo anchor('Admin/deleteuser/'.$user['id_user'],'<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>	
						</td>
						</tr> 
					<?php endforeach; ?> 
			</div>
		</div>
	</div>
