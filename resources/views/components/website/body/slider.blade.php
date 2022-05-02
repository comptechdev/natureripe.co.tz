<!-- <div>
    
    <div class=" h-4/5 md:pt-16">
         <div class="inset-0 w-screen md:h-96 flex items-center justify-center  transition-all ease-in-out duration-1000 transform translate-x-0 slide">
            <img src="{{ asset('img/slider.png') }}" alt="slider">
        </div>
        
    </div>
</div> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .mySwiper {
          height: 400px;
      }
      
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/img/s1a.jpg" alt="">
        </div>
        <div class="swiper-slide"><img src="/img/s1b.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/img/s1c.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/img/s2a.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/img/s2b.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/img/s2c.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/img/s3a.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/img/s3b.jpg" alt=""></div>
        <div class="swiper-slide"><img src="/img/s3c.jpg" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        speed: 1,
        spaceBetween: 0,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
          delay: 5000,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
        640: {
          slidesPerView: 3,
          spaceBetween: 20,
          spaceBetween: 0,
          },
        }
      });
    </script>
  </body>
</html>