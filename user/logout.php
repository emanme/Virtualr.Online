<?php
require_once('config/initialize.php');

// Log out the admin
$session->logout();

redirect_to(url_for('login.php'));

?>
