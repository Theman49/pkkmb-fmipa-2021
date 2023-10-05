<?php
	$user_data = $this->session->userdata('user_data');
	$nama = $user_data['first_name']. " ". $user_data['last_name'];
	$noKelompok = $user_data['kelompok'];
if(isset($_SESSION['pesan'])){
    echo $this->session->flashdata('pesan');
}
?>

<div id="penugasan">
	<div id="selamat-datang">
		<div>
			<img src="<?=base_url()?>/assets/POTO/selamat-datang-kotak.png">
		</div>
		<div>
			<h1>Selamat Datang</h1>
	   		<h1><?=$nama?></h1>
		</div>
	   	
   </div>

   <div id="kelompok">
	    <!-- <form action="<-?= site_url('penugasan/kelompok')?>" method="post">
			<div id="form-kelompok">
			<h1>Kelompok : </h1>
			<input class="isi-kel" name ="kelompok" type="text" placeholder="masukkan nomor kelompok kamu 😊">
			<input class="submit-kel" type="submit" value ="Post">
			</div>
		</form> -->
		<!--<h1>Kelompok : <-?=$noKelompok?></h1>-->
		<h1>Kelompok : <?=$noKelompok?></h1>
   		 <!--<-?=var_dump($user_data)?> -->
   		
   </div>

   <div id="list-tugas">
		<?php
		$no= 0;
	   		foreach($tugas as $row){
	   			$no+=1;
	   			if($row['status_view'] == 0){
	   			    continue;
	   			}
	   			if($no % 2 == 0){
	   				$type=1;
	   			}else{
	   				$type=2;
	   			}

	   	?>
	   		<div class="tugas tugas-<?=$type?>">
	   			<h3 ><?=$row['nama_folder']?></h3>
	   			<p><?=$row['keterangan']?></p>
	   			<!--<p>Status : Belum dikumpulkan</p>-->
	   			<div class="icon-arrow">
	   			    <?php
	   			        if($row['id'] == 4){
	   			            ?>
	       			            <a href="<?=base_url()?>penugasan/deskripsi_penugasan_papermob?jenisTugas=<?=$row['jenis']?>&noKelompok=<?=$noKelompok?>&namaTugas=<?=$row['nama_folder']?>"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 30px;"></i></a>
	   			            <?php
	   			        }
	   			        else{
	   			            ?>
	   			                <a href="<?=base_url()?>penugasan/deskripsi_penugasan?jenisTugas=<?=$row['jenis']?>&noKelompok=<?=$noKelompok?>&namaTugas=<?=$row['nama_folder']?>"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 30px;"></i></a>
	   			            <?php
	   			        }
	   			    ?>
	   			    </div>
	   		</div>
		<?php
			}
		?>
   </div> 
</div>