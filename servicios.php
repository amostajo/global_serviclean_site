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
    <a href="#" class="btn btn-warning presupuestobtn-position"><i class="icon-white icon-envelope"></i> Solicitar presupuesto</a>
    <ul class="nav nav-list sidenav-margin">
      <li class="active"><a href="#"><i class="icon-chevron-right"></i> Limpieza de mantenimiento</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de fin de obra</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de vidrios/fachadas</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de Industrias</a></li>  
    </ul>   
  </div>

  <div class="span8">
    <article class="service-description">
      Este espacio es para la descripción de cada Servicio.
    </article>

    <ul class="thumbnails thumb-position">
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

    <!--  Carousel -->

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
      <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
    </div>
    <!-- /.carousel end-->

    <form id="mailer" class="form-horizontal form-position">
      <div class="solicitud-heading">
        <h4>Solicitud de presupuesto:</h4>                
      </div>

      <input type="hidden" name="subject" value="<?php echo SUBJECT_CONTACTO;?>">

      <div class="control-group">
        <label class="control-label" for="nombre_completo">Nombre completo:</label>
        <div class="controls">
          <input type="text" name="nombre_completo" placeholder="Mi nombre" required 
              data-validation-required-message="Campo no puede estar vacío"
              class="div-float">
          <div class="help-block div-float"></div>
        </div>
      </div>

      <div class="control-group ">
        <div class="row-fluid">
          <div>
            <label class="control-label" for="email">Email:</label>
          </div>
          <div class="controls">
            <input type="email" name="email" placeholder="usuario@email.com" required validemail
                data-validation-required-message="Campo no puede estar vacío"
                data-validation-validemail-message="Correo inválido"
                class="div-float">
          </div>
          <div class="help-block div-float"></div>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="mensaje">Mensaje:</label>
        <div class="controls">
          <textarea rows="3" name="mensaje" placeholder="Su mensaje aquí" required 
              data-validation-required-message="Campo no puede estar vacío"
              class="div-float"></textarea>
          <div class="help-block div-float"></div>
        </div>   
      </div>
      <div class="row-fluid">
        <div class="div-float">
          <div class="form-actions"> 
            <button id="mailer-btn " type="submit" class="btn btn-primary"><i class="icon-envelope icon-white"></i> Enviar</button>
          </div>
          <img id="mailer-loader" class="mailer-loader" src="img/ajax-loader.gif" alt="loader">
        </div>
        <div class="div-float">
          <div id="mailer-results"></div>
        </div>
      </div>
    </form>
  </div> 
</div>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_footer.php';
?>