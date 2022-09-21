<?php
require('../../core/app.php');

$value  = $_POST['value'];
$id     = $_POST['id'];

if($value == "" || $id == ""){
    exit('empty');
}
 
$update = $db->update('user',['money' => $value]," `id` = '".$id."' ");
    
if($update){
    exit('success');
}else{ 
    exit('error');
}
?>