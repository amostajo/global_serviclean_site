<?php
/**
 * Testing sample of how to use the mailer class.
 * WHO TO TEST:
 *    Call this on the browser like:
 *      - [GET] SAMPLE
 *      - http://mydomain/mailer_test.php?subject=Test email&body=This is the body of the message.&
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

include 'include/php/classes/arguments_class.php';
include 'include/php/classes/mailer_class.php';

// Get arguments
$args = new Arguments();
// Assign variables
$to = 'caemostajo@gmail.com';
$from_name = 'Global Serviclean';
$from_email = 'noreply@globalserviclean.com';
$subject = $args->get('subject');
$body = $args->get('body');

// Create mailer
$mailer = new Mailer($to, $from_name, $from_email);
// Send email if expected args exist.
if ($args->exists(array('subject','body'))) {
  if (!$mailer->send($subject, $body)) {
    throw new Exception("Couldn't send email. Server problems.");
  }
} else {
  throw new Exception("Args missing... Subject and body.");
}
?>