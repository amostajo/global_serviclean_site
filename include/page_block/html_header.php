<?php
/**
 * Header includes and others. This will be common to all the sites.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

// Validate de existance of a page_title and format it for page view.
$page_title = isset($page_title) && !empty($page_title) ? ' - ' . $page_title : '';
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo PAGE_TITLE . $page_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="css/gs.css" rel="stylesheet">
    <link href="css/mailer.css" rel="stylesheet">
  </head>

  <body>

    <?php 
    // Navigation bar
    include 'include/page_block/nav.php';
    ?>

    <div class="wrapper">