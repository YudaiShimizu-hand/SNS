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
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新</title>
</head>
<body>
    <a href="index.php">戻る</a>
</body>
</html>