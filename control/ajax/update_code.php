<?php
require('../../core/app.php');

$value  = $_POST['value'];
$id     = $_POST['id'];

if($value == "" || $id == ""){
    exit('empty');
}
 
$update = $db->update('code_products',['amount' => $value]," `id` = '".$id."' ");
    
if($update){
    exit('success');
}else{ 
    exit('error');
}
?>