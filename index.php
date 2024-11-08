<?php
include "configuracion.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dental clinic Juárez</title>
  <link rel="stylesheet" type="text/css" href="./fontawesome-free-5.15.4-web/css/all.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-W0LVY59P4R"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-W0LVY59P4R');
  </script>
  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '284036456501205');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=284036456501205&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
</head>

<body>
  <header>
    <div class="item_header">
      <a href="https://api.whatsapp.com/send?phone=523221121616" target="_blank"><img src="imagenes/whats.png" alt="" class="redes-header"></a>
      <a href="tel:3221121616" target="_blank"><img src="imagenes/phone.png" alt="" class="redes-header"></a>
      <a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2F191456837887721%2F%3Fmessaging_source%3Dsource%253Apages%253Amessage_shortlink"><img src="imagenes/inbox.png" alt="" class="redes-header"></a>
      <a href="https://instagram.com/dental.juarez.661?utm_medium=copy_link" target="_blank"><img src="imagenes/instagram.png"></a>
    </div>
    <div class="item_header idioma" id="idioma">
      <ul>
        <li><a href="index.php?lang=es"> <?php echo $lang['español'] ?></a></li>
        <li><a href="#" class="linea">|</a></li>
        <li><a href="index.php?lang=en"> <?php echo $lang['ingles'] ?></a> </li>
      </ul>



    </div>
    <div class="item_header">
      <img src="imagenes/logo-1.png" alt="" class="logo">
    </div>

  </header>
  <section class="section_nueva">

    <img src="imagenes/promo-new.jpg" alt="" class="img-compu">
    <img src="imagenes/promo-new-cel.jpg" alt="" class="img-cel">


  </section>
  <section class="promociones">
    <h3><?php echo $lang['promo'] ?></h3>
    <hr>
    <div class="flip-card">


      <?php

      $imagenesPromo = array(
        ["promo" => "imagenes/promociones/promo-1.jpg"],
        ["promo" => "imagenes/promociones/promo-2.jpg"],
        ["promo" => "imagenes/promociones/promo-3.jpg"],
        ["promo" => "imagenes/promociones/promo-4.jpg"],
        ["promo" => "imagenes/promociones/promo-5.jpg"],


      )

      ?>



      <?php


      foreach ($imagenesPromo as $promo) {
      ?>
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="<?php echo $promo['promo']; ?>" alt="Avatar">
          </div>
        </div>
      <?php
      };

      ?>

      <!-- <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="imagenes/promociones/promo-2.jpg" alt="Avatar">
        </div>
      </div>
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="imagenes/promociones/promo-3.jpg" alt="Avatar">
        </div>
      </div>
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="imagenes/promociones/promo-4.jpg" alt="Avatar">
        </div>
      </div>
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="imagenes/promociones/promo-5.jpg" alt="Avatar">
        </div>
      </div> -->
    </div>


    <div class="somos">
      <div class="item_somos">
        <img src="imagenes/fondoagenda.png" alt="">

      </div>
      <div class="item_somos">
        <p> <?php echo $lang['texto_dos'] ?></p>
        <a href="https://api.whatsapp.com/send?phone=523221121616" target="_blank">Schedule <i class="fab fa-whatsapp-square"></i></a>
      </div>

    </div>

  </section>

  <div class="galeria_fotos">
    <h3> <?php echo $lang['casos'] ?></h3>
    <hr>
    <div class="container_galeria">
      <div class="item_galeria">
        <a href="https://instagram.com/dental.juarez.661?utm_medium=copy_link"><img src="imagenes/slider_gringo_cinco.jpeg" alt=""></a>
      </div>
      <div class="item_galeria">
        <a href="https://instagram.com/dental.juarez.661?utm_medium=copy_link"><img src="imagenes/slider_gringo_cuatro.jpeg" alt=""></a>
      </div>
      <div class="item_galeria">
        <a href="https://instagram.com/dental.juarez.661?utm_medium=copy_link"><img src="imagenes/slider_gringo_diez.jpeg" alt=""></a>
      </div>
      <div class="item_galeria">
        <a href="https://instagram.com/dental.juarez.661?utm_medium=copy_link"><img src="imagenes/slider_gringo_dos.jpeg" alt=""></a>
      </div>
      <div class="item_galeria">
        <a href="https://instagram.com/dental.juarez.661?utm_medium=copy_link"><img src="imagenes/slider_gringo_tres.jpeg" alt=""></a>
      </div>
      <div class="item_galeria">
        <a href="https://instagram.com/dental.juarez.661?utm_medium=copy_link"> <img src="imagenes/slider_gringo_uno.jpeg" alt=""></a>
      </div>
    </div>
  </div>


  <section class="sucursales">
    <h3><?php echo $lang['sucursal'] ?></h3>
    <hr>
    <div class="contenedor_sucursales">
      <div class="item_sucursales">
        <h3>Basilio Badillo</h3>
        <p>Basilio Badillo 317,<br> Emiliano Zapata, Pto Vallarta
        </p>
      </div>
    </div>
  </section>
  <div class="linea"></div>
  <div class="datos_contacto">

    <div class="item_contacto">
      <h3><?php echo $lang['telefono'] ?> </h3><a href="tel:3221121616" target="_blank">3221121616</a>

    </div>
    <div class="item_contacto">
      <h3><?php echo $lang['horario'] ?></h3>
      <p><?php echo $lang['horario_dos'] ?></p>


    </div>

  </div>
  <div class="flotante">
    <figure><a class="whatsapp" href="https://api.whatsapp.com/send?phone=523221121616" target="_blank"><img loading="lazy" src="imagenes/whats.png" width="55" border="0" /></a></figure>
    <figure><a class="phone" href="tel:3221121616" target="_blank"><img loading="lazy" src="imagenes/phone.png" width="55" border="0" /></a></figure>
    <figure><a class="insta" href="https://instagram.com/dental.juarez.661?utm_medium=copy_link" target="_blank"><img loading="lazy" src="imagenes/insta-cel.png" width="65" border="0" /></a></figure>


  </div>
  <footer>
    <!-- <img src="imagenes/footer.png" alt=""> -->
    <div class="item_footer">
      <p><?php echo $lang['derechos'] ?></p>
    </div>
    <div class="item_footer">
      <h3><?php echo $lang['siguenos'] ?> <a href="https://www.facebook.com/DENTAL.JUAREZ.661/" target="_blank"><i class="fab fa-facebook-square"></i> </a></h3>
    </div>
  </footer>

  <script type="text/javascript" src="js/swiper.min.js"></script>
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      spaceBetween: 50,
      centeredSlides: true,
      slidesPerView: 3,
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,

      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 30,
          rotate: 50,
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 4,
          spaceBetween: 40
        }
      }


    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.customer-logos').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 991,
          settings: {
            slidesToShow: 1
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }


        }]
      });
    });
  </script>


</body>

</html>