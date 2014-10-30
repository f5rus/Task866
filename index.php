<?php
    require_once 'Verification.php';
    session_start();
    $aut = new Authenticatable();
    $aut->verifyPassword('User');
