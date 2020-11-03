<?php 
require_once __DIR__.'./login.php';
session_destroy();
$base_url = base_url('cms');
header("Location: {$base_url}");
?>