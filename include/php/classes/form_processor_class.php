<?php
/**
 * Form procesor.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

class FormProcessor {
  /**
   * Processes a given list of arguments and return BY REF the subject and the body.
   *
   * @param array  $args     Arguments as array.
   * @param string &$subject BY REF email's subject.
   * @param string &$body    BY REF email's body.
   *
   * @return by ref
   */
  static function for_email ($args, &$subject, &$body) {
    $subject = $body = '';
    foreach ($args as $key => $value) {
      if (!empty($value)) {
        switch ($key) {
          case 'subject':
            $subject = $value;
            break;
          
          default:
            $body .= '<p><b>' . ucfirst(strtolower(str_replace('_', ' ', $key))) . ':</b> ' . $value . '</p>';
            break;
        }
      }
    }
  }
}

?>