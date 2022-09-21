<?php
require('../../core/app.php');

if(empty($_POST['name']) || empty($_POST['thumbnail']) || empty($_POST['download'])){
    die(json_encode(array(
        'status'  => false,
        'message' => 'Vui lòng nhập đầy đủ thông tin.'
    ))); 
}

$query = $db->insert('code_products',[
    'name'        => $_POST['name'],
    'amount'      => $_POST['amount'],
    'demo'        => $_POST['demo'],
    'thumbnail'   => $_POST['thumbnail'],
    'download'    => $_POST['download'],
    'time'        => time()
]);
if($query){
    die(json_encode(array(
        'status'  => true,
        'message' => 'Thêm code khoản thành công!'
    )));
}else {
    die(json_encode(array(
        'status'  => false,
        'message' => 'Error: '.$db->error()
    )));
}