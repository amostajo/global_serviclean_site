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
          <input type="email" name="email" placeholder="yo@email.com" required validemail
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

    <div class="form-actions"> 
      <button id="mailer-btn" type="submit" class="btn btn-primary"><i class="icon-envelope icon-white"></i> Enviar</button>
    </div>
    <div class="row-fluid">
      <div class="div-float">
        <img id="mailer-loader" class="mailer-loader" src="img/ajax-loader.gif" alt="loader">
      </div>
      <div class="div-float">
        <div id="mailer-results"></div>
      </div>
    </div>
  </form>
</div>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_footer.php';
?>