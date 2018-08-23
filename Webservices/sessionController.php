<?php

if (isset($_GET['gender'])) {
    $_SESSION['gender'] = $_GET['gender'];
    
    echo 'gender has been set to ' . $_GET['gender'];
}

if (isset($_GET['logout'])) {
    if ($_GET['logout'] == TRUE) {
        session_unset();
        session_destroy();
        echo 'Logged out.';
    }
}