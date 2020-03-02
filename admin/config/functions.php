<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}
function format_currency($value){
  return number_format((float)$value, 2, '.', '');
}
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}
function generate_random($chars)
{
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 return    substr(str_shuffle($permitted_chars), 0, $chars);
}
// PHP on Windows does not have a money_format() function.
// This is a super-simple replacement.
if(!function_exists('money_format')) {
  function money_format($format, $number) {
    return '$' . number_format($number, 2);
  }
}
function datef($date){

  return date_format(date_create($date),"M d, Y h:i A");
}
function datef2($date){

  return date_format(date_create($date),"m/d/y h:i A");
}
function datef3($date){

  return date_format(date_create($date),"m/d/y");
}
function datef4($date){

  return date_format(date_create($date),"h:i A");
}

function img_check($url){
  $img =url_for($url);
  if (file_exists("/".$url)) {
    $img=url_for('img/360default.png') ;
}
return $img;
}
?>
