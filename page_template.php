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
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo PAGE_TITLE?></title>
    <?php 
    // Includes all custom CSS and BOOTSTRAP
    include 'include/page_block/html_head.php';
    ?>
  </head>

  <body>

    <?php 
    // Navigation bar
    include 'include/page_block/nav.php';
    ?>

    <!--BODY-->

    <?php 
    // Includes all custom JS like JQUERY and BOOTSTRAP
    include 'include/page_block/html_body_includes.php';
    ?>
    
  </body>

</html>