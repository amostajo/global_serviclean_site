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
          
</div>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_footer.php';
?>