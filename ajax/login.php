<?php
require('../core/app.php');
/**
 * ----- vaidivale -----
 */
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(empty($_POST['username'])){
    die(json_encode(array(
        'status'  => false,
        'message' => 'Trường tài khoản không được bỏ trống.'
    )));
}
if(empty($_POST['password'])){
    die(json_encode(array(
        'status'  => false,
        'message' => 'Trường mật khẩu không được bỏ trống.'
    )));
}
/**
 * ----- database -----
 */
$query = $db->get_row("SELECT * FROM `user` WHERE `username` = '".injection($_POST['username'])."' AND `password` = '".sha1($_POST['password'])."' ");
if($query) {
    $cookie = random('32');
    if(isset($_POST['cookie'])){
        setcookie('token', $cookie, time() + 604800, '/');
    }else{
        setcookie('token', $cookie, time() + 86400, '/');
    }
    
    $db->update('user',[
        'cookie'      => $cookie,
        'time'        => time(),
        'ipaddress'   => $_SERVER['REMOTE_ADDR']
    ]," `id` = '".$query['id']."' ");
    
    die(json_encode(array(
        'status'  => true,
        'message' => 'Đăng nhập thành công.'
    )));
}else{
    die(json_encode(array(
        'status'  => false,
        'message' => 'Tài khoản hoặc mật khẩu không chính xác.'
    )));    
}