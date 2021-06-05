<div class="card">
	<div class="card-header">
		<h3 class="card-title">Centang jika ikan mengalami gejala berikut</h3>
	</div>
	<table data-toggle="table"  data-url="<?base_url('assets_admin')?>/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                    <tr>
                        <th><font face ="Calibri"> No </font></th>
                        <th><font face ="Calibri"> Jurusan </font></th>
                        <th><font face ="Calibri"> Judul </font></th>
                        <th><font face ="Calibri"> Jadwal </font></th>
                        <th><font face ="Calibri"> Menu </font></th>
                    </tr>
                    <tbody>
                    <?php
                            $this->db->select('id_ikan,id_gejala,id_penyakit');
                            // SELECT 
                                    
                            $q = $this->db->join('ikan', 'ikan.id_ikan = ikan.id_ikan')->get('gejala_penyakit');
							$q = $this->db->join('gejala', 'gejala.id_gejala = gejala.id_gejala')->get('gejala_penyakit');
							$q = $this->db->join('penyakit', 'penyakit.id_penyakit = penyakit.id_penyakit')->get('gejala_penyakit');
                            $nomor = 1;
                            foreach ($q->result_array() as $test) : ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><p><?=  $test['id_ikan']?></p></td>
                                <td><p><?=  $test['id_gejala']?></p></td>
                                <td><p><?=  $test['id_penyakit']?></p></td>
                                
                                <td>
                                <?php echo anchor('Admin/jadwalEdit/'.$test['id_jadwal'],'<button class="btn btn-primary margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>
                
                                <?php  echo anchor('Admin/jadwalDelete/'.$test['id_jadwal'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                
                                </i>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php endforeach; ?>
                    </tbody>
                </table>	
</div>
