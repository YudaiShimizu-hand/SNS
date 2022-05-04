<?php
require('db_plus.php');
$content = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS );
$stmt = $db->prepare('insert into forms(body) values(?)');
if(!$stmt){
    echo "stmtのerrorです。";
}
$stmt->bind_param('s', $content);
$ret = $stmt->execute();
if($ret){
    echo '投稿に成功しました。';
}