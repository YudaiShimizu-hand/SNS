<?php
require('db_plus.php');
$stmt = $db->prepare('update forms set body=? where id=?');
if(!$stmt){
    echo "stmtのerrorです。";
}
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);
$stmt->bind_param('si', $body, $id);
$stmt->execute();
if($stmt){
    echo "データの更新に成功";
}