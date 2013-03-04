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
   * @param array  $args       Arguments as array.
   * @param string &$subject   BY REF email's subject.
   * @param string &$body      BY REF email's body.
   * @param array  $white_list Keys that are permitted to pass.
   *
   * @return by ref
   */
  static function for_email ($args, &$subject, &$body, $white_list = array()) {
    $subject = $body = '';
    foreach ($args as $key => $value) {
      if (!empty($value) && (empty($white_list) || array_key_exists($key, $white_list))) {
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