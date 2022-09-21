<?php
require '../core/app.php';

$ketquacurl = GET('https://api.dailysieure.com/api-momo?api=1&apikey='.$setting['dlsr_momo']);
$ketqua = json_decode($ketquacurl, true);
if($ketqua['status'] == '1'){
    die($ketqua['msg']);
}else{
    if (!empty($checkGD)) {
        foreach (array_reverse($checkGD) as $momo) {
            $amount = injection($momo->amount);
            $comment = injection($momo->comment);
            $code = injection($momo->tranId);
    
            $row = $db->get_row(" SELECT * FROM `user` WHERE `id` = '".$comment."' ");
            if ($row['username']) {
                if ($db->num_rows("SELECT * FROM `auto_banks` WHERE `code` = '" . $code . "' ") > 0) {
                    // đã cộng
                } else {
                    $db->add("user", "money", $amount, " `id` = '" . $comment . "' ");
                    $db->add("user", "total", $amount, " `id` = '" . $comment . "' ");
                    $query = $db->insert('auto_banks', [
                        'user' => $row['username'],
                        'code' => $code,
                        'amount' => $amount,
                        'description' => $comment,
                        'type' => 'MOMO',
                        'status' => 2,
                        'time' => time(),
                    ]);
                }
            }
        }
        die();
    }
    
}