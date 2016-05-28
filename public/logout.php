<?php
require_once '../utils/Auth.php';
    session_start();
    
    Auth::logout();

    header("Location: /");
    exit;
    
?>