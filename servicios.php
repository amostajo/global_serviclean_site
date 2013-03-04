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
    <ul class="nav nav-tabs nav-stacked" >
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de Vidrios</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de fin de obra</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de mantenimiento</a></li>
      <li><a href="#"><i class="icon-chevron-right"></i> Limpieza de techos</a></li>
    </ul>
  </div>
</div>

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_footer.php';
?>