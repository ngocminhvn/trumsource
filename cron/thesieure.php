<?php
require '../core/app.php';

$response = json_decode(file_get_contents('http://' . $_SERVER['SERVER_NAME'] . '/core/thesieure.php'), true);

if ($response) {
    foreach ($response['TranList'] as $tsr) {
        $type = $tsr['io'];
        $amount = injection($tsr['amount']);
        $comment = injection($tsr['description']);
        $code = injection($tsr['code']);

        $row = $db->get_row(" SELECT * FROM `user` WHERE `id` = '".$comment."' ");
        if ($row['username']) {
            if ($type == "+") {
                if ($db->num_rows("SELECT * FROM `auto_banks` WHERE `code` = '" . $code . "' ") > 0) {
                    // đã cộng
                } else {
                    $db->add("user", "money", $amount, " `id` = '" . $comment . "' ");
                    $db->add("user", "total", $amount, " `id` = '" . $comment . "' ");
                    $query = $db->insert('auto_banks', [
                        'user'          => $row['username'],
                        'code'          => $code,
                        'amount'        => $amount,
                        'description'   => $comment,
                        'type'          => 'Thẻ siêu rẻ',
                        'status'        => 2,
                        'time'          => time(),
                    ]);
                }
            }
        }
    }
    die();
}
