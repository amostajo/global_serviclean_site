<?php
/**
 * HTML page template.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

// Includes constants like PAGE_TITLE and other page PHP dependencies.
include 'include/page_block/application.php';
?>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_header.php';
?>

<!--BODY-->
<div class="carousel-custom">
  <div class="container">
    <!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
    <div class="carousel-inner carousel-margin">
          <div class="item active"><!-- class of active since it's the first item -->
          <img src="http://www.leclarissehotel.com/files/cms/sized/doccia-1200x400.jpg" alt="" />
              <div class="carousel-caption">
              <p>Limpieza profunda de baños</p>
              </div>
          </div>
      <div class="item">
      <img src="http://www.leclarissehotel.com/files/cms/sized/deluxe_sostituire-1200x400.jpg" alt="" />
          <div class="carousel-caption">
          <p>Limpieza de fin de obra</p>
          </div>



      </div>
      <div class="item">
      <img src="http://www.kremslehnerhotels.at/files/cms/sized/files/kremslehner-hotels/9-group-unternehmen/1-chronik/kremslehner-hotels-vienna-chronik-003-400-1200x400.jpg" alt="" />
          <div class="carousel-caption">
          <p>Limpieza de mantenimiento</p>
          </div>
      </div>
      <div class="item">
      <img src="http://www.leclarisse.com/files/cms/sized/009-camere-hotel-relais-clarisse-roma-1200x400.jpg" alt="" />
         <div class="carousel-caption">
         <p>Carpets</p>
         </div>
      </div>
    </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
  </div>
</div>

<div>
  <div class="container">
    <div class="span12 blockquote-custom">
      <h4>Por que la limpieza te brinda más que solo orden!</h4>
    </div>

    <div class="row-fluid thumbnails-custom">
      <ul class="thumbnails">
        <li class="span4">
          <div class="thumbnail-custom">
            <img src="img/pulidora-main.png"/>
            <h3>Quienes somos</h3>
            <p>
              Somos una empresa dedicada a la limpieza de diferentes tipos de superficie.
              Tenemos maquinaria pesada para las limpiezas mas extremas.
            </p>
          </div>
        </li>

        <li class="span4">
          <div class="thumbnail-custom">
            <img src="img/multiple-blue-icon.png" />
            <h3>Enfoque</h3>
            <p>
              Sabemos que todo lugar necesita un tratado especifico para obtener buenos resultados, es por eso que somos especialistas en distintos tipos de limpieza.
            </p>
          </div>
        </li>

        <li class="span4">
          <div class="thumbnail-custom">
            <img src="img/clock.png" />
            <h3>Rapidez</h3>
            <p>
              Nuestro equipo es ordenado, minuciuso y rápido lo cual hace que nuestra limpieza sea la más eficiente. 
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_footer.php';
?>