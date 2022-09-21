<?php
require('../core/app.php');
$type = $_GET['type'];

if($type == 'changetoken'){
    $token = random('32');
    $query = $db->update('user',['token' => $token]," `id` = '".$user['id']."' ");
    if($query){
        die(json_encode(array(
            'status'  => true,
            'token'   => $token,
            'message' => 'Thay đổi token thành công.'
        )));
    } 
}
if($type == 'changepassword'){
    $old_password   = $_POST['old_password'];
    $new_password   = $_POST['new_password'];
    $renew_password = $_POST['renew_password'];

    if(empty($old_password) || empty($new_password) || empty($renew_password)){
        die(json_encode(array('status' => false, 'message' => 'Vui lòng nhập đầy đủ thông tin.')));
    }
    
    if(sha1($old_password) != $user['password']){
        die(json_encode(array('status' => false, 'message' => 'Mật khẩu hiện tại không chính xác.')));
    }
    
    if($new_password != $renew_password){
        die(json_encode(array('status' => false, 'message' => 'Vui lòng nhập chính xác mật khẩu mới.')));
    }
    
    if($user['password'] == $new_password || $user['password'] == $renew_password){
        die(json_encode(array('status' => false, 'message' => 'Mật khẩu hiện tại phải khác mật khẩu mới.')));
    }

    $query = $db->update('user',['password' => injection($_POST['new-password'])]," `id` = '".$user['id']."' ");
    if($query){
        die(json_encode(array(
            'status'  => true,
            'message' => 'Thay đổi token thành công.'
        )));
    } 
}