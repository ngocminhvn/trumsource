<?php
require('../../core/app.php');
is_admin();

    if($db->query("UPDATE `settings` SET 
    `theme`     = '".$_POST['themeSetting']."',
    `modal`     = '".$_POST['modalSetting']."',
    `thesieure` = '".$_POST['cookieSetting']."',
    `dlsr_momo` = '".$_POST['momoSetting']."' 
    ")){
        exit(json_encode(array('status' => '2', 'msg' => 'Update thành công!'))); 
    }else{
        exit(json_encode(array('status' => '1', 'msg' => 'Lỗi!'))); 
    }
?>