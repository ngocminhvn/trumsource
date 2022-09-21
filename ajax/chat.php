<?php
require '../core/app.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_GET['t'] == '1'){
    foreach($db->query("SELECT * FROM `chat_user` ORDER BY id DESC limit 0,30") as $row){
        
        $rowUser = $db->get_row("SELECT * FROM `user` WHERE `username` = '".$row['buyer']."' ");
        
        if($row['buyer'] == $user['username']){
            echo '<div class="ms-4">
                <div class="fs-sm text-break text-muted my-2 text-end">
                    '.$rowUser['name'].'
                </div>
            </div>
            <div class="ms-4 text-end">
                <div class="fs-sm d-inline-block fw-medium bg-body-light border-3 px-3 py-2 mb-2 shadow-sm mw-100 border-start border-primary rounded-end">'.BBCode($row['message']).'</div>
            </div>';
        }else{
            echo '<div class="me-4">
                <div class="fs-sm text-break text-muted my-2">
                    '.$rowUser['name'].'
                </div>
            </div>
            <div class="me-4">
                <div class="fs-sm d-inline-block fw-medium bg-body-light border-3 px-3 py-2 mb-2 shadow-sm mw-100 border-start border-primary rounded-end">'.BBCode($row['message']).'</div>
            </div>';
        }
                    
    } 
}
if($_GET['t'] == '2'){
    is_user();
    
    if ($_POST['message'] == null) {
        exit(json_encode(['status' => false, 'message' => 'Tin nhắn không thể trống!']));
    }

    $rowUser = $db->get_row("SELECT * FROM `chat_user` WHERE `buyer` = '".$user['username']."' ORDER BY `id` DESC LIMIT 0,1 ");
    
    $limit = 20;
    $chatTime = (time() - $rowUser['time']);
    
    if($chatTime > $limit){
        $message = injection($_POST['message']);
        
        if(strlen($message) > 100){
            exit(json_encode(['status' => false, 'message' => 'Đạt giới hạn kí tự tin nhắn!']));
        }
        
        $query = $db->insert('chat_user',[
            'buyer'       => $user['username'],
            'message'     => $message,
            'time'        => time()
        ]);
        if ($query) {
            exit(json_encode(['status' => true, 'message' => 'Thành công!']));
        } else {
            exit(json_encode(['status' => false, 'message' => 'Error: '.$db->error()]));
        }
    } else {
        exit(json_encode(['status' => false, 'message' => 'Bạn chat quá nhanh! Hãy đợi '.trim($limit - $chatTime,'-').'s nữa nhé!']));
    }
}