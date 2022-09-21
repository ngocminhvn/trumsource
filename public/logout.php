<?php
require('../core/app.php'); 

$cookie = $_COOKIE['token'];

$db->update('user',[
    'cookie' => '',
    'time'   => time()
]," `cookie` = '".$cookie."' ");
unset($_COOKIE['token']);
setcookie('token', null, -1, '/');
header('Location: /');