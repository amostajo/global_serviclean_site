<?php
/**
 * This scripts processes POST and GET params and send an email. USED IN AJAX calls.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

include './../classes/arguments_class.php';
include './../classes/form_processor_class.php';
include './../classes/mailer_class.php';

// Variables
$b_sent = false;
$to = 'caemostajo@gmail.com';
$from_name = 'Global Serviclean';
$from_email = 'noreply@globalserviclean.com';
$subject = $body = '';

// Get arguments
$args = new Arguments();
// Create mailer
$mailer = new Mailer($to, $from_name, $from_email);
// Validate and send
if ($args->exists(array('subject'))) {
  // Process arguments and retrieve SUBJECT and BODY
  FormProcessor::for_email($args->get_all(), $subject, $body);
  if (!empty($body)) {
    // Send email
    try {
      $b_sent = $mailer->send($subject, $body);
    } catch (Exception $ex) {
      $b_sent = false;
    }
  }
}
?>

<?php
if ($b_sent) {
  ?>
  <div class="alert alert-success"><i class="icon-ok"></i> Enviado</div>
  <?php
} else {
  ?>
  <div class="alert alert-error"><i class="icon-remove"></i> Error</div>
  <?php
}
?>