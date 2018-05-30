<?php
    require_once '../class/user.php';
    require_once 'config.php';

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

    if( $user->login( $username, $password) ) {
        die;
    } else {
        $user->printMsg();
        die;
    }
