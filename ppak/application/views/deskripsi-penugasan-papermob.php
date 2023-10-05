<?php
	$user_data = $this->session->userdata('user_data');
	$namaTugas = $_GET['namaTugas'];
	$noKelompok = $_GET['noKelompok'];
	$jenisTugas = $_GET['jenisTugas'];
	$nama = $user_data['first_name']." ".$user_data['last_name'];
?>
	
<div id="deskripsi">
	<?php foreach($tugas as $tgs){?>
	<div class="item" id="top-left">
		<div class="title">
			<h2>Deskripsi</h2>
		</div>
		<p style="text-align : justify"><?= $tgs['deskripsi']?></p>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices neque diam erat cursus ipsum, montes, magnis. Nunc posuere risus consequat quis curabitur. Id nec dignissim cursus placerat est ultrices. </p> -->
	</div>
	
	<div id="bottom-left">
			<form action="<?= site_url('submit_papermob')?>" method="post" enctype="multipart/form-data" >
				<div class="item">
					<div class ="input-group">
						<label for="inputFile" onclick="uploadedFile()"> <i class="far fa-angle-double-down"></i><span>Upload disini</span></label>
						<input type="file" name="file" class="custom-file-input" id="inputFile">	
						<label style="margin-top: 10px; cursor: default">kode : </label>
						<!-- <input type="text" name="kode">	 -->
						<select name="kode" style="margin: auto; padding: 10px">
							<?php
							foreach (range('A', 'Z') as $char) {
								for($i=1;$i<=30;$i++){
									?>
										<option value="<?=$char.$i?>"><?=$char."-".$i?></option>
									<?php
								}
							}
							for($i=1;$i<=3;$i++){
								if($i==1){
									$char = "AB";
								}else if($i==2){
									$char = "AC";
								}else{
									$char = "AD";
								}
									for($j=1;$j<=30;$j++){
									?>
										<option value="<?=$char.$j?>"><?=$char."-".$j?></option>
									<?php
								}
							}
							?>
						</select>
					</div>
			        

			        <div class="properties" style="display: none">
			        	 <input type="text" name="namaFile" id="namaFile" value="<?=$nama?>"><br>
						<input type="text" name="jenisTugas" placeholder="jenis file" value="<?=$jenisTugas?>"><br>
						<input type="text" name="kelompok" placeholder="kelompok" value="<?=$noKelompok?>"><br>
						<input type="text" name="namaTugas" placeholder="namaTugas" value="<?=$namaTugas?>"><br>
						<input type="text" name="" id="pathFile"> 
			        </div>
			        
				</div>

				<div class="item" id="submit">
					<input type="submit" name="submit" value="Kumpulkan">
				</div>
    	</form>
	</div> 

	<div class="item" id="right">
		<div class="title">
			<h2>Keterangan</h2>
		</div>
		<!-- <-?php var_dump($tugas)?> -->
		<iframe src="<?= $tgs['link_cont']?>" frameborder="0"></iframe>
	</div>
	<?php }?>
</div>

