<?php
/**
 * HTML page template.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

$page_title = 'Servicios';

// Includes constants like PAGE_TITLE and other page PHP dependencies.
include 'include/page_block/application.php';
?>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_header.php';
?>

<div class="container">

  <div class="span3">
    <ul class="nav nav-list sidenav-margin">
      <li class="active"><a href="#"><i class="icon-chevron-right"></i> Limpieza de mantenimiento</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de fin de obra</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de vidrios/fachadas</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de Industrias</a></li>  
    </ul>

    <a href="#" class="btn btn-warning presupuestobtn-position"><i class="icon-white icon-envelope"></i> Solicitar presupuesto</a>
  
  </div>
  <div class="service-description">
  <p> Este espacio es para la descripción de cada Servicio.</p>
  </div>
          <ul class="thumbnails sidenav-margin">
           <li class="span2">
             <div class="thumbnail">
             <img src="img/pulidora.png" alt="">
             <h4>Pulido</h4>
             <p>Remocion de hongos en cualquier superficie</p>
             </div>
           </li>
           <li class="span2">
             <div class="thumbnail">
             <img src="img/pulidora.png" alt="">
             <h4>Pulido</h4>
             <p>Remocion de hongos en cualquier superficie</p>
             </div>
           </li>
            <li class="span2">
             <div class="thumbnail">
             <img src="img/pulidora.png" alt="">
             <h4>Pulido</h4>
             <p>Remocion de hongos en cualquier superficie</p>
             </div>
           </li>
            <li class="span2">
             <div class="thumbnail">
             <img src="img/pulidora.png" alt="">
             <h4>Pulido</h4>
             <p>Remocion de hongos en cualquier superficie</p>
             </div>
           </li>

          </ul>
          <!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide span8 Services-carousel-position" ><!-- class of slide for animation -->
    <div class="carousel-inner ">
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

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_footer.php';
?>