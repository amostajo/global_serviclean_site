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
             <ul class="nav nav-pills nav-stacked span 4" >
             	<div class="services-custom ">
	            <li><b>    Servicios</b></li>
	             </div>
                <li><a href="#">Limpieza de Vidrios</a></li>
                <li><a href="#">Limpieza de fin de obra</a></li>
                <li><a href="#">Limpieza de mantenimiento</a></li>
                <li><a href="#">Limpieza de techos</a></li>
             </ul>
          </div>
<!--BODY-->

<?php 
// Includes all custom CSS and BOOTSTRAP
include 'include/page_block/html_footer.php';
?>