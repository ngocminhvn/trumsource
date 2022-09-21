<?php 
require('../core/app.php');

is_user();

if(isset($_POST['id'])){
    $row = $db->get_row("SELECT * FROM `code_products` WHERE `id` = '".injection($_POST['id'])."'");
    if (!$row) {
        die(json_encode(array(
            'status'  => false,
            'message' => 'Không xác định code.'
        )));
    }
    if($user['money'] < $row['amount']){
        die(json_encode(array(
            'status'  => false,
            'message' => 'Không đủ số tiền '.number_format($row['amount']).'đ'
        )));   
    }
}

$db->query("UPDATE user SET `money` = `money` - '".$row['amount']."' WHERE id = '".$user['id']."' ");
$db->insert('code_historys',[
    'buyer'         => $user['id'],
    'code'          => $row['id'],
    'time'          => time()
]);
die(json_encode(array(
    'status'  => true,
    'message' => 'Mua thành công.'
)));