<br><form id="form1" name="form1" method="post">
				<label for="sel1">Penyakit</label>            
				<select required class="form-control" name="penyakit">
				<option value ="">Penyakit</option>
               <?php 
 			        $tampil="select * from penyakit";
			        $query1= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query1)){  
					echo "<option value='".$hasil['namapenyakit']."'>".$hasil['idpenyakit']." ".$hasil['namapenyakit']."</option>";
			}
					?>
  		</select>
 
        <br><label for="sel2">GEJALA</label><br>
    <form id="form2" name="form2" method="post" action="diagnosa.php">
    <div class="panel panel-primary">
       
        <div class="panel-body">
 			<?php 
           // if(isset($_POST['tanaman']))
                 // if($_POST['tanaman']!="jenistanaman"){
 			$tampil="select * from gejala";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
			}
                 // }
					?>
        <br>
            </div>
    </div>
    
    <br><button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
     <?php			
        if(isset($_POST['submit'])){
            
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            $penyakit= $_POST['penyakit'];
            $gejala = $_POST['gejala'];
            $jumlah_dipilih = count($gejala);

            if (count($gejala)==0){
              echo '<script language="javascript">';
              echo 'alert("Pilih gejala..!!")';
              echo '</script>';
              return false;
            }
            

           for($x=0;$x<$jumlah_dipilih;$x++){
	                   $hasil= mysqli_query($konek_db, "INSERT INTO basispengetahuan (namapenyakit, gejala) values('$penyakit','$gejala[$x]')");
                       
                    }
                    //echo '<script language="javascript">';
                    //echo 'alert("Data Berhasil disimpan")';
                    //echo '</script>';
                    header("location:basispengetahuan.php");
        }
    
                ?>
        </form>
        <br>
        <br>
        </form>
