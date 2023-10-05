
<body>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <video autoplay="" loop="" showcontrol="1">
            <source src="<?=base_url()?>assets/lagu.mp4" type="video/mp4" />
        </video>
        </div>
        
    </div>


    <div class="grid-portfolio" id="portfolio">
        <div class="container">
            <!-- <div class="row"> -->
                <!--Kalau sudah ada poto nya pake yg ini-->
                <?php
                    $directory = $_SERVER['DOCUMENT_ROOT']."/assets/galeri/";
                    $dir_handle = opendir($directory);

                    if(is_resource($dir_handle))
                    {

                        // reading the contents of the directory
                        while(($file_name = readdir($dir_handle)) !== false)
                            {
                                // echo("File Name: " . $file_name);
                                // echo "<br>" ;
                                ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <a href="<?=base_url()?>assets/galeri/<?=$file_name?>" data-lightbox="image-1"></a>
                                                <div class="image">
                                                    <img src="<?=base_url()?>assets/galeri/<?=$file_name?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                            }

                        // closing the directory
                        closedir($dir_handle);
                    }else{
                        echo("Failed to Open.");
                    }
                ?>
            
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/coming-soon.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/coming-soon.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/coming-soon.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/coming-soon.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/coming-soon.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/coming-soon.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/coming-soon.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/coming-soon.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/logo-shadow.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/logo-shadow.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/coming-soon.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/coming-soon.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/coming-soon.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/coming-soon.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/coming-soon.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/coming-soon.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4 col-sm-6">-->
                <!--    <div class="portfolio-item">-->
                <!--        <div class="thumb">-->
                <!--            <a href="<?=base_url()?>assets/POTO/coming-soon.png" data-lightbox="image-1"></a>-->
                <!--            <div class="image">-->
                <!--                <img src="<?=base_url()?>assets/POTO/coming-soon.png">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            <!-- </div>  -->
        </div>
    </div>
</body>