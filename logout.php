<?php
require_once 'includes/config.php';

session_unset();
session_destroy();

redirect('/facul/login.php');
?>