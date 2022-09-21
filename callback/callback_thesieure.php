<?php
require('../core/app.php');

if (isset($_GET['status']) && $_GET['code'] && $_GET['request_id'] && $_GET['serial'] && $_GET['trans_id'] && $_GET['telco'] && $_GET['callback_sign']) {
	$status = $_GET['status'];
	$request_id = $_GET['request_id'];
	$code = $_GET['code'];
	$serial = $_GET['serial'];
	$message = $_GET['message'];
	$real_money = $_GET['value'];
	$geted_money = $_GET['amount'];
	$nhamang = $_GET['telco'];
	$trans_id = $_GET['trans_id'];
	$check_sign = md5($thesieure['partner_key'].$code.$serial);
	if ($_GET['callback_sign'] == $check_sign) {
	    
    $query_card = $db->get_row("SELECT * FROM `auto_banks` WHERE `code` = '".$request_id."' AND `status` = '1' ");

	if ($status == 1) {

    $db->add("user", "money", $real_money, " `username` = '" . $query_card['user'] . "' ");
    $db->add("user", "total", $real_money, " `username` = '" . $query_card['user'] . "' ");
    $db->query("UPDATE `auto_banks` SET `status` = '2' WHERE `code` = '".$request_id."' ");

	} elseif ($status == 2) {
        $db->query("UPDATE `auto_banks` SET `status` = '0' WHERE `code` = '".$request_id."' ");
	} elseif ($status == 3) {
        $db->query("UPDATE `auto_banks` SET `status` = '0' WHERE `code` = '".$request_id."' ");
	} elseif ($status == 4) {
        $db->query("UPDATE `auto_banks` SET `status` = '0' WHERE `code` = '".$request_id."' ");
	} elseif ($status == 99) {
        $db->query("UPDATE `auto_banks` SET `status` = '0' WHERE `code` = '".$request_id."' ");
	} else {
        $db->query("UPDATE `auto_banks` SET `status` = '0' WHERE `code` = '".$request_id."' ");
	}

	}
} else {
	die('No per to access here');
}