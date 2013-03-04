<?php
/**
 * This class provides all the logic needed to capture all POST and GET arguments. It also cleans up the variables and prevents injections.
 *
 * PHP version 5.3
 * @author Alejandro Mostajo
 * @version 1.0
 */

class Arguments {
  /**
   * Arguments.
   */
  private $_args = array();
  
  /**
   * Class constructor.
   * 
   * @return nothing
   */
  public function __construct () {
    $this->_args = array();
    // GET arguments
    $this->get_args();
  }

  /**
   * Gets a GET or POST argument.
   *
   * @param string $key Name of the argument.
   * @param $apply_caps (OPTIONAL) Applay caps or MAYUS flag.
   * 
   * @return object Value of the argument. (Empty string if not found)
   */
  public function get ($key, $apply_caps = false) {
    if (array_key_exists($key, $this->_args)) {
      // Mayus
      if($apply_caps && !intval($this->_args[$key])) {
        return ucfirst(strtolower($this->_args[$key]));
      }
      return $this->_args[$key];
    } else {
      return "";
    }
  }

  /**
   * Validates if the given keys exists in the arguments.
   *
   * @param array $args Arguments to validate.
   * 
   * @return boolean Flag indicating the existance.
   */
  public function exists ($args) {
    foreach ($args as $key) {
      if (!array_key_exists($key, $this->_args)) {
        return false;
      }
    }
    return true;
  }

  /**
   * Returns all the arguments as an array.
   *
   * @return array with all args.
   */
  public function get_all () {
    return $this->_args;
  }

  /**
   * Checks for all the GET and POST arguments, cleans the entry values and returns the information as an array.
   * 
   * @return nothing
   */
  private function get_args () {
    // GET arguments
    foreach ($_GET as $key => $value) {
      $this->_args[trim($key)] = $this->clean_value($value);
    }
    foreach ($_POST as $key => $value) {
      $this->_args[trim($key)] = $this->clean_value($value);
    }
  }

  /**
   * Cleans an argument value.
   *
   * @param object $value Value to clean.
   *
   * @return object Cleaned value.
   */
  private function clean_value ($value) {
    return htmlentities(trim($value));
  }
}
?>