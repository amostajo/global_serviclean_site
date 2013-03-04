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
            <img src="img/mascot_cleaning2.png" />
            <h3>Limpieza</h3>
            <p>
              Somos especialistas en la limpieza, comprometidos al trabajo organizado y eficiente. Somos especialistas en la limpieza, comprometidos al trabajo organizado y eficiente.
            </p>
          </div>
        </li>

        <li class="span4">
          <div class="thumbnail-custom">
            <img src="img/mascot_washmachine.png" />
            <h3>Limpieza</h3>
            <p>
              Somos especialistas en la limpieza, comprometidos al trabajo organizado y eficiente. Somos especialistas en la limpieza, comprometidos al trabajo organizado y eficiente.
            </p>
          </div>
        </li>

        <li class="span4">
          <div class="thumbnail-custom">
            <img src="img/mascot_mail.png" />
            <h3>Limpieza</h3>
            <p>
              Somos especialistas en la limpieza, comprometidos al trabajo organizado y eficiente. Somos especialistas en la limpieza, comprometidos al trabajo organizado y eficiente.
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