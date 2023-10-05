<div class="super-wrapper">
        <div class="login" id="login">
            <div class="card-lgn">
                <div class="cont-lgn">
                    <h2>Silahkan Masuk</h2>
                   
                    <form action="<?= site_url('auth/proses_login_2') ?>" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text"class="lgn-input" name="email" placeholder="isi alamat email unnes kalian :)">
                        </div>
                        <div class="form-group">
                            <label for="password">NIM</label>
                            <input type="text" class="lgn-input" name="password" placeholder="isi nim kalian juga :)">
                        </div>
                            <p id="nb">!nb : Jika terjadi kendala menggunakan email,<br>silahkan login dengan nim kalian :)</p>
                        
                        <input type="submit" class="btn-submit" name="submit" value="Semangat!, Masuk">
                    </form>
                    <?php if ($this->session->flashdata('pesan')): ?>
                        <small>
                            <script>
                                Swal.fire({
                                    title: "Maaf",
                                    text: "<?php echo $this->session->flashdata('pesan'); ?>",
                                    timer: 3000,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                        </small>
                    <?php endif; ?>
                </div>
                <div class="img-lgn">
                    <img src="<?=base_url('assets/POTO/logo-shadow.png')?>">
                </div>
            </div>
        </div>
    </div>