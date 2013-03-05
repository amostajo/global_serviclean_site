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
            <img src="img/vacuum-icon.png"/>
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
              Nuestro equipo es ordenado, minuciuso y rápido lo cual hace que nuestra limpieza sea eficiente. 
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