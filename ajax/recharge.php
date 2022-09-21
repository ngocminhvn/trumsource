<?php
require('../core/app.php');

if(empty($_POST['type']) || empty($_POST['amount']) || empty($_POST['seri']) || empty($_POST['code'])){
    die(json_encode(array(
        'status'  => false,
        'message' => 'Các trường không được bỏ trống.'
    )));
}

$type   = $_POST['type'];
$amount = $_POST['amount'];
$seri   = $_POST['seri'];
$code   = $_POST['code'];
$tranid = rand(10000,999999);

$data = array(
    'telco' => $type,
    'code' => $code,
    'serial' => $seri,
    'amount' => $amount,
    'request_id' => $tranid,
    'partner_id' => $partner_id,
    'sign' => md5($thesieure['partner_key'] . $code . $seri),
    'command' => 'charging'
);
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => 'http://thesieure.com/chargingws/v2?'.http_build_query($data),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
    ],
]);
$result = curl_exec($curl);
curl_close($curl);

$jsonData = json_decode($result, true);

if($jsonData['status'] == 99){
    $query = $db->insert('auto_banks',[
        'user'          => $user['username'],
        'code'          => $tranid,
        'amount'        => $amount,
        'description'   => $user['username'].' nạp card',
        'type'          => $type,
        'status'        => 1,
        'time'          => time()
    ]);
    die(json_encode(array(
        'status'  => true,
        'message' => 'Nạp thẻ thành công vui lòng chờ kiểm tra.'
    )));
}else if($jsonData['status'] == 100){
    die(json_encode(array('status' => false, 'message' => ''.$jsonData['message'].''))); 
}else if($jsonData['status'] == 3){
    die(json_encode(array('status' => false, 'message' => 'Vui lòng nhập đúng thông tin thẻ!'))); 
}else{
    die(json_encode(array('status' => false, 'message' => 'Tạm bảo trì vui lòng thử lại sau!'))); 
}