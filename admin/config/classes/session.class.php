<?php

class Session {

  private $user_object_id;
  private $user_object_fullname;

  public function __construct() {
    session_start();
    $this->check_stored_login();
  }

  public function login($user_object) {
    if($user_object) {
      // prevent session fixation attacks
      session_regenerate_id();
      $_SESSION['virtual_admin_id'] = $user_object->id;
     $_SESSION['virtual_admin_fullname'] =$user_object->full_name();
      $this->user_object_id = $user_object->id;
      $this->user_object_fullname= $user_object->full_name();
    }
    return true;
  }

  public function is_logged_in() {
    return isset($this->user_object_id);
  }

  public function logout() {
    unset($_SESSION['virtual_admin_id']);
    unset($_SESSION['virtual_admin_fullname']);
    unset($this->user_object_id);
     unset($this->user_object_fullname);
    return true;
  }

  private function check_stored_login() {
    if(isset($_SESSION['virtual_admin_id'])) {
      $this->user_object_id = $_SESSION['virtual_admin_id'];
    }
  }
    public function session_fullname() {

      return isset($this->user_object_fullname);
    }
}

?>