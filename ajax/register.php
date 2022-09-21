<?php
require('../core/app.php');
/**
 * ----- vaidivale -----
 */
if(empty($_POST['myname'])){
    die(json_encode(array(
        'status'  => false,
        'message' => 'Trường họ tên không được bỏ trống.'
    )));
}
if(empty($_POST['username'])){
    die(json_encode(array(
        'status'  => false,
        'message' => 'Trường tài khoản không được bỏ trống.'
    )));
}
if(empty($_POST['email'])){
    die(json_encode(array(
        'status'  => false,
        'message' => 'Trường email không được bỏ trống.'
    )));
}
if (!vaidivale_email($_POST['email'])) {
    die(json_encode(array(
        'status'  => false,
        'message' => 'Định dạng email không chính xác.'
    )));
}
if(empty($_POST['password'])){
    die(json_encode(array(
        'status'  => false,
        'message' => 'Trường mật khẩu không được bỏ trống.'
    )));
}
vaidivale(array($_POST['username'],$_POST['email'],$_POST['password'],$_POST['myname']));
/**
 * ----- database -----
 */
if($db->num_rows("SELECT * FROM `user` WHERE `username` = '".$_POST['username']."' ") > 0)
{
    die(json_encode(array(
        'status'  => false,
        'message' => 'Tên đăng nhập đã tồn tại trong hệ thống.'
    )));  
}
if($db->num_rows("SELECT * FROM `user` WHERE `email` = '".$_POST['email']."' ") > 0)
{
    die(json_encode(array(
        'status'  => false,
        'message' => 'Địa chỉ email đã tồn tại trong hệ thống.'
    )));  
}
if($db->num_rows("SELECT * FROM `user` WHERE `ipaddress` = '".$_SERVER['REMOTE_ADDR']."' ") >= 2)
{
    die(json_encode(array(
        'status'  => false,
        'message' => 'IP của bạn đã đạt giới hạn tạo tài khoản cho phép.'
    )));  
}
$cookie = random('32');
$query = $db->insert('user',[
    'name'        => $_POST['myname'],
    'email'       => $_POST['email'],
    'username'    => $_POST['username'],
    'password'    => sha1($_POST['password']),
    'money'       => '0',
    'total'       => '0',
    'role'        => '0',
    'token'       => random('32'),
    'cookie'      => $cookie,
    'ipaddress'   => $_SERVER['REMOTE_ADDR'],
    'time'        => time()
]);
if($query){
    if(isset($_POST['cookie'])){
        setcookie('token', $cookie, time() + 604800, '/');
    }else{
        setcookie('token', $cookie, time() + 86400, '/');
    }
    die(json_encode(array(
        'status'  => true,
        'message' => 'Tạo tài khoản thành công!'
    )));
}else {
    die(json_encode(array(
        'status'  => false,
        'message' => 'Error: '.$db->error()
    )));
}
