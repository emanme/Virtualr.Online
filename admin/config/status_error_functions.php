<?php

function require_login() {
  global $session;
  if(!$session->is_logged_in()) {
    redirect_to(url_for('/login.php'));
  } else {
    // Do nothing, let the rest of the page proceed
  }
}

function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= " <div class=\"alert alert-warning alert-dismissible\">
    <h4><i class=\"icon fa fa-warning\"></i> Alert!</h4>";
    
     
    foreach($errors as $error) {
      $output .= "<p class=''>" . h($error) . "</p>";
    }
    $output .= "";
    $output .= "</div>";
  }
  return $output;
}

 
function display_message($messages=array()) {
  $output = '';
  if(!empty($messages)) {
    $output .= " <div class=\"alert alert-success alert-dismissible\">
    <h4><i class=\"icon fa fa-check\"></i> Success!</h4>";
    
     
    foreach($messages as $message) {
      $output .= "<p class=''>" . h($message) . "</p>";
    }
    $output .= "";
    $output .= "</div>";
  }
  return $output;
}
function get_and_clear_session_message() {
  if(isset($_SESSION['message']) && $_SESSION['message'] != '') {
    $msg = $_SESSION['message'];
    unset($_SESSION['message']);
    return $msg;
  }
}

function display_session_message() {
  $msg = get_and_clear_session_message();
  if(isset($msg) && $msg != '') {
    return '<div id="message">' . h($msg) . '</div>';
  }
}

?>
