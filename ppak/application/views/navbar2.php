<body>
    <nav id="Topnav" class="topnav">
        <div class="logo" id="logotugas">
            <li><a href="<?= site_url('beranda')?>" style="color:#027EDA">PKKMB FMIPA</a></li>
        </div>
        <?php if(isset($login_button) AND !isset($_SESSION['user_data'])){?>
        <div class="li-menu">
            <li class="li-nav"><a href="<?= site_url('beranda')?>" <?php if($this->uri->segment(1)=="beranda"){echo 'class="active"';}?> >Beranda</a></li>
            <li class="li-nav"><a href="<?= site_url('informasi')?>" <?php if($this->uri->segment(1)=="informasi"){echo 'class="active"';}?>>Informasi</a></li>
            <li class="li-nav"><a href="<?=site_url('galeri')?>"  <?php if($this->uri->segment(1)=="galeri"){echo 'class="active"';}?> >Galeri</a></li>
        </div>
        <div class="button" id="btn-tugas">
            <?php echo $login_button; ?>
        </div>
       
        <?php }else{ 
            $user_data = $this->session->userdata('user_data');
            ?>
        <div class="li-menu">
            <li class="li-nav"><a href="<?= site_url('beranda/loggedIn')?>" <?php if($this->uri->segment(1)=="beranda"){echo 'class="active"';}?> >Beranda</a></li>
            <li class="li-nav"><a href="<?= site_url('informasi')?>" <?php if($this->uri->segment(1)=="informasi"){echo 'class="active"';}?>>Informasi</a></li>
            <li class="li-nav"><a href="<?=site_url('galeri')?>"  <?php if($this->uri->segment(1)=="galeri"){echo 'class="active"';}?> >Galeri</a></li>
        </div>
            <div>
                <div class="button" id="logged-in">
                    <p class="masuk">
                        <!-- <span><i class="fa fa-user"></i></span> -->
                        <img src="<?=$user_data['profile_picture']?>" class="img-circle"/> 
                    </p>
                    <ul>
                        <li><div id="nama_user">
                    <p><?=$user_data['first_name']. " " . $user_data['last_name']?></p>
                </div></li>
                        <li id="can-hover"><a href="<?= site_url('informasi/penugasan')?>">Tugasku</a></li>
                        <li id="can-hover"><a href="<?= site_url('google_login/logout')?>">Keluar</a></li>
                    </ul>
                </div>
            </div>
            
            <script>
            if (screen && screen.width < 500) {
                $('.masuk').attr("href", "https://pkkmbfmipaunnes.web.id/auth/logout")
                console.log('detect');
            }
            </script>
            

        <?php }?>
        
        <div class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
