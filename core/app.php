<?php
include('database.php');
include('functions.php');
include('class.phpmailer.php');

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
ob_start('minify');

//error_reporting(0);
//ini_set('display_errors', 0);

$db = new Database();


if (isset($_COOKIE['token'])) {
    $user = $db->get_row("SELECT * FROM `user` WHERE `cookie` = '".$_COOKIE['token']."' ");
} else {
    unset($_COOKIE['token']);
    setcookie('token', null, -1, '/');
}

$setting = $db->get_row("SELECT * FROM `settings` ");

$thesieure = [
    'partner_id'    => '8137741661',
    'partner_key'   => 'f5defe5301ea86c5267ffd3de671d37f'
];

