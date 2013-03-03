<?php
/**
 * This class provides mailing functionality.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

class Mailer {
  /**
   * TO who to send the email.
   */
  private $_to = '';
  /**
   * HTML modifier.
   */
  private $_html = '';
  /**
   * Email's from who.
   */
  public $_from = '';
  /**
   * Email's from who.
   */
  public $_from_email = '';
  /**
   * Email's cc.
   */
  public $_cc = '';
  /**
   * Email's cc.
   */
  public $_bcc = '';
  /**
   * Email's subject.
   */
  public $subject = '';
  /**
   * Email's body.
   */
  public $body = '';

  /**
   * Class constructor.
   *
   * @param string  $to         To who to send the email.
   * @param string  $from_name  (OPTIONAL) Email's from who (name).
   * @param string  $from_email (OPTIONAL) Email's from who (email).
   * @param boolean $html       (OPTIONAL) Indicates if the email is HTML or text only. HTML by default.
   * 
   * @return nothing
   */
  public function __construct ($to, $from_name = '', $from_email = '', $html = true) {
    $this->_to = $to;
    // Only setup from if both params are not empty
    if (!empty($from_email) && !empty($from_name)) {
      $this->from($from_name, $from_email);
    }
    if ($html) {
      $this->_html = 'Content-type: text/html; charset=iso-8859-1;\r\n';
    }
  }

  /**
   * Setups email's FROM
   *
   * @param string  $name  Email's from who (name).
   * @param string  $email Email's from who (email).
   *
   * @return nothing
   */
  public function from ($name, $email) {
    if (empty($name) || empty($email)) {
      throw new Exception('Email\' from is expecting a Name and an Email.');
    }
    $this->_from = 'From: ' . $name . '" <' . $email . '>\r\n';
    $this->_from_email = $email;
  }

  /**
   * Setups email's CC
   *
   * @param string $cc  Email's cc (emails).
   *
   * @return nothing
   */
  public function cc ($cc) {
    if (empty($cc)) {
      throw new Exception('Email\'s CC is empty.');
    }
    $this->_from = 'CC: ' . $cc . '\r\n';
  }

  /**
   * Setups email's BCC
   *
   * @param string $cc  Email's bcc (emails).
   *
   * @return nothing
   */
  public function bcc ($bcc) {
    if (empty($bcc)) {
      throw new Exception('Email\'s BCC is empty.');
    }
    $this->_from = 'BCC: ' . $bcc . '\r\n';
  }

  /**
   * Sends an email. If no parameters are indicated, it will send an email used the last params set.
   *
   * @param string $subject    (OPTIONAL) Email's subject.
   * @param string $body       (OPTIONAL) Email's body.
   * @param string $from_name  (OPTIONAL) Email's from who (name).
   * @param string $from_email (OPTIONAL) Email's from who (email).
   * @param string $cc         (OPTIONAL) Email's cc (emails).
   * @param string $bcc        (OPTIONAL) Email's bcc (emails).
   *
   * @return boolean indicating if the message was sent or not.
   */
  public function send ($subject = '', $body = '', $from_name = '', $from_email = '', $cc = '', $bcc = '') {
    $sent = false;
    // Only setup from if both params are not empty
    if (!empty($from_email) && !empty($from_name)) {
      $this->from($from_name, $from_email);
    }
    if (!empty($subject)) {
      $this->subject = $subject;
    }
    if (!empty($body)) {
      $this->body = $body;
    }
    if (!empty($cc)) {
      $this->cc($cc);
    }
    if (!empty($bcc)) {
      $this->bcc($bcc);
    }
    // Validate prior send
    $this->validate_properties();
    // Send
    if (mail(
        $this->_to, 
        $this->subject, 
        $this->body, 
        $this->_html . $this->_from . $this->_cc . $this->_bcc,
        '-f ' . $this->_from_email
    )) {
      $sent = true;
    }
    return $sent;
  }

  /**
   * Validates properties before sending an email.
   *
   * @return nothing
   */
  private function validate_properties () {
    if (empty($this->_to) || empty($this->_from) || empty($this->subject) || empty($this->body)) {
      throw new Exception("Email's required information is empty.");      
    }
  }
}
?>