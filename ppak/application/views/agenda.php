<div class="super-wrapper" id="Superwrap">
    <div class="content" id="agenda-cont">
        <div class="tatatertib" id="agenda">
            <div class="swiper-container mySwiper" >
                <div class="swiper-wrapper">
                    <a href="#" data-hash="slide1" class="swiper-slide">
                        <div class="inside-slide">
                            <div class="agendajudul">
                                <h2>Technical Meeting</h2>
                            </div>
                             <!--<iframe  src=" https://drive.google.com/file/d/1vsxyjSIqty8ocfCU4MjTFBmRp_eEVdZS/preview" frameborder="0"></iframe>-->
                            <iframe  src="https://drive.google.com/file/d/1GO0M0lIeR-f4gxSGY0GqbeZy8dzaMUfq/preview" frameborder="0"></iframe>
                        </div>
                    </a>
                    <a href="#" data-hash="slide2" class="swiper-slide">
                        <div class="inside-slide">
                            <div class="agendajudul">
                                <h2>PKKMB Hari I</h2>
                            </div>
                            <!--<iframe  src=" https://drive.google.com/file/d/1vsxyjSIqty8ocfCU4MjTFBmRp_eEVdZS/preview" frameborder="0"></iframe>-->
                            <iframe  src="https://drive.google.com/file/d/1S2rBu4EGs7q8KDkN0EQSjXyNVjeCsYBK/preview" frameborder="0"></iframe>
                        </div>
                    </a>
                    <a href="#" data-hash="slide3" class="swiper-slide">
                        <div class="inside-slide">
                            <div class="agendajudul">
                                <h2>PKKMB Hari II</h2>
                            </div>
                            <!--<iframe  src=" https://drive.google.com/file/d/1vsxyjSIqty8ocfCU4MjTFBmRp_eEVdZS/preview" frameborder="0"></iframe>-->
                            <iframe  src="https://drive.google.com/file/d/1pRmwQeoMyb18pxdNba_6YcigzjE4l7X1/preview" frameborder="0"></iframe>
                        </div>
                    </a>
                    
                </div>
                 <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> 
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <script>
    //Swiper Js
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 50,
        centeredSlides:true,
        hashNavigation: {
          watchState: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 50
            },
            600:{
                slidesPerView: 1,
                spaceBetween: 50
            },
                // when window width is >= 640px
            810: {
                slidesPerView: 1,
                spaceBetween: 50
            }
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>