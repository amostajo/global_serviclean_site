<?php
/**
 * HTML page template.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

$page_title = 'Plantilla de páginas';

// Includes constants like PAGE_TITLE and other page PHP dependencies.
include 'include/page_block/application.php';
?>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_header.php';
?>

<div class="container">
  <form id="mailer" class="form-horizontal">
    <input type="hidden" name="subject" value="<?php echo SUBJECT_CONTACTO;?>">

    <div class="control-group">
      <label class="control-label" for="nombre_completo">Nombre completo:</label>
      <div class="controls">
        <input type="text" name="nombre_completo" placeholder="Mi nombre">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="email">Email:</label>
      <div class="controls">
        <input type="text" name="email" placeholder="yo@email.com">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="mensaje">Mensaje:</label>
      <div class="controls">
        <textarea rows="3" name="mensaje" placeholder="Su mensaje aquí"></textarea>
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <div class="row-fluid">
          <div class="div-float">
            <button id="mailer-btn" type="submit" class="btn"><i class="icon-envelope"></i> Enviar</button>
          </div>
          <div class="div-float">
            <img id="mailer-loader" class="mailer-loader" src="img/ajax-loader.gif" alt="loader">
          </div>
          <div class="div-float">
            <div id="mailer-results"></div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_footer.php';
?>