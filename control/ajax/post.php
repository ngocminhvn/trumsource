<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/config.php'; 

$text = $_POST['note'];

if($text == ""){
    exit(json_encode(array('status' => '1', 'msg' => 'Không được để trống!' , 'type' => 'error'))); 
}

    $CMD = $ketnoi->query("INSERT INTO `post` SET 
    `text` = '".$text."',
    `time` = '".date("d-m-Y H:i:s")."',
    `action` = '".rand(100,999)."'
    ");
    
    if($CMD){
    exit(json_encode(array('status' => '2', 'msg' => 'Update thành công!' , 'type' => 'error'))); 
    }else{
    exit(json_encode(array('status' => '1', 'msg' => 'Lỗi!' , 'type' => 'error'))); 
    }
?>