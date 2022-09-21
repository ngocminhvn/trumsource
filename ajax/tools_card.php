<?php
require('../core/app.php');

$name       = injection($_POST['name']);
$facebook   = injection($_POST['facebook']);
$phone      = injection($_POST['phone']);
$job        = injection($_POST['job']);
$location   = injection($_POST['location']);
$stk        = injection($_POST['stk']);
$avatar     = trim($_POST['avatar']);

if(empty($name) ||empty($facebook) || empty($phone) || empty($job) || empty($location) || empty($stk)) {
    die(json_encode(array(
        'status'  => false,
        'message' => 'Vui lòng điền đầy đủ thông tin.'
    )));   
}

if($db->num_rows("SELECT * FROM `card_user` WHERE `facebook` = '".$facebook."' ") > 0)
{
    die(json_encode(array(
        'status'  => false,
        'message' => 'Bạn đã đạt giới hạn tạo tài khoản cho phép.'
    )));  
}

$query = $db->insert('card_user',[
    'code'        => slug($name),
    'buyer'       => $user['id'],
    'name'        => $name,
    'avatar'      => $avatar,
    'phone'       => $phone,
    'job'         => $job,
    'location'    => $location,
    'facebook'    => $facebook,
    'stk'         => $stk,
    'time'        => time()
]);
if($query){
    die(json_encode(array(
        'status'  => true,
        'message' => 'Tạo thành công.'
    )));  
}